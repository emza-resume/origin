<?php

namespace Shetabit\Payment\Drivers\Paystar;

use GuzzleHttp\Client;
use Shetabit\Payment\Abstracts\Driver;
use Shetabit\Payment\Exceptions\InvalidPaymentException;
use Shetabit\Payment\Exceptions\PurchaseFailedException;
use Shetabit\Payment\Contracts\ReceiptInterface;
use Shetabit\Payment\Invoice;
use Shetabit\Payment\Receipt;

class Paystar extends Driver
{
    /**
     * Paystar Client.
     *
     * @var object
     */
    protected $client;

    /**
     * Invoice
     *
     * @var Invoice
     */
    protected $invoice;

    /**
     * Driver settings
     *
     * @var object
     */
    protected $settings;

    /**
     * Paystar constructor.
     * Construct the class with the relevant settings.
     *
     * @param Invoice $invoice
     * @param $settings
     */
    public function __construct(Invoice $invoice, $settings)
    {
        $this->invoice($invoice);
        $this->settings = (object) $settings;
        $this->client = new Client();
    }

    /**
     * Purchase Invoice.
     *
     * @return string
     *
     * @throws PurchaseFailedException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function purchase()
    {
        $details = $this->invoice->getDetails();

        $data = array(
            'amount' => $this->invoice->getAmount(),
            'email' => $details['email'] ?? null,
            'phone' => $details['mobile'] ?? $details['phone'] ?? null,
            'pin' => $this->settings->merchantId,
            'desc' => $details['description'] ?? $this->settings->description,
            'callback' => $this->settings->callbackUrl,
        );

        $response = $this
            ->client
            ->request(
                'POST',
                $this->settings->apiPurchaseUrl,
                [
                    "form_params" => $data,
                    "http_errors" => false,
                ]
            );

        $body = $response->getBody()->getContents();

        if (is_numeric($body)) {
            // some error has happened
            throw new PurchaseFailedException($this->translateStatus($body));
        }

        $this->invoice->transactionId($body);

        // return the transaction's id
        return $this->invoice->getTransactionId();
    }

    /**
     * Pay the Invoice
     *
     * @return \Illuminate\Http\RedirectResponse|mixed
     */
    public function pay()
    {
        $apiUrl = $this->settings->apiPaymentUrl;
        $payUrl = $apiUrl.$this->invoice->getTransactionId();

        // redirect using laravel logic
        return redirect()->to($payUrl);
    }

    /**
     * Verify payment
     *
     * @return mixed|void
     *
     * @throws InvalidPaymentException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function verify() : ReceiptInterface
    {
        $transId = $this->invoice->getTransactionId() ?? request()->input('transid');

        $data = [
            'amount' => $this->invoice->getAmount(),
            'pin' => $this->settings->merchantId,
            'transid' => $transId,
        ];

        $response = $this->client->request(
            'POST',
            $this->settings->apiVerificationUrl,
            [
                'form_params' => $data,
                "http_errors" => false,
            ]
        );
        $body = $response->getBody()->getContents();

        if ($body != 1) {
            throw new InvalidPaymentException($this->translateStatus($body));
        }

        return $this->createReceipt($transId);
    }

    /**
     * Generate the payment's receipt
     *
     * @param $referenceId
     *
     * @return Receipt
     */
    protected function createReceipt($referenceId)
    {
        $receipt = new Receipt('paystar', $referenceId);

        return $receipt;
    }

    /**
     * Trigger an exception
     *
     * @param $status
     *
     * @return mixed|string
     */
    private function translateStatus($status)
    {
        $status = (string) $status;

        $translations = array(
            "???1" => "???????? ???????????? ???????????????? ???????? ????????.",
            "???2" => "???? ?????? ??????????(???? ??????????) ???????????????? ???????? ????????.",
            "???3" => "???????? ???????????? (callback) ???????????????? ???????? ????????.",
            "???4" => "???????? ???????????? ???????? ???????? ????????.",
            "???5" => "???????? ???????????? ???????? ???????????? ???? ?????? ????????.",
            "???6" => "???? ?????? ?????????? (??????????) ???????????? ??????.",
            "???7" => "???????? ???????? ???? ???????? ?????????? ???????????? ??????????",
            "???8" => "???? ???????????? (transid) ???????????????? ???????? ????????.",
            "???9" => "???????????? ???????? ?????? ???????? ??????????.",
            "???10" => "?????????? ?????????? ???? ?????????? ???????????? ???????????? ??????????.",
            "???11" => "???????? ???? ???????? ???????????? ???????????? ??????????.",
            "-12" => "???????? ?????????????? ???????????? ??????.",
            "-13" => "?????????? ?????????????? ??????.",
            "-14" => "???????? ?????????? ?????????? ???????? ??????.",
        );

        $unknownError = '???????? ???????????????? ???? ???????? ??????.';

        return array_key_exists($status, $translations) ? $translations[$status] : $unknownError;
    }
}
