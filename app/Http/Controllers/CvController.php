<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Redirect;
use SoapClient;
use Dompdf\Dompdf;
use App\Licencie;
use PDF;
use Artisan;
use Verta;


use Illuminate\Support\Facades\Validator;

class CvController extends Controller
{
    public function get_massages($muserid)
    {
        $getmassages = DB::table('tbl_massages')->where('MassageUserid',$muserid)->where('Massagehide','<>',1)->get();
        $created_at = new Verta();
        foreach($getmassages as $massage)
        {
            $created_at = Verta::instance($massage->created_at);
        }
        return view('home-massage',compact('getmassages','created_at'));
    }
    public function get_msg($id)
    {
        DB::table('tbl_massages')
        ->where('Massageid', $id)
        ->update(['MassageShow' => 1]);
        $getmassage = DB::table('tbl_massages')->where('Massageid',$id)->first();
        $created_at = new Verta();
        $created_at = Verta::instance($getmassage->created_at);
        return view('home-massage-one',compact('getmassage','created_at'));
    }
    public function show_help_download($batch)
    {
        return view('cv.help-print',compact('batch'));
    }
    public function delete_msg($id)
    {
        DB::table('tbl_massages')
        ->where('Massageid', $id)
        ->update(['Massagehide' => 1]);
        return redirect()->back();
    }
    public function go_to_bank(Request $request)
    {
                $price = $request->input('price');
                $id = $request->input('id');
                $email = $request->input('email');
                $mobile = $request->input('mobile');
                //bank code
                $MerchantID = '63ece126-559d-11ea-8f35-000c295eb8fc'; //Required
                $Amount = $price / 10; //Amount will be based on Toman - Required
                $Description = 'هزینه وبسایت رزومه‌ای'; // Required
                $Email = $email; // Optional
                $Mobile = $mobile; // Optional
                $CallbackURL = 'https://www.emza.app/website-status/'.$id; // Required
                
                $client = new SoapClient('https://www.zarinpal.com/pg/services/WebGate/wsdl', ['encoding' => 'UTF-8']);
                
                $result = $client->PaymentRequest(
                [
                'MerchantID' => $MerchantID,
                'Amount' => $Amount,
                'Description' => $Description,
                'Email' => $Email,
                'Mobile' => $Mobile,
                'CallbackURL' => $CallbackURL,
                ]
                );
                
                //Redirect to URL You can do it also by creating a form
                if ($result->Status == 100) {
                Header('Location: https://www.zarinpal.com/pg/StartPay/'.$result->Authority);
                //برای استفاده از زرین گیت باید ادرس به صورت زیر تغییر کند:
                Header('Location: https://www.zarinpal.com/pg/StartPay/'.$result->Authority.'/ZarinGate');
                } else {
                echo'ERR: '.$result->Status;
                }
                //end bank code
    }
    public function get_status_site($id)
    {
        $getbases = DB::table('tbl_base')->where('Baseid',$id)->first();
        if($getbases->RequestSite == 1)
        {
            $msg = "در دست بررسی";
        }
        if($getbases->RequestSite == 2)
        {
            $msg = "تایید شده و منتظر پرداخت هزینه";
        }
        if($getbases->RequestSite == 3)
        {
            $msg = "پرداخت شده - در دست ساخت";
        }
        if($getbases->RequestSite == 4)
        {
            $msg = "قابل استفاده";
        }
        return view('cv.status-site',compact('getbases','msg'));
    }
    public function get_website()
    {
        return view('website.index');
    }
    public function send_request_form_website(Request $request)
    {
        
       $website = $request->input('website');
       $id = $request->input('cvid');
       $getbases = DB::table('tbl_base')->get();
       foreach($getbases as $base)
       {
            if($base->BaseWebsite == $website)
            {
                return Redirect::back()->withErrors(['msg', 'این وبسایت قبلاً ثبت شده است.']);
            }
            else
            {
                
            }
       }
       DB::table('tbl_base')
       ->where('Baseid', $id)
       ->update(['BaseWebsite' => $website,'RequestSite' => 1]);

       return view('cv.ok-request-website');
    }
    public function get_form_avatar()
    {
        $batch = session('batch');
        $mg = 1;
        $getbases = DB::table('tbl_base')->where('BaseBatch',$batch)->first();
        $getbases_b = DB::table('tbl_base_b')->where('BaseBatch',$batch)->first();
        $getedus = DB::table('tbl_educational')->where('BatchNumber',$batch)->orderBy('Eduid', 'asc')->get();
        $getcourses = DB::table('tbl_courses')->where('CoursesBatch',$batch)->orderBy('Coursesid', 'asc')->get();
        $getworks = DB::table('tbl_work_experience')->where('WorkBatch',$batch)->orderBy('Workid', 'asc')->get();
        $getlangs = DB::table('tbl_languages')->where('LangBatch',$batch)->orderBy('Langid', 'asc')->get();
        $getprojects = DB::table('tbl_projects')->where('ProjectBatch',$batch)->orderBy('Projectid', 'asc')->get();
        $getthesis= DB::table('tbl_articles')->where('ArticleBatch',$batch)->orderBy('Articlesid', 'asc')->get();
        $getskills = DB::table('tbl_skills')->where('SkillsBatch',$batch)->orderBy('Skillsid', 'asc')->get();
        $bar_batch = $getbases->BaseBatch;
        $bb1 = substr($bar_batch,0,1) + 1; 
        $bb2 = substr($bar_batch,1,1) + 1;
        $bb3 = substr($bar_batch,2,1) + 1;
        $bb4 = substr($bar_batch,3,1) + 1; 
        $bb5 = substr($bar_batch,4,1) + 1;
        $bb6 = substr($bar_batch,5,1) + 1;
        $bb7 = substr($bar_batch,6,1) + 1; 
        $bb8 = substr($bar_batch,7,1) + 1;
        $bb9 = substr($bar_batch,8,1) + 1;
        return view('cv.upload-picture',compact('bb1','bb2','bb3','bb4','bb5','bb6','bb6','bb7','bb8','bb9','mg','getbases','getbases_b','getedus','getcourses','getworks','getlangs','getprojects','getthesis','getskills','batch'));
    }
    public function get_form_avatar_by_batch($batch)
    {
    
        $mg = 1;
        $getbases = DB::table('tbl_base')->where('BaseBatch',$batch)->first();
        $getbases_b = DB::table('tbl_base_b')->where('BaseBatch',$batch)->first();
        $getedus = DB::table('tbl_educational')->where('BatchNumber',$batch)->orderBy('Eduid', 'asc')->get();
        $getcourses = DB::table('tbl_courses')->where('CoursesBatch',$batch)->orderBy('Coursesid', 'asc')->get();
        $getworks = DB::table('tbl_work_experience')->where('WorkBatch',$batch)->orderBy('Workid', 'asc')->get();
        $getlangs = DB::table('tbl_languages')->where('LangBatch',$batch)->orderBy('Langid', 'asc')->get();
        $getprojects = DB::table('tbl_projects')->where('ProjectBatch',$batch)->orderBy('Projectid', 'asc')->get();
        $getthesis= DB::table('tbl_articles')->where('ArticleBatch',$batch)->orderBy('Articlesid', 'asc')->get();
        $getskills = DB::table('tbl_skills')->where('SkillsBatch',$batch)->orderBy('Skillsid', 'asc')->get();
        $bar_batch = $getbases->BaseBatch;
        $bb1 = substr($bar_batch,0,1) + 1; 
        $bb2 = substr($bar_batch,1,1) + 1;
        $bb3 = substr($bar_batch,2,1) + 1;
        $bb4 = substr($bar_batch,3,1) + 1; 
        $bb5 = substr($bar_batch,4,1) + 1;
        $bb6 = substr($bar_batch,5,1) + 1;
        $bb7 = substr($bar_batch,6,1) + 1; 
        $bb8 = substr($bar_batch,7,1) + 1;
        $bb9 = substr($bar_batch,8,1) + 1;
        return view('cv.upload-picture-batch',compact('bb1','bb2','bb3','bb4','bb5','bb6','bb6','bb7','bb8','bb9','mg','getbases','getbases_b','getedus','getcourses','getworks','getlangs','getprojects','getthesis','getskills','batch'));
    }
    public function change_theme($batch)
    {
        $styles="#avatarx{box-shadow: 0px 0px 1px 1px yellow!important;}";

        //update theme
        DB::table('tbl_base')
        ->where('BaseBatch', $batch)
        ->update(['Styles' => $styles]);

        // get information
        $getbases = DB::table('tbl_base')->where('BaseBatch',$batch)->first();
        $getbases_b = DB::table('tbl_base_b')->where('BaseBatch',$batch)->first();
        $getedus = DB::table('tbl_educational')->where('BatchNumber',$batch)->orderBy('Eduid', 'asc')->get();
        $getcourses = DB::table('tbl_courses')->where('CoursesBatch',$batch)->orderBy('Coursesid', 'asc')->get();
        $getworks = DB::table('tbl_work_experience')->where('WorkBatch',$batch)->orderBy('Workid', 'asc')->get();
        $getlangs = DB::table('tbl_languages')->where('LangBatch',$batch)->orderBy('Langid', 'asc')->get();
        $getprojects = DB::table('tbl_projects')->where('ProjectBatch',$batch)->orderBy('Projectid', 'asc')->get();
        $getthesis= DB::table('tbl_articles')->where('ArticleBatch',$batch)->orderBy('Articlesid', 'asc')->get();
        $getskills = DB::table('tbl_skills')->where('SkillsBatch',$batch)->orderBy('Skillsid', 'asc')->get();
        $bar_batch = $getbases->BaseBatch;
        $bb1 = substr($bar_batch,0,1) + 1; 
        $bb2 = substr($bar_batch,1,1) + 1;
        $bb3 = substr($bar_batch,2,1) + 1;
        $bb4 = substr($bar_batch,3,1) + 1; 
        $bb5 = substr($bar_batch,4,1) + 1;
        $bb6 = substr($bar_batch,5,1) + 1;
        $bb7 = substr($bar_batch,6,1) + 1; 
        $bb8 = substr($bar_batch,7,1) + 1;
        $bb9 = substr($bar_batch,8,1) + 1;
        return view('cv.get-with-picture',compact('bb1','bb2','bb3','bb4','bb5','bb6','bb6','bb7','bb8','bb9','getbases','getbases_b','getedus','getcourses','getworks','getlangs','getprojects','getthesis','getskills','batch'));
    }
    public function change_font(Request $request)
    {
        $batch = $request->input('select-batch');
        $font = $request->input('select-font');
        if($font == 1)
        {
            $styletext = "div#pageA4 *{font-family: Yekan!important;font-weight:bold !important;font-size: 14px !important}#emailx{font-size:13px!important}#weblogx{font-size:13px !important;}#websitex{font-size:13px !important;}#instagramx{font-size:13px !important;}";
        }
        if($font == 2)
        {
            $styletext = "div#pageA4 *{font-family: Nazanin!important;font-weight:bold !important;font-size: 15px !important}#emailx{font-size:13px!important}#weblogx{font-size:13px !important;}#websitex{font-size:13px !important;}#instagramx{font-size:13px !important;}";
        }
        if($font == 3)
        {
            $styletext = "#svazir{top:-151px !important}";
        }
        DB::table('tbl_base')
        ->where('BaseBatch', $batch)
        ->update(['Styles' => $styletext]);
        return redirect()->back();

    }
    public function change_background(Request $request)
    {
        $batch = $request->input('select-batch');
        $background = $request->input('code-back');
        DB::table('tbl_base')
        ->where('BaseBatch', $batch)
        ->update(['background' => $background]);
        return redirect()->back();

    }
    public function get_request_create_site($batch)
    {
        $getbases = DB::table('tbl_base')->where('BaseBatch',$batch)->first();
        $getbases_b = DB::table('tbl_base_b')->where('BaseBatch',$batch)->first();
        $getedus = DB::table('tbl_educational')->where('BatchNumber',$batch)->orderBy('Eduid', 'asc')->get();
        $getcourses = DB::table('tbl_courses')->where('CoursesBatch',$batch)->orderBy('Coursesid', 'asc')->get();
        $getworks = DB::table('tbl_work_experience')->where('WorkBatch',$batch)->orderBy('Workid', 'asc')->get();
        $getlangs = DB::table('tbl_languages')->where('LangBatch',$batch)->orderBy('Langid', 'asc')->get();
        $getprojects = DB::table('tbl_projects')->where('ProjectBatch',$batch)->orderBy('Projectid', 'asc')->get();
        $getthesis= DB::table('tbl_articles')->where('ArticleBatch',$batch)->orderBy('Articlesid', 'asc')->get();
        $getskills = DB::table('tbl_skills')->where('SkillsBatch',$batch)->orderBy('Skillsid', 'asc')->get();
        $bar_batch = $getbases->BaseBatch;
        $bb1 = substr($bar_batch,0,1) + 1; 
        $bb2 = substr($bar_batch,1,1) + 1;
        $bb3 = substr($bar_batch,2,1) + 1;
        $bb4 = substr($bar_batch,3,1) + 1; 
        $bb5 = substr($bar_batch,4,1) + 1;
        $bb6 = substr($bar_batch,5,1) + 1;
        $bb7 = substr($bar_batch,6,1) + 1; 
        $bb8 = substr($bar_batch,7,1) + 1;
        $bb9 = substr($bar_batch,8,1) + 1;
        return view('cv.form-get-request-site',compact('bb1','bb2','bb3','bb4','bb5','bb6','bb6','bb7','bb8','bb9','getbases','getbases_b','getedus','getcourses','getworks','getlangs','getprojects','getthesis','getskills','batch'));
    }
    public function get_resume_for_change_font($batch)
    {

        $getbases = DB::table('tbl_base')->where('BaseBatch',$batch)->first();
        $getbases_b = DB::table('tbl_base_b')->where('BaseBatch',$batch)->first();
        $getedus = DB::table('tbl_educational')->where('BatchNumber',$batch)->orderBy('Eduid', 'asc')->get();
        $getcourses = DB::table('tbl_courses')->where('CoursesBatch',$batch)->orderBy('Coursesid', 'asc')->get();
        $getworks = DB::table('tbl_work_experience')->where('WorkBatch',$batch)->orderBy('Workid', 'asc')->get();
        $getlangs = DB::table('tbl_languages')->where('LangBatch',$batch)->orderBy('Langid', 'asc')->get();
        $getprojects = DB::table('tbl_projects')->where('ProjectBatch',$batch)->orderBy('Projectid', 'asc')->get();
        $getthesis= DB::table('tbl_articles')->where('ArticleBatch',$batch)->orderBy('Articlesid', 'asc')->get();
        $getskills = DB::table('tbl_skills')->where('SkillsBatch',$batch)->orderBy('Skillsid', 'asc')->get();
        $bar_batch = $getbases->BaseBatch;
        $bb1 = substr($bar_batch,0,1) + 1; 
        $bb2 = substr($bar_batch,1,1) + 1;
        $bb3 = substr($bar_batch,2,1) + 1;
        $bb4 = substr($bar_batch,3,1) + 1; 
        $bb5 = substr($bar_batch,4,1) + 1;
        $bb6 = substr($bar_batch,5,1) + 1;
        $bb7 = substr($bar_batch,6,1) + 1; 
        $bb8 = substr($bar_batch,7,1) + 1;
        $bb9 = substr($bar_batch,8,1) + 1;
        return view('cv.get-with-font',compact('bb1','bb2','bb3','bb4','bb5','bb6','bb6','bb7','bb8','bb9','getbases','getbases_b','getedus','getcourses','getworks','getlangs','getprojects','getthesis','getskills','batch'));
    }
    public function get_resume_for_change_background($batch)
    {
        $getbases = DB::table('tbl_base')->where('BaseBatch',$batch)->first();
        $getbases_b = DB::table('tbl_base_b')->where('BaseBatch',$batch)->first();
        $getedus = DB::table('tbl_educational')->where('BatchNumber',$batch)->orderBy('Eduid', 'asc')->get();
        $getcourses = DB::table('tbl_courses')->where('CoursesBatch',$batch)->orderBy('Coursesid', 'asc')->get();
        $getworks = DB::table('tbl_work_experience')->where('WorkBatch',$batch)->orderBy('Workid', 'asc')->get();
        $getlangs = DB::table('tbl_languages')->where('LangBatch',$batch)->orderBy('Langid', 'asc')->get();
        $getprojects = DB::table('tbl_projects')->where('ProjectBatch',$batch)->orderBy('Projectid', 'asc')->get();
        $getthesis= DB::table('tbl_articles')->where('ArticleBatch',$batch)->orderBy('Articlesid', 'asc')->get();
        $getskills = DB::table('tbl_skills')->where('SkillsBatch',$batch)->orderBy('Skillsid', 'asc')->get();
        $bar_batch = $getbases->BaseBatch;
        $bb1 = substr($bar_batch,0,1) + 1; 
        $bb2 = substr($bar_batch,1,1) + 1;
        $bb3 = substr($bar_batch,2,1) + 1;
        $bb4 = substr($bar_batch,3,1) + 1; 
        $bb5 = substr($bar_batch,4,1) + 1;
        $bb6 = substr($bar_batch,5,1) + 1;
        $bb7 = substr($bar_batch,6,1) + 1; 
        $bb8 = substr($bar_batch,7,1) + 1;
        $bb9 = substr($bar_batch,8,1) + 1;
        return view('cv.get-with-background',compact('bb1','bb2','bb3','bb4','bb5','bb6','bb6','bb7','bb8','bb9','getbases','getbases_b','getedus','getcourses','getworks','getlangs','getprojects','getthesis','getskills','batch'));
    }
    public function get_resume()
    {
        $batch = session('batch');
        $mg = 1;
        $getbases = DB::table('tbl_base')->where('BaseBatch',$batch)->first();
        $getbases_b = DB::table('tbl_base_b')->where('BaseBatch',$batch)->first();
        $getedus = DB::table('tbl_educational')->where('BatchNumber',$batch)->orderBy('Eduid', 'asc')->get();
        $getcourses = DB::table('tbl_courses')->where('CoursesBatch',$batch)->orderBy('Coursesid', 'asc')->get();
        $getworks = DB::table('tbl_work_experience')->where('WorkBatch',$batch)->orderBy('Workid', 'asc')->get();
        $getlangs = DB::table('tbl_languages')->where('LangBatch',$batch)->orderBy('Langid', 'asc')->get();
        $getprojects = DB::table('tbl_projects')->where('ProjectBatch',$batch)->orderBy('Projectid', 'asc')->get();
        $getthesis= DB::table('tbl_articles')->where('ArticleBatch',$batch)->orderBy('Articlesid', 'asc')->get();
        $getskills = DB::table('tbl_skills')->where('SkillsBatch',$batch)->orderBy('Skillsid', 'asc')->get();
        $bar_batch = $getbases->BaseBatch;
        $bb1 = substr($bar_batch,0,1) + 1; 
        $bb2 = substr($bar_batch,1,1) + 1;
        $bb3 = substr($bar_batch,2,1) + 1;
        $bb4 = substr($bar_batch,3,1) + 1; 
        $bb5 = substr($bar_batch,4,1) + 1;
        $bb6 = substr($bar_batch,5,1) + 1;
        $bb7 = substr($bar_batch,6,1) + 1; 
        $bb8 = substr($bar_batch,7,1) + 1;
        $bb9 = substr($bar_batch,8,1) + 1;
        return view('cv.get-with-picture',compact('bb1','bb2','bb3','bb4','bb5','bb6','bb6','bb7','bb8','bb9','mg','getbases','getbases_b','getedus','getcourses','getworks','getlangs','getprojects','getthesis','getskills','batch'));
    }
    public function get_resume_background($batch)
    {
        $mg = 1;
        $getbases = DB::table('tbl_base')->where('BaseBatch',$batch)->first();
        $getbases_b = DB::table('tbl_base_b')->where('BaseBatch',$batch)->first();
        $getedus = DB::table('tbl_educational')->where('BatchNumber',$batch)->orderBy('Eduid', 'asc')->get();
        $getcourses = DB::table('tbl_courses')->where('CoursesBatch',$batch)->orderBy('Coursesid', 'asc')->get();
        $getworks = DB::table('tbl_work_experience')->where('WorkBatch',$batch)->orderBy('Workid', 'asc')->get();
        $getlangs = DB::table('tbl_languages')->where('LangBatch',$batch)->orderBy('Langid', 'asc')->get();
        $getprojects = DB::table('tbl_projects')->where('ProjectBatch',$batch)->orderBy('Projectid', 'asc')->get();
        $getthesis= DB::table('tbl_articles')->where('ArticleBatch',$batch)->orderBy('Articlesid', 'asc')->get();
        $getskills = DB::table('tbl_skills')->where('SkillsBatch',$batch)->orderBy('Skillsid', 'asc')->get();
        $bar_batch = $getbases->BaseBatch;
        $bb1 = substr($bar_batch,0,1) + 1; 
        $bb2 = substr($bar_batch,1,1) + 1;
        $bb3 = substr($bar_batch,2,1) + 1;
        $bb4 = substr($bar_batch,3,1) + 1; 
        $bb5 = substr($bar_batch,4,1) + 1;
        $bb6 = substr($bar_batch,5,1) + 1;
        $bb7 = substr($bar_batch,6,1) + 1; 
        $bb8 = substr($bar_batch,7,1) + 1;
        $bb9 = substr($bar_batch,8,1) + 1;
        return view('cv.get-for-background',compact('bb1','bb2','bb3','bb4','bb5','bb6','bb6','bb7','bb8','bb9','mg','getbases','getbases_b','getedus','getcourses','getworks','getlangs','getprojects','getthesis','getskills','batch'));
    }
    public function show_resume($batch)
    {
	Artisan::call('cache:clear');
        $mg = 1;
        $getbases = DB::table('tbl_base')->where('BaseBatch',$batch)->first();
        $getbases_b = DB::table('tbl_base_b')->where('BaseBatch',$batch)->first();
        $getedus = DB::table('tbl_educational')->where('BatchNumber',$batch)->orderBy('Eduid', 'asc')->get();
        $getcourses = DB::table('tbl_courses')->where('CoursesBatch',$batch)->orderBy('Coursesid', 'asc')->get();
        $getworks = DB::table('tbl_work_experience')->where('WorkBatch',$batch)->orderBy('Workid', 'asc')->get();
        $getlangs = DB::table('tbl_languages')->where('LangBatch',$batch)->orderBy('Langid', 'asc')->get();
        $getprojects = DB::table('tbl_projects')->where('ProjectBatch',$batch)->orderBy('Projectid', 'asc')->get();
        $getthesis= DB::table('tbl_articles')->where('ArticleBatch',$batch)->orderBy('Articlesid', 'asc')->get();
        $getskills = DB::table('tbl_skills')->where('SkillsBatch',$batch)->orderBy('Skillsid', 'asc')->get();
        $bar_batch = $getbases->BaseBatch;
        $bb1 = substr($bar_batch,0,1) + 1; 
        $bb2 = substr($bar_batch,1,1) + 1;
        $bb3 = substr($bar_batch,2,1) + 1;
        $bb4 = substr($bar_batch,3,1) + 1; 
        $bb5 = substr($bar_batch,4,1) + 1;
        $bb6 = substr($bar_batch,5,1) + 1;
        $bb7 = substr($bar_batch,6,1) + 1; 
        $bb8 = substr($bar_batch,7,1) + 1;
        $bb9 = substr($bar_batch,8,1) + 1;
        return view('cv.show-resume',compact('bb1','bb2','bb3','bb4','bb5','bb6','bb6','bb7','bb8','bb9','mg','getbases','getbases_b','getedus','getcourses','getworks','getlangs','getprojects','getthesis','getskills','batch'));
    }
    public function get_print($batch)
    {
        Artisan::call('cache:clear');
        $getbases = DB::table('tbl_base')->where('BaseBatch',$batch)->first();
        $getbases_b = DB::table('tbl_base_b')->where('BaseBatch',$batch)->first();
        $getedus = DB::table('tbl_educational')->where('BatchNumber',$batch)->orderBy('Eduid', 'asc')->get();
        $getcourses = DB::table('tbl_courses')->where('CoursesBatch',$batch)->orderBy('Coursesid', 'asc')->get();
        $getworks = DB::table('tbl_work_experience')->where('WorkBatch',$batch)->orderBy('Workid', 'asc')->get();
        $getlangs = DB::table('tbl_languages')->where('LangBatch',$batch)->orderBy('Langid', 'asc')->get();
        $getprojects = DB::table('tbl_projects')->where('ProjectBatch',$batch)->orderBy('Projectid', 'asc')->get();
        $getthesis= DB::table('tbl_articles')->where('ArticleBatch',$batch)->orderBy('Articlesid', 'asc')->get();
        $getskills = DB::table('tbl_skills')->where('SkillsBatch',$batch)->orderBy('Skillsid', 'asc')->get();
        $bar_batch = $getbases->BaseBatch;
        $bb1 = substr($bar_batch,0,1) + 1; 
        $bb2 = substr($bar_batch,1,1) + 1;
        $bb3 = substr($bar_batch,2,1) + 1;
        $bb4 = substr($bar_batch,3,1) + 1; 
        $bb5 = substr($bar_batch,4,1) + 1;
        $bb6 = substr($bar_batch,5,1) + 1;
        $bb7 = substr($bar_batch,6,1) + 1; 
        $bb8 = substr($bar_batch,7,1) + 1;
        $bb9 = substr($bar_batch,8,1) + 1;
        return view('cv.get-print',compact('bb1','bb2','bb3','bb4','bb5','bb6','bb6','bb7','bb8','bb9','getbases','getbases_b','getedus','getcourses','getworks','getlangs','getprojects','getthesis','getskills','batch'));
    }
    public function get_resume_form_panel($batch)
    {
        $getbases = DB::table('tbl_base')->where('BaseBatch',$batch)->first();
        $getbases_b = DB::table('tbl_base_b')->where('BaseBatch',$batch)->first();
        $getedus = DB::table('tbl_educational')->where('BatchNumber',$batch)->orderBy('Eduid', 'asc')->get();
        $getcourses = DB::table('tbl_courses')->where('CoursesBatch',$batch)->orderBy('Coursesid', 'asc')->get();
        $getworks = DB::table('tbl_work_experience')->where('WorkBatch',$batch)->orderBy('Workid', 'asc')->get();
        $getlangs = DB::table('tbl_languages')->where('LangBatch',$batch)->orderBy('Langid', 'asc')->get();
        $getprojects = DB::table('tbl_projects')->where('ProjectBatch',$batch)->orderBy('Projectid', 'asc')->get();
        $getthesis= DB::table('tbl_articles')->where('ArticleBatch',$batch)->orderBy('Articlesid', 'asc')->get();
        $getskills = DB::table('tbl_skills')->where('SkillsBatch',$batch)->orderBy('Skillsid', 'asc')->get();
        $bar_batch = $getbases->BaseBatch;
        $bb1 = substr($bar_batch,0,1) + 1; 
        $bb2 = substr($bar_batch,1,1) + 1;
        $bb3 = substr($bar_batch,2,1) + 1;
        $bb4 = substr($bar_batch,3,1) + 1; 
        $bb5 = substr($bar_batch,4,1) + 1;
        $bb6 = substr($bar_batch,5,1) + 1;
        $bb7 = substr($bar_batch,6,1) + 1; 
        $bb8 = substr($bar_batch,7,1) + 1;
        $bb9 = substr($bar_batch,8,1) + 1;
        return view('cv.get-with-picture',compact('bb1','bb2','bb3','bb4','bb5','bb6','bb6','bb7','bb8','bb9','getbases','getbases_b','getedus','getcourses','getworks','getlangs','getprojects','getthesis','getskills','batch'));
    }
    public function upload_Avatar(Request $request)
    {
        $file = $request->file('avatar');
        $batch = $request->input('batch');
        $user = $request->input('userid');
        $destinationPath = 'img/upload/';
        $file->move($destinationPath,time().$file->getClientOriginalName());
        $avatar = $destinationPath.time().$file->getClientOriginalName();

        DB::table('tbl_base')
        ->where('BaseBatch', $batch)->where('BaseUserid',$user)
        ->update(['BaseAvatar' => $avatar]);

        return redirect('/get-resume');
    }
    public function upload_background(Request $request)
    {
        $file = $request->file('background');
        $batch = $request->input('batch');
        $user = $request->input('userid');
        $destinationPath = 'img/upload/';
        $file->move($destinationPath,time().$file->getClientOriginalName());
        $background = $destinationPath.time().$file->getClientOriginalName();

        DB::table('tbl_base')
        ->where('BaseBatch', $batch)->where('BaseUserid',$user)
        ->update(['Background' => $background]);

        return redirect()->back();
    }
    public function resume_delete($batch)
    {
        DB::table('tbl_base')->where('BaseBatch',$batch)->delete();
        DB::table('tbl_base_b')->where('BaseBatch',$batch)->delete();
        DB::table('tbl_articles')->where('ArticleBatch',$batch)->delete();
        DB::table('tbl_educational')->where('BatchNumber',$batch)->delete();
        DB::table('tbl_languages')->where('LangBatch',$batch)->delete();
        DB::table('tbl_projects')->where('ProjectBatch',$batch)->delete();
        DB::table('tbl_skills')->where('SkillsBatch',$batch)->delete();
        DB::table('tbl_work_experience')->where('WorkBatch',$batch)->delete();
        DB::table('tbl_courses')->where('CoursesBatch',$batch)->delete();
        return redirect('/home');
    }
    public function edit_resume($batch)
    {
        $getbases = DB::table('tbl_base')->where('BaseBatch',$batch)->first();
        $getbases_b = DB::table('tbl_base_b')->where('BaseBatch',$batch)->first();
        $getedus = DB::table('tbl_educational')->where('BatchNumber',$batch)->orderBy('Eduid', 'asc')->first();
        $getedus2 = DB::table('tbl_educational')->where('BatchNumber',$batch)->orderBy('Eduid', 'asc')->skip(1)->limit(1)->first();
        $getedus3 = DB::table('tbl_educational')->where('BatchNumber',$batch)->orderBy('Eduid', 'asc')->skip(2)->limit(1)->first();
        $getcourse1 = DB::table('tbl_courses')->where('CoursesBatch',$batch)->orderBy('Coursesid', 'asc')->first();
        $getcourse2 = DB::table('tbl_courses')->where('CoursesBatch',$batch)->orderBy('Coursesid', 'asc')->skip(1)->limit(1)->first();
        $getcourse3 = DB::table('tbl_courses')->where('CoursesBatch',$batch)->orderBy('Coursesid', 'asc')->skip(2)->limit(1)->first();
        $getwork1 = DB::table('tbl_work_experience')->where('WorkBatch',$batch)->orderBy('Workid', 'asc')->first();
        $getwork2 = DB::table('tbl_work_experience')->where('WorkBatch',$batch)->orderBy('Workid', 'asc')->skip(1)->limit(1)->first();
        $getwork3 = DB::table('tbl_work_experience')->where('WorkBatch',$batch)->orderBy('Workid', 'asc')->skip(2)->limit(1)->first();
        $getlang1 = DB::table('tbl_languages')->where('LangBatch',$batch)->orderBy('Langid', 'asc')->first();
        $getlang2 = DB::table('tbl_languages')->where('LangBatch',$batch)->orderBy('Langid', 'asc')->skip(1)->limit(1)->first();
        $getlang3 = DB::table('tbl_languages')->where('LangBatch',$batch)->orderBy('Langid', 'asc')->skip(2)->limit(1)->first();
        $getproject1 = DB::table('tbl_projects')->where('ProjectBatch',$batch)->orderBy('Projectid', 'asc')->first();
        $getproject2 = DB::table('tbl_projects')->where('ProjectBatch',$batch)->orderBy('Projectid', 'asc')->skip(1)->limit(1)->first();
        $getproject3 = DB::table('tbl_projects')->where('ProjectBatch',$batch)->orderBy('Projectid', 'asc')->skip(2)->limit(1)->first();
        $getproject4 = DB::table('tbl_projects')->where('ProjectBatch',$batch)->orderBy('Projectid', 'asc')->skip(3)->limit(1)->first();
        $getthesis1 = DB::table('tbl_articles')->where('ArticleBatch',$batch)->orderBy('Articlesid', 'asc')->first();
        $getthesis2 = DB::table('tbl_articles')->where('ArticleBatch',$batch)->orderBy('Articlesid', 'asc')->skip(1)->limit(1)->first();
        $getskill1 = DB::table('tbl_skills')->where('SkillsBatch',$batch)->orderBy('Skillsid', 'asc')->first();
        $getskill2 = DB::table('tbl_skills')->where('SkillsBatch',$batch)->orderBy('Skillsid', 'asc')->skip(1)->limit(1)->first();
        $getskill3 = DB::table('tbl_skills')->where('SkillsBatch',$batch)->orderBy('Skillsid', 'asc')->skip(2)->limit(1)->first();
        $getskill4 = DB::table('tbl_skills')->where('SkillsBatch',$batch)->orderBy('Skillsid', 'asc')->skip(3)->limit(1)->first();
        $getskill5 = DB::table('tbl_skills')->where('SkillsBatch',$batch)->orderBy('Skillsid', 'asc')->skip(4)->limit(1)->first();

        $getcities = DB::table('tbl_cities')->orderBy('name', 'asc')->get();
        $getvocation = DB::table('tbl_vocation')->orderBy('name', 'asc')->get();

        $getcode = DB::table('tbl_prenumber')->first();
        $code = explode('-', $getcode->codes);

        $codeC = explode('-', $getcode->CountryCode);

        $getuniversity = DB::table('universitydata')->first();
        $guniversity = explode('-',$getuniversity->university);

        $getmajor = DB::table('universitydata')->first();
        $gmajor = explode('-',$getuniversity->major);

        $getlang = DB::table('universitydata')->first();
        $glang = explode('-',$getuniversity->lang);

        $getcources = DB::table('coursesdata')->first();
        $getcources = explode('-',$getcources->Type);

        $getyear = DB::table('coursesdata')->first();
        $getyear = explode('-',$getyear->Year);
        $UID = session('UID');

        $projectdatestart = explode("/",$getproject1->ProjectDateStart);
        $projectyearstart = $projectdatestart[0];
        $projectmonthstart = $projectdatestart[1];

        $projectdateend = explode("/",$getproject1->ProjectDateEnd);
        $projectyearend = $projectdateend[0];
        $projectmonthend = $projectdateend[1];

        $projectdatestart2 = explode("/",$getproject2->ProjectDateStart);
        $projectyearstart2 = $projectdatestart2[0];
        $projectmonthstart2 = $projectdatestart2[1];

        $projectdateend2 = explode("/",$getproject2->ProjectDateEnd);
        $projectyearend2 = $projectdateend2[0];
        $projectmonthend2 = $projectdateend2[1];

        $projectdatestart3 = explode("/",$getproject3->ProjectDateStart);
        $projectyearstart3 = $projectdatestart3[0];
        $projectmonthstart3 = $projectdatestart3[1];

        $projectdateend3 = explode("/",$getproject3->ProjectDateEnd);
        $projectyearend3 = $projectdateend3[0];
        $projectmonthend3 = $projectdateend3[1];

        $projectdatestart4 = explode("/",$getproject4->ProjectDateStart);
        $projectyearstart4 = $projectdatestart4[0];
        $projectmonthstart4 = $projectdatestart4[1];

        $projectdateend4 = explode("/",$getproject4->ProjectDateEnd);
        $projectyearend4 = $projectdateend4[0];
        $projectmonthend4 = $projectdateend4[1];

       $birthdate = explode("/",$getbases->BaseBirthdate);
       $day = $birthdate[2];
       $month = $birthdate[1];
       $year = $birthdate[0];

       $defencedate = explode("/",$getthesis1->ArticlesDate);
       $dayt1 = $defencedate[2];
       $montht1 = $defencedate[1];
       $yeart1 = $defencedate[0];

       $defencedate2 = explode("/",$getthesis2->ArticlesDate);
       $dayt2 = $defencedate2[2];
       $montht2 = $defencedate2[1];
       $yeart2 = $defencedate2[0];

       $tel = explode("-",$getbases->BaseTel);
       $pretel = $tel[0];
       $tel = $tel[1];

        $section = $getedus->EduSection;
        $section2 = $getedus2->EduSection;
        $section3 = $getedus3->EduSection;

        if($section2 != '')
        {
            $s_n = 1;
        }
        else
        {
            $s_n = 0;
        }
        if($section3 != '')
        {
            $s_n = 2;
        }

        $lang = $getlang1->LangName;
        $lang2 = $getlang2->LangName;
        $lang3 = $getlang3->LangName;

        if($lang2 != '')
        {
            $l_n = 1;
        }
        else
        {
            $l_n = 0;
        }
        if($lang3 != '')
        {
            $l_n = 2;
        }

        $work = $getwork1->WorkPost;
        $work2 = $getwork2->WorkPost;
        $work3 = $getwork3->WorkPost;

        if($work2 != '')
        {
            $w_n = 1;
        }
        else
        {
            $w_n = 0;
        }
        if($work3 != '')
        {
            $w_n = 2;
        }

        $course1 = $getcourse1->CoursesType;
        $course2 = $getcourse2->CoursesType;
        $course3 = $getcourse3->CoursesType;

        
        if($course2 != '')
        {
            $c_n = 1;
        }
        else
        {
            $c_n = 0;
        }
        if($course3 != '')
        {
            $c_n = 2;
        }

        $project1 = $getproject1->ProjectTitle;
        $project2 = $getproject2->ProjectTitle;
        $project3 = $getproject3->ProjectTitle;
        $project4 = $getproject4->ProjectTitle;

        if($project2 != '')
        {
            $p_n = 1;
        }
        else
        {
            $p_n = 0;
        }
        if($project3 != '')
        {
            $p_n = 2;
        }
        if($project4 != '')
        {
            $p_n = 3;
        }

        $skill1 = $getskill1->SkillsName;
        $skill2 = $getskill2->SkillsName;
        $skill3 = $getskill3->SkillsName;
        $skill4 = $getskill4->SkillsName;
        $skill5 = $getskill5->SkillsName;

        if($skill2 != '')
        {
            $ss_n = 1;
        }
        else
        {
            $ss_n = 0;
        }
        if($skill3 != '')
        {
            $ss_n = 2;
        }
        if($skill4 != '')
        {
            $ss_n = 3;
        }
        if($skill5 != '')
        {
            $ss_n = 4;
        }
        $bar_batch = $getbases->BaseBatch;
        $bb1 = substr($bar_batch,0,1) + 1; 
        $bb2 = substr($bar_batch,1,1) + 1;
        $bb3 = substr($bar_batch,2,1) + 1;
        $bb4 = substr($bar_batch,3,1) + 1; 
        $bb5 = substr($bar_batch,4,1) + 1;
        $bb6 = substr($bar_batch,5,1) + 1;
        $bb7 = substr($bar_batch,6,1) + 1; 
        $bb8 = substr($bar_batch,7,1) + 1;
        $bb9 = substr($bar_batch,8,1) + 1;
        return view('cv.ecv',compact('bb1','bb2','bb3','bb4','bb5','bb6','bb6','bb7','bb8','bb9','getskill2','getskill3','getskill4','getskill5','ss_n','projectyearend4','projectmonthend4','projectyearstart4','projectmonthstart4','projectyearend3','projectmonthend3','projectyearstart3','projectmonthstart3','projectyearend2','projectmonthend2','projectyearstart2','projectmonthstart2','p_n','getproject2','getproject3','getproject4','c_n','getcourse2','getcourse3','getwork3','w_n','getwork2','l_n','getlang3','getlang2','getedus3','getedus2','getskill1','projectyearend','projectmonthend','projectyearstart','projectmonthstart','getproject1','getthesis1','getthesis2','getcourse1','getwork1','getlang1','s_n','section','section2','section3','getedus','pretel','tel','day','month','year','getbases','getbases_b','getyear','getcources','getvocation','glang','gmajor','guniversity','getcities','code','getvocation','codeC','UID','batch','dayt1','yeart1','montht1','dayt2','yeart2','montht2'));
    }


    public function upload_Avatar_by_batch(Request $request)
    {
        $file = $request->file('avatar');
        $batch = $request->input('batch');
        $user = $request->input('userid');
        $destinationPath = 'img/upload/';
        $file->move($destinationPath,time().$file->getClientOriginalName());
        $avatar = $destinationPath.time().$file->getClientOriginalName();

        DB::table('tbl_base')
        ->where('BaseBatch', $batch)->where('BaseUserid',$user)
        ->update(['BaseAvatar' => $avatar]);

        return redirect('/home');
    }
    public function upload_Avatar_home(Request $request)
    {

        $file = $request->file('avatar');
        $batch = $request->input('batch');
        $user = $request->input('userid');
        $destinationPath = 'img/upload/';
        $file->move($destinationPath,time().$file->getClientOriginalName());
        $avatar = $destinationPath.time().$file->getClientOriginalName();

        DB::table('tbl_base')
        ->where('BaseBatch', $batch)->where('BaseUserid',$user)
        ->update(['BaseAvatar' => $avatar]);

        return redirect('/home');
    }    
    public function get_form_cv()
    {
        //insert in visit table
        DB::table('tbl_visit')->insert(
        [
            'VisitIP'=>$_SERVER['REMOTE_ADDR'],
            'VisitOther'=>'resume',
            'created_at' =>  \Carbon\Carbon::now(), # new \Datetime()
            'updated_at' => \Carbon\Carbon::now()
        ]
        );
        $getcities = DB::table('tbl_cities')->orderBy('name', 'asc')->get();
        $getvocation = DB::table('tbl_vocation')->orderBy('name', 'asc')->get();

        $getcode = DB::table('tbl_prenumber')->first();
        $code = explode('-', $getcode->codes);

        $codeC = explode('-', $getcode->CountryCode);

        $getuniversity = DB::table('universitydata')->first();
        $guniversity = explode('-',$getuniversity->university);

        $getmajor = DB::table('universitydata')->first();
        $gmajor = explode('-',$getuniversity->major);

        $getlang = DB::table('universitydata')->first();
        $glang = explode('-',$getuniversity->lang);

        $getcources = DB::table('coursesdata')->first();
        $getcources = explode('-',$getcources->Type);

        $getyear = DB::table('coursesdata')->first();
        $getyear = explode('-',$getyear->Year);

        $UID = session('UID');

        return view('cv.cvc',compact('getyear','getcources','getvocation','glang','gmajor','guniversity','getcities','code','getvocation','codeC','UID'));
    }
    public function save_resume(Request $request)
    {
        //validation data
        $validate_data = Validator::make(request()->all() , [
            'base-name' => 'min:2',
            'base-family' => 'min:2|max:30',
            'base-work' => 'min:3|max:50',
            'base-city' => 'min:2|max:50',
            'base-mobile' => 'min:11|max:11',
            'base-telephone' => 'min:8|max:8',
            'base-pre-number-state' => 'min:3|max:3',
            'base-desc' => 'max:70',
        ],[
            'base-name.min' => 'حداقل حروف فیلد نام 2 کاراکتر است.',
            'base-family.min' => 'حداقل حروف فیلد نام‌خانوادگی 2 کاراکتر است.',
            'base-family.max' => 'حداکثر حروف فیلد نام‌خانوادگی 30 کاراکتر است.',
            'base-work.min' => 'حداقل حروف فیلد عنوان‌حرفه 3 کاراکتر است.',
            'base-work.max' => 'حداکثر حروف فیلد عنوان‌حرفه 50 کاراکتر است.',
            'base-city.min' => 'حداقل حروف فیلد شهر 2 کاراکتر است.',
            'base-city.max' => 'حداکثر حروف فیلد شهر 50 کاراکتر است.',
            'base-pre-number-state.min' => 'حداقل حروف فیلد پیش‌ شماره تلفن 3 کاراکتر است.',
            'base-pre-number-state.max' => 'حداکثر حروف فیلد پیش‌ شماره تلفن 3 کاراکتر است.',
            'base-desc.max' => 'حداکثر حروف فیلد توصیف خلاصه از خود 70 کاراکتر است.',
        ])->validated();

        //get userid
        $UID = $request->input('uid');

        //get base data
         $avatar = $request->input('base-avatar');
         $name = $request->input('base-name');
         $family = $request->input('base-family');
         $work = $request->input('base-work');
         $marital = $request->input('base-marital');
         $ms = $request->input('base-MS');
         $mobile = $request->input('base-mobile');
         $birth_day = $request->input('base-day-birth');
         $birth_mount = $request->input('base-month-birth');
         $birth_year = $request->input('base-year-birth');
         $telephone = $request->input('base-telephone');
         $prenumber = $request->input('base-pre-number-state');
         $email = $request->input('base-email');

        //get base data 2
         $city = $request->input('base-city');
         $sex = $request->input('base-sex');
         $pnc = $request->input('base-pre-number-country');
         $weblog = $request->input('base-weblog');
         $instagram = $request->input('base-instagram');
         $desc = $request->input('base-desc');
         $weblog = $request->input('base-weblog');
         if($pnc == 98)
         {
             $country = "ایران";
         }

          $enow = $request->input('education-now');

         //get education data
          $eg0 = $request->input('education-grade0');
          $efs0 = $request->input('educationFS0');
          $ead0 = $request->input('educationAD0');
          $eu0 = $request->input('educationUniversity0');
          $GPAU0 = $request->input('GPAUniversity0');

          $eg1 = $request->input('education-grade1Z');
          $efs1 = $request->input('educationFS1Z');
          $ead1 = $request->input('educationAD1Z');
          $eu1 = $request->input('educationUniversity1Z');
          $GPAU1 = $request->input('GPAUniversity1Z');

          $eg2 = $request->input('education-grade2Z');
          $efs2 = $request->input('educationFS2Z');
          $ead2 = $request->input('educationAD2Z');
          $eu2 = $request->input('educationUniversity2Z');
          $GPAU2 = $request->input('GPAUniversity2Z');

         //get language data
         $langname0 = $request->input('langName0');
         $langReading0 = $request->input('langReading0');
         $langWriting0 = $request->input('langWriting0');
         $langSpeech0 = $request->input('langSpeech0');
         $langListening0 = $request->input('langListening0');

         $langname1 = $request->input('langName1Z');
         $langReading1 = $request->input('langReading1Z');
         $langWriting1 = $request->input('langWriting1Z');
         $langSpeech1 = $request->input('langSpeech1Z');
         $langListening1 = $request->input('langListening1Z');

         $langname2 = $request->input('langName2Z');
         $langReading2 = $request->input('langReading2Z');
         $langWriting2 = $request->input('langWriting2Z');
         $langSpeech2 = $request->input('langSpeech2Z');
         $langListening2 = $request->input('langListening2Z');

        //get courses data
        $courcesType0 = $request->input('courcesType0');
        $courcesName0 = $request->input('courcesName0');
        $courcesYear0 = $request->input('courcesYear0');
        $courcesInstitutionName0 = $request->input('courcesInstitutionName0');

        $courcesType1 = $request->input('courcesType1Z');
        $courcesName1 = $request->input('courcesName1Z');
        $courcesYear1 = $request->input('courcesYear1Z');
        $courcesInstitutionName1 = $request->input('courcesInstitutionName1Z');

        $courcesType2 = $request->input('courcesType2Z');
        $courcesName2 = $request->input('courcesName2Z');
        $courcesYear2 = $request->input('courcesYear2Z');
        $courcesInstitutionName2 = $request->input('courcesInstitutionName2Z');

        //get thesis data
        $thesisTitle0 = $request->input('thesisTitle0');
        $defensDate0 = $request->input('defensDate0');
        $month0 = $request->input('month0'); // tset not ok
        $year0 = $request->input('year0');

        $thesisTitle1 = $request->input('thesisTitle1');
        $defensDate1 = $request->input('defensDate1');
        $month1 = $request->input('month1');
        $year1 = $request->input('year1');

        //get project data
        $projecName0 = $request->input('projecName0');
        $projectStartMonth0 = $request->input('projectStartMonth0');
        $projectStartYear0 = $request->input('projectStartYear0');
        $projectEndMonth0 = $request->input('projectEndMonth0');
        $projectEndYear0 = $request->input('projectEndYear0');
        $thesisTitle1 = $request->input('thesisTitle1');
        $projectEmployer0 = $request->input('projectEmployer0');
        $projectLink0 = $request->input('projectLink0');

        $projecName1 = $request->input('projectName1Z');
        $projectStartMonth1 = $request->input('projecttStartMonth1Z');
        $projectStartYear1 = $request->input('projecttStartYear1Z');
        $projectEndMonth1 = $request->input('projectEndMonth1Z');
        $projectEndYear1 = $request->input('projectEndYear1Z');
        $projectEmployer1 = $request->input('projectEmployer1Z');
        $projectLink1 = $request->input('projectLink1Z');

        $projecName2 = $request->input('projecName2Z');
        $projectStartMonth2 = $request->input('projectStartMonth2Z');
        $projectStartYear2 = $request->input('projectStartYear2Z');
        $projectEndMonth2 = $request->input('projectEndMonth2Z');
        $projectEndYear2 = $request->input('projectEndYear2Z');
        $projectEmployer2 = $request->input('projectEmployer2Z');
        $projectLink2 = $request->input('projectLink2Z');

        $projecName3 = $request->input('projecName3Z');
        $projectStartMonth3 = $request->input('projectStartMonth3Z');
        $projectStartYear3 = $request->input('projectStartYear3Z');
        $projectEndMonth3 = $request->input('projectEndMonth3Z');
        $projectEndYear3 = $request->input('projectEndYear3Z');
        $projectEmployer3 = $request->input('projectEmployer3Z');
        $projectLink3 = $request->input('projectLink3Z');

        //get skills data
        $skillsName0 = $request->input('skillsName0');
        $skillsLevel0 = $request->input('skillsLevel0');

        $skillsName1 = $request->input('skillsName1Z');
        $skillsLevel1 = $request->input('skillsLevel1Z');

        $skillsName2 = $request->input('skillsName2Z');
        $skillsLevel2 = $request->input('skillsLevel2Z');

        $skillsName3 = $request->input('skillsName3Z');
        $skillsLevel3 = $request->input('skillsLevel3Z');

        $skillsName4 = $request->input('skillsName4Z');
        $skillsLevel4 = $request->input('skillsLevel4Z');

        //get works data
        $workPost0 = $request->input('workPost0');
        $workCenter0 = $request->input('workCenter0');
        $workTitleCenter0 = $request->input('workTitleCenter0');
        $workCooperate0 = $request->input('workCooperate0');

        $workPost1 = $request->input('workPost1Z');
        $workCenter1 = $request->input('workCenter1Z');
        $workTitleCenter1 = $request->input('workTitleCenter1Z'); 
        $workCooperate1 = $request->input('workCooperate1Z');

        $workPost2 = $request->input('workPost2Z');
        $workCenter2 = $request->input('workCenter2Z'); //خطا
        $workTitleCenter2 = $request->input('workTitleCenter2Z'); 
        $workCooperate2 = $request->input('workCooperate2Z');


        //BASE START
        //insert data in base table
        $batch = rand(100000000,999999999);
        $getbases = DB::table('tbl_base')->where('BaseBatch',$batch)->get();
        foreach($getbases as $bases)
        {
            if($batch == $bases->BaseBatch)
            {
                $batch = rand(100000000,999999999);
            }
        }

        DB::table('tbl_base')->insert(
            [
                'BaseUserid' => $UID,
                'BaseBatch' => $batch,
                'BaseAvatar' => $avatar,
                'BaseName' => $name,
                'BaseFamily' => $family,
                'BaseWorkTitle' => $work,
                'BaseMarital' => $marital,
                'BaseSolider' => $ms,
                'BaseBirthdate' => $birth_year ."/". $birth_mount ."/". $birth_day ,
                'BaseEmail' => $email ,
                'BaseMobile' => $mobile,
                'BaseTel' => $prenumber ."-". $telephone ,
                'Status' => "----" ,
                'Lang' => "fa" ,
                'Trash' => 0,
                "created_at" =>  \Carbon\Carbon::now(), # new \Datetime()
                "updated_at" => \Carbon\Carbon::now(),  # new \Datetime()
            ]
        );

        //insert data in base table
        DB::table('tbl_base_b')->insert(
            [
                'BaseUserid' => $UID,
                'BaseBatch' => $batch,
                'BaseJob' => $work,
                'BaseSex' => $sex,
                'BaseCountry' => $country,
                'BaseState' => "----",
                'BaseCity' => $city,
                'BaseAddress' => "----",
                'BaseSummary' => $desc,
                'BaseSocial' => $instagram,
                'BaseWeblog' => $weblog,
                "created_at" =>  \Carbon\Carbon::now(), # new \Datetime()
                "updated_at" => \Carbon\Carbon::now(),  # new \Datetime()
            ]
        );
        //BASE END

        //Edu START

        //insert data in edu table
        DB::table('tbl_educational')->insert(
            [
            'EduUserid' => $UID,
            'BatchNumber' => $batch,
            'EduSection' => $eg0,
            'EduMajor' => $efs0,
            'EduOrientation' => $ead0,
            'EduLnstitute' => $eu0,
            'EduAverage' => $GPAU0,
            'EduNow' => $enow,
            "created_at" =>  \Carbon\Carbon::now(), # new \Datetime()
            "updated_at" => \Carbon\Carbon::now(),  # new \Datetime()
            ]
        );

        //insert data in edu table 2
        DB::table('tbl_educational')->insert(
            [
                'EduUserid' => $UID,
                'BatchNumber' => $batch,
                'EduSection' => $eg1,
                'EduMajor' => $efs1,
                'EduOrientation' => $ead1,
                'EduLnstitute' => $eu1,
                'EduAverage' => $GPAU1,
                
                "created_at" =>  \Carbon\Carbon::now(), # new \Datetime()
                "updated_at" => \Carbon\Carbon::now(),  # new \Datetime()
            ]
        );

        //insert data in base table 3
        DB::table('tbl_educational')->insert(
            [
                'EduUserid' => $UID,
                'BatchNumber' => $batch,
                'EduSection' => $eg2,
                'EduMajor' => $efs2,
                'EduOrientation' => $ead2,
                'EduLnstitute' => $eu2,
                'EduAverage' => $GPAU2,
                "created_at" =>  \Carbon\Carbon::now(), # new \Datetime()
                "updated_at" => \Carbon\Carbon::now(),  # new \Datetime()
            ]
        );
        //Edu End

        //LANG START

        //insert data in edu table
        DB::table('tbl_languages')->insert(
            [
            'LangUserid' => $UID,
            'LangBatch' => $batch,
            'LangName' => $langname0,
            'LangWritingskills' => $langWriting0 ,
            'LangReadingskills' => $langReading0,
            'LangListeningskills' => $langListening0 ,
            'LangTalkingskills' => $langSpeech0,
            "created_at" =>  \Carbon\Carbon::now(), # new \Datetime()
            "updated_at" => \Carbon\Carbon::now(),  # new \Datetime()
            ]
        );

        DB::table('tbl_languages')->insert(
            [
            'LangUserid' => $UID,
            'LangBatch' => $batch,
            'LangName' => $langname1,
            'LangWritingskills' => $langWriting1,
            'LangReadingskills' => $langReading1,
            'LangListeningskills' => $langListening1 ,
            'LangTalkingskills' => $langSpeech1,
            "created_at" =>  \Carbon\Carbon::now(), # new \Datetime()
            "updated_at" => \Carbon\Carbon::now(),  # new \Datetime()
            ]
        );

        DB::table('tbl_languages')->insert(
            [
            'LangUserid' => $UID,
            'LangBatch' => $batch,
            'LangName' => $langname2,
            'LangWritingskills' => $langWriting2 ,
            'LangReadingskills' => $langReading2,
            'LangListeningskills' => $langListening2 ,
            'LangTalkingskills' => $langSpeech2,
            "created_at" =>  \Carbon\Carbon::now(), # new \Datetime()
            "updated_at" => \Carbon\Carbon::now(),  # new \Datetime()
            ]
        );

        DB::table('tbl_work_experience')->insert(
            [
            'WorkUserid' => $UID,
            'WorkBatch' => $batch,
            'WorkPost' => $workPost0 ,
            'WorkCenter' => $workCenter0,
            'WorkTitleCenter' => $workTitleCenter0,
            'WorkCooperation' => $workCooperate0,
            "created_at" =>  \Carbon\Carbon::now(), # new \Datetime()
            "updated_at" => \Carbon\Carbon::now(),  # new \Datetime()
            ]
        );
        DB::table('tbl_work_experience')->insert(
            [
            'WorkUserid' => $UID,
            'WorkBatch' => $batch,
            'WorkPost' => $workPost1,
            'WorkCenter' => $workCenter1,
            'WorkTitleCenter' => $workTitleCenter1,
            'WorkCooperation' => $workCooperate1,
            "created_at" =>  \Carbon\Carbon::now(), # new \Datetime()
            "updated_at" => \Carbon\Carbon::now(),  # new \Datetime()
            ]
        );
        DB::table('tbl_work_experience')->insert(
            [
            'WorkUserid' => $UID,
            'WorkBatch' => $batch,
            'WorkPost' => $workPost2 ,
            'WorkCenter' => $workCenter2,
            'WorkTitleCenter' => $workTitleCenter2,
            'WorkCooperation' => $workCooperate2,
            "created_at" =>  \Carbon\Carbon::now(), # new \Datetime()
            "updated_at" => \Carbon\Carbon::now(),  # new \Datetime()
            ]
        );

        $CoursesBatch = rand(1001,8001);
        DB::table('tbl_courses')->insert(
            [
            'CoursesUserid' => $UID,
            'CoursesBatch' => $batch,
            'CoursesType' => $courcesType0,
            'CoursesTitle' => $courcesName0,
            'CoursesInstitute' => $courcesInstitutionName0,
            'CoursesDate' => $courcesYear0,
            "created_at" =>  \Carbon\Carbon::now(), # new \Datetime()
            "updated_at" => \Carbon\Carbon::now(),  # new \Datetime()
            ]
        );
        DB::table('tbl_courses')->insert(
            [
            'CoursesUserid' => $UID,
            'CoursesBatch' => $batch,
            'CoursesType' => $courcesType1,
            'CoursesTitle' => $courcesName1,
            'CoursesInstitute' => $courcesInstitutionName1,
            'CoursesDate' => $courcesYear1,
            "created_at" =>  \Carbon\Carbon::now(), # new \Datetime()
            "updated_at" => \Carbon\Carbon::now(),  # new \Datetime()
            ]
        );
        DB::table('tbl_courses')->insert(
            [
            'CoursesUserid' => $UID,
            'CoursesBatch' => $batch,
            'CoursesType' => $courcesType2,
            'CoursesTitle' => $courcesName2,
            'CoursesInstitute' => $courcesInstitutionName2,
            'CoursesDate' => $courcesYear2,
            "created_at" =>  \Carbon\Carbon::now(), # new \Datetime()
            "updated_at" => \Carbon\Carbon::now(),  # new \Datetime()
            ]
        );
        DB::table('tbl_articles')->insert(
            [
            'ArticlesUserid' => $UID,
            'ArticleBatch' => $batch,
            'ArticlesType' => "پایان‌نامه",
            'ArticlesTitle' => $thesisTitle0,
            'ArticlesDate' => $year0."/". $month0."/".$defensDate0,
            "created_at" =>  \Carbon\Carbon::now(), # new \Datetime()
            "updated_at" => \Carbon\Carbon::now(),  # new \Datetime()
            ]
        );
        DB::table('tbl_articles')->insert(
            [
            'ArticlesUserid' => $UID,
            'ArticleBatch' => $batch,
            'ArticlesType' => "پایان‌نامه",
            'ArticlesTitle' => $thesisTitle1,
            'ArticlesDate' => $year1."/". $month1."/".$defensDate1,
            "created_at" =>  \Carbon\Carbon::now(), # new \Datetime()
            "updated_at" => \Carbon\Carbon::now(),  # new \Datetime()
            ]
        );
        DB::table('tbl_projects')->insert(
            [
            'ProjectUserid' => $UID,
            'ProjectBatch' => $batch,
            'ProjectTitle' => $projecName0,
            'ProjectDateStart' => $projectStartYear0."/".$projectStartMonth0,
            'ProjectDateEnd' => $projectEndYear0."/".$projectEndMonth0,
            'ProjectEmployer' => $projectEmployer0,
            'ProjectLink' => $projectLink0,
            "created_at" =>  \Carbon\Carbon::now(), # new \Datetime()
            "updated_at" => \Carbon\Carbon::now(),  # new \Datetime()
            ]
        );
        DB::table('tbl_projects')->insert(
            [
            'ProjectUserid' => $UID,
            'ProjectBatch' => $batch,
            'ProjectTitle' => $projecName1,
            'ProjectDateStart' => $projectStartYear1."/".$projectStartMonth1,
            'ProjectDateEnd' => $projectEndYear1."/".$projectEndMonth1,
            'ProjectEmployer' => $projectEmployer1,
            'ProjectLink' => $projectLink1,
            "created_at" =>  \Carbon\Carbon::now(), # new \Datetime()
            "updated_at" => \Carbon\Carbon::now(),  # new \Datetime()
            ]
        );
        DB::table('tbl_projects')->insert(
            [
            'ProjectUserid' => $UID,
            'ProjectBatch' => $batch,
            'ProjectTitle' => $projecName2,
            'ProjectDateStart' => $projectStartYear2."/".$projectStartMonth2,
            'ProjectDateEnd' => $projectEndYear2."/".$projectEndMonth2,
            'ProjectEmployer' => $projectEmployer2,
            'ProjectLink' => $projectLink2,
            "created_at" =>  \Carbon\Carbon::now(), # new \Datetime()
            "updated_at" => \Carbon\Carbon::now(),  # new \Datetime()
            ]
        );
        DB::table('tbl_projects')->insert(
            [
            'ProjectUserid' => $UID,
            'ProjectBatch' => $batch,
            'ProjectTitle' => $projecName3,
            'ProjectDateStart' => $projectStartYear3."/".$projectStartMonth3,
            'ProjectDateEnd' => $projectEndYear3."/".$projectEndMonth3,
            'ProjectEmployer' => $projectEmployer3,
            'ProjectLink' => $projectLink3,
            "created_at" =>  \Carbon\Carbon::now(), # new \Datetime()
            "updated_at" => \Carbon\Carbon::now(),  # new \Datetime()
            ]
        );
        DB::table('tbl_skills')->insert(
            [
            'SkillsUserid' => $UID,
            'SkillsBatch' => $batch,
            'SkillsName' => $skillsName0,
            'SkillsLevel' => $skillsLevel0,
            "created_at" =>  \Carbon\Carbon::now(), # new \Datetime()
            "updated_at" => \Carbon\Carbon::now(),  # new \Datetime()
            ]
        );
        DB::table('tbl_skills')->insert(
            [
            'SkillsUserid' => $UID,
            'SkillsBatch' => $batch,
            'SkillsName' => $skillsName1,
            'SkillsLevel' => $skillsLevel1,
            "created_at" =>  \Carbon\Carbon::now(), # new \Datetime()
            "updated_at" => \Carbon\Carbon::now(),  # new \Datetime()
            ]
        );
        DB::table('tbl_skills')->insert(
            [
            'SkillsUserid' => $UID,
            'SkillsBatch' => $batch,
            'SkillsName' => $skillsName2,
            'SkillsLevel' => $skillsLevel2,
            "created_at" =>  \Carbon\Carbon::now(), # new \Datetime()
            "updated_at" => \Carbon\Carbon::now(),  # new \Datetime()
            ]
        );
        DB::table('tbl_skills')->insert(
            [
            'SkillsUserid' => $UID,
            'SkillsBatch' => $batch,
            'SkillsName' => $skillsName3,
            'SkillsLevel' => $skillsLevel3,
            "created_at" =>  \Carbon\Carbon::now(), # new \Datetime()
            "updated_at" => \Carbon\Carbon::now(),  # new \Datetime()
            ]
        );
        DB::table('tbl_skills')->insert(
            [
            'SkillsUserid' => $UID,
            'SkillsBatch' => $batch,
            'SkillsName' => $skillsName4,
            'SkillsLevel' => $skillsLevel4,
            "created_at" =>  \Carbon\Carbon::now(), # new \Datetime()
            "updated_at" => \Carbon\Carbon::now(),  # new \Datetime()
            ]
        );
        $request->session()->put('batch', $batch);
        return redirect('/save-chnage-and-add-picture');
    }

    public function update_resume(Request $request)
    {
        //validation data and get data
        $validate_data = Validator::make(request()->all() , [
            'base-name' => 'min:2',
            'base-family' => 'min:2|max:30',
            'base-work' => 'min:3|max:50',
            'base-city' => 'min:2|max:50',
            'base-mobile' => 'min:11|max:11',
            'base-telephone' => 'min:8|max:8',
            'base-pre-number-state' => 'min:3|max:3',
            'base-desc' => 'max:70',
        ],[
            'base-name.min' => 'حداقل حروف فیلد نام 2 کاراکتر است.',
            'base-family.min' => 'حداقل حروف فیلد نام‌خانوادگی 2 کاراکتر است.',
            'base-family.max' => 'حداکثر حروف فیلد نام‌خانوادگی 30 کاراکتر است.',
            'base-work.min' => 'حداقل حروف فیلد عنوان‌حرفه 3 کاراکتر است.',
            'base-work.max' => 'حداکثر حروف فیلد عنوان‌حرفه 50 کاراکتر است.',
            'base-city.min' => 'حداقل حروف فیلد شهر 2 کاراکتر است.',
            'base-city.max' => 'حداکثر حروف فیلد شهر 50 کاراکتر است.',
            'base-pre-number-state.min' => 'حداقل حروف فیلد پیش‌ شماره تلفن 3 کاراکتر است.',
            'base-pre-number-state.max' => 'حداکثر حروف فیلد پیش‌ شماره تلفن 3 کاراکتر است.',
            'base-desc.max' => 'حداکثر حروف فیلد توصیف خلاصه از خود 70 کاراکتر است.',
        ])->validated();

        //get userid
        $UID = $request->input('uid');

        //get base data
         $avatar = $request->input('base-avatar');
         $name = $request->input('base-name');
         $family = $request->input('base-family');
         $work = $request->input('base-work');
         $marital = $request->input('base-marital');
         $ms = $request->input('base-MS');
         $mobile = $request->input('base-mobile');
         $birth_day = $request->input('base-day-birth');
         $birth_mount = $request->input('base-month-birth');
         $birth_year = $request->input('base-year-birth');
         $telephone = $request->input('base-telephone');
         $prenumber = $request->input('base-pre-number-state');
         $email = $request->input('base-email');

        //get base data 2
         $city = $request->input('base-city');
         $sex = $request->input('base-sex');
         $pnc = $request->input('base-pre-number-country');
         $weblog = $request->input('base-weblog');
         $instagram = $request->input('base-instagram');
         $desc = $request->input('base-desc');
         if($pnc == 98)
         {
             $country = "ایران";
         }
         $enow = $request->input('education-now');

         //get education data
          $eg0 = $request->input('education-grade0');
          $efs0 = $request->input('educationFS0');
          $ead0 = $request->input('educationAD0');
          $eu0 = $request->input('educationUniversity0');
          $GPAU0 = $request->input('GPAUniversity0');

          $eg1 = $request->input('education-grade1Z');
          $efs1 = $request->input('educationFS1Z');
          $ead1 = $request->input('educationAD1Z');
          $eu1 = $request->input('educationUniversity1Z');
          $GPAU1 = $request->input('GPAUniversity1Z');

          $eg2 = $request->input('education-grade2Z');
          $efs2 = $request->input('educationFS2Z');
          $ead2 = $request->input('educationAD2Z');
          $eu2 = $request->input('educationUniversity2Z');
          $GPAU2 = $request->input('GPAUniversity2Z');

         //get language data
         $langname0 = $request->input('langName0');
         $langReading0 = $request->input('langReading0');
         $langWriting0 = $request->input('langWriting0');
         $langSpeech0 = $request->input('langSpeech0');
         $langListening0 = $request->input('langListening0');

         $langname1 = $request->input('langName1Z');
         $langReading1 = $request->input('langReading1Z');
         $langWriting1 = $request->input('langWriting1Z');
         $langSpeech1 = $request->input('langSpeech1Z');
         $langListening1 = $request->input('langListening1Z');

         $langname2 = $request->input('langName2Z');
         $langReading2 = $request->input('langReading2Z');
         $langWriting2 = $request->input('langWriting2Z');
         $langSpeech2 = $request->input('langSpeech2Z');
         $langListening2 = $request->input('langListening2Z');

        //get courses data
        $courcesType0 = $request->input('courcesType0');
        $courcesName0 = $request->input('courcesName0');
        $courcesYear0 = $request->input('courcesYear0');
        $courcesInstitutionName0 = $request->input('courcesInstitutionName0');

        $courcesType1 = $request->input('courcesType1Z');
        $courcesName1 = $request->input('courcesName1Z');
        $courcesYear1 = $request->input('courcesYear1Z');
        $courcesInstitutionName1 = $request->input('courcesInstitutionName1Z');

        $courcesType2 = $request->input('courcesType2Z');
        $courcesName2 = $request->input('courcesName2Z');
        $courcesYear2 = $request->input('courcesYear2Z');
        $courcesInstitutionName2 = $request->input('courcesInstitutionName2Z');

        //get thesis data
        $thesisTitle0 = $request->input('thesisTitle0');
        $defensDate0 = $request->input('defensDate0');
        $month0 = $request->input('month0'); // tset not ok
        $year0 = $request->input('year0');

        $thesisTitle1 = $request->input('thesisTitle1');
        $defensDate1 = $request->input('defensDate1');
        $month1 = $request->input('month1');
        $year1 = $request->input('year1');

        //get project data
        $projecName0 = $request->input('projecName0');
        $projectStartMonth0 = $request->input('projectStartMonth0');
        $projectStartYear0 = $request->input('projectStartYear0');
        $projectEndMonth0 = $request->input('projectEndMonth0');
        $projectEndYear0 = $request->input('projectEndYear0');
        $projectEmployer0 = $request->input('projectEmployer0');
        $projectLink0 = $request->input('projectLink0');

        $projecName1 = $request->input('projectName1Z');
        $projectStartMonth1 = $request->input('projecttStartMonth1Z');
        $projectStartYear1 = $request->input('projecttStartYear1Z');
        $projectEndMonth1 = $request->input('projectEndMonth1Z');
        $projectEndYear1 = $request->input('projectEndYear1Z');
        $projectEmployer1 = $request->input('projectEmployer1Z');
        $projectLink1 = $request->input('projectLink1Z');

        $projecName2 = $request->input('projecName2Z');
        $projectStartMonth2 = $request->input('projectStartMonth2Z');
        $projectStartYear2 = $request->input('projectStartYear2Z');
        $projectEndMonth2 = $request->input('projectEndMonth2Z');
        $projectEndYear2 = $request->input('projectEndYear2Z');
        $projectEmployer2 = $request->input('projectEmployer2Z');
        $projectLink2 = $request->input('projectLink2Z');

        $projecName3 = $request->input('projecName3Z');
        $projectStartMonth3 = $request->input('projectStartMonth3Z');
        $projectStartYear3 = $request->input('projectStartYear3Z');
        $projectEndMonth3 = $request->input('projectEndMonth3Z');
        $projectEndYear3 = $request->input('projectEndYear3Z');
        $projectEmployer3 = $request->input('projectEmployer3Z');
        $projectLink3 = $request->input('projectLink3Z');

        //get skills data
        $skillsName0 = $request->input('skillsName0');
        $skillsLevel0 = $request->input('skillsLevel0');

        $skillsName1 = $request->input('skillsName1Z');
        $skillsLevel1 = $request->input('skillsLevel1Z');

        $skillsName2 = $request->input('skillsName2Z');
        $skillsLevel2 = $request->input('skillsLevel2Z');

        $skillsName3 = $request->input('skillsName3Z');
        $skillsLevel3 = $request->input('skillsLevel3Z');

        $skillsName4 = $request->input('skillsName4Z');
        $skillsLevel4 = $request->input('skillsLevel4Z');

        //get works data
        $workPost0 = $request->input('workPost0');
        $workCenter0 = $request->input('workCenter0');
        $workTitleCenter0 = $request->input('workTitleCenter0');
        $workCooperate0 = $request->input('workCooperate0');

        $workPost1 = $request->input('workPost1Z');
        $workCenter1 = $request->input('workCenter1Z');
        $workTitleCenter1 = $request->input('workTitleCenter1Z'); 
        $workCooperate1 = $request->input('workCooperate1Z');

        $workPost2 = $request->input('workPost2Z');
        $workCenter2 = $request->input('workCenter2Z');
        $workTitleCenter2 = $request->input('workTitleCenter2Z'); 
        $workCooperate2 = $request->input('workCooperate2Z');

        $batch = $request->input('batchNumber');

        //update code start


        DB::table('tbl_base')
        ->where('BaseBatch', $batch)
        ->update([
        'BaseAvatar' => $avatar,
        'BaseName' => $name,
        'BaseFamily' => $family,
        'BaseMarital' => $marital,
        'BaseSolider' => $ms,
        'BaseBirthdate' => $birth_year ."/". $birth_mount ."/". $birth_day,
        'BaseWorkTitle' => $work,
        'BaseEmail' => $email,
        'BaseMobile' => $mobile,
        'BaseTel' => $prenumber .'-'. $telephone,   
        'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('tbl_base_b')
        ->where('BaseBatch', $batch)
        ->update([
        'BaseSex' => $sex,
        'BaseCity' => $city,
        'BaseCountry' => $country,
        'BaseSummary' => $desc,
        'BaseSocial' => $instagram,
        'BaseWeblog' => $weblog,  
        'updated_at' => \Carbon\Carbon::now()
        ]);

        $eduid1 = DB::table('tbl_educational')->where('BatchNumber', $batch)->orderBy('Eduid', 'asc')->first();
        $eduid1 = $eduid1->Eduid;
        $eduid2 = DB::table('tbl_educational')->where('BatchNumber', $batch)->orderBy('Eduid', 'asc')->skip(1)->first();
        $eduid2 = $eduid2->Eduid;
        $eduid3 = DB::table('tbl_educational')->where('BatchNumber', $batch)->orderBy('Eduid', 'asc')->skip(2)->first();
        $eduid3 = $eduid3->Eduid;

        DB::table('tbl_educational')
        ->where('BatchNumber',$batch)->where('Eduid',$eduid1)
        ->update([
        'EduSection' => $eg0,
        'EduMajor' => $efs0,
        'EduOrientation' => $ead0,
        'EduLnstitute' => $eu0,
        'EduAverage' => $GPAU0,
        'EduNow' => $enow,
        'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('tbl_educational')
        ->where('BatchNumber',$batch)->where('Eduid',$eduid2)
        ->update([
        'EduSection' => $eg1,
        'EduMajor' => $efs1,
        'EduOrientation' => $ead1,
        'EduLnstitute' => $eu1,
        'EduAverage' => $GPAU1,
        'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('tbl_educational')
        ->where('BatchNumber',$batch)->where('Eduid',$eduid3)
        ->update([
        'EduSection' => $eg2,
        'EduMajor' => $efs2,
        'EduOrientation' => $ead2,
        'EduLnstitute' => $eu2,
        'EduAverage' => $GPAU2,
        'updated_at' => \Carbon\Carbon::now()
        ]);


        $langid1 = DB::table('tbl_languages')->where('LangBatch', $batch)->orderBy('Langid', 'asc')->first();
        $langid1 = $langid1->Langid;
        $langid2 = DB::table('tbl_languages')->where('LangBatch', $batch)->orderBy('Langid', 'asc')->skip(1)->first();
        $langid2 = $langid2->Langid;
        $langid3 = DB::table('tbl_languages')->where('LangBatch', $batch)->orderBy('Langid', 'asc')->skip(2)->first();
        $langid3 = $langid3->Langid;

        DB::table('tbl_languages')
        ->where('LangBatch',$batch)->where('Langid',$langid1)
        ->update([
        'LangName' => $langname0,
        'LangWritingskills' => $langWriting0,
        'LangReadingskills' => $langReading0,
        'LangListeningskills' => $langListening0,
        'LangTalkingskills' => $langSpeech0,
        'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('tbl_languages')
        ->where('LangBatch',$batch)->where('Langid',$langid2)
        ->update([
        'LangName' => $langname1,
        'LangWritingskills' => $langWriting1,
        'LangReadingskills' => $langReading1,
        'LangListeningskills' => $langListening1,
        'LangTalkingskills' => $langSpeech1,
        'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('tbl_languages')
        ->where('LangBatch',$batch)->where('Langid',$langid3)
        ->update([
        'LangName' => $langname2,
        'LangWritingskills' => $langWriting2,
        'LangReadingskills' => $langReading2,
        'LangListeningskills' => $langListening2,
        'LangTalkingskills' => $langSpeech2,
        'updated_at' => \Carbon\Carbon::now()
        ]);


        $workid1 = DB::table('tbl_work_experience')->where('WorkBatch', $batch)->orderBy('Workid', 'asc')->first();
        $workid1 = $workid1->Workid;
        $workid2 = DB::table('tbl_work_experience')->where('WorkBatch', $batch)->orderBy('Workid', 'asc')->skip(1)->first();
        $workid2 = $workid2->Workid;
        $workid3 = DB::table('tbl_work_experience')->where('WorkBatch', $batch)->orderBy('Workid', 'asc')->skip(2)->first();
        $workid3 = $workid3->Workid;

        DB::table('tbl_work_experience')
        ->where('WorkBatch',$batch)->where('workid',$workid1)
        ->update([
        'WorkPost' => $workPost0,
        'WorkCenter' => $workCenter0,
        'WorkTitleCenter' => $workTitleCenter0,
        'WorkCooperation' => $workCooperate0,
        'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('tbl_work_experience')
        ->where('WorkBatch',$batch)->where('workid',$workid2)
        ->update([
        'WorkPost' => $workPost1,
        'WorkCenter' => $workCenter1,
        'WorkTitleCenter' => $workTitleCenter1,
        'WorkCooperation' => $workCooperate1,
        'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('tbl_work_experience')
        ->where('WorkBatch',$batch)->where('workid',$workid3)
        ->update([
        'WorkPost' => $workPost2,
        'WorkCenter' => $workCenter2,
        'WorkTitleCenter' => $workTitleCenter2,
        'WorkCooperation' => $workCooperate2,
        'updated_at' => \Carbon\Carbon::now()
        ]);

        $courseid1 = DB::table('tbl_courses')->where('CoursesBatch', $batch)->orderBy('Coursesid', 'asc')->first();
        $courseid1 = $courseid1->Coursesid;
        $courseid2 = DB::table('tbl_courses')->where('CoursesBatch', $batch)->orderBy('Coursesid', 'asc')->skip(1)->first();
        $courseid2 = $courseid2->Coursesid;
        $courseid3 = DB::table('tbl_courses')->where('CoursesBatch', $batch)->orderBy('Coursesid', 'asc')->skip(2)->first();
        $courseid3 = $courseid3->Coursesid;

        DB::table('tbl_courses')
        ->where('CoursesBatch',$batch)->where('Coursesid',$courseid1)
        ->update([
        'CoursesType' => $courcesType0,
        'CoursesTitle' => $courcesName0,
        'CoursesInstitute' => $courcesInstitutionName0,
        'CoursesDate' => $courcesYear0,
        'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('tbl_courses')
        ->where('CoursesBatch',$batch)->where('Coursesid',$courseid2)
        ->update([
        'CoursesType' => $courcesType1,
        'CoursesTitle' => $courcesName1,
        'CoursesInstitute' => $courcesInstitutionName1,
        'CoursesDate' => $courcesYear1,
        'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('tbl_courses')
        ->where('CoursesBatch',$batch)->where('Coursesid',$courseid3)
        ->update([
        'CoursesType' => $courcesType2,
        'CoursesTitle' => $courcesName2,
        'CoursesInstitute' => $courcesInstitutionName2,
        'CoursesDate' => $courcesYear2,
        'updated_at' => \Carbon\Carbon::now()
        ]);

        $thesisid1 = DB::table('tbl_articles')->where('ArticleBatch', $batch)->orderBy('Articlesid', 'asc')->first();
        $thesisid1 = $thesisid1->Articlesid;
        $thesisid2 = DB::table('tbl_articles')->where('ArticleBatch', $batch)->orderBy('Articlesid', 'asc')->skip(1)->first();
        $thesisid2 = $thesisid2->Articlesid;

        //پایان نامه
        DB::table('tbl_articles')
        ->where('ArticleBatch',$batch)->where('Articlesid',$thesisid1)
        ->update([
        'ArticlesTitle' => $thesisTitle0,
        'ArticlesDate' => $year0."/". $month0."/".$defensDate0,
        'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('tbl_articles')
        ->where('ArticleBatch',$batch)->where('Articlesid',$thesisid2)
        ->update([
        'ArticlesTitle' => $thesisTitle1,
        'ArticlesDate' => $year1."/". $month1."/".$defensDate1,
        'updated_at' => \Carbon\Carbon::now()
        ]);

        $projectid1 = DB::table('tbl_projects')->where('ProjectBatch', $batch)->orderBy('Projectid', 'asc')->first();
        $projectid1 = $projectid1->Projectid;
        $projectid2 = DB::table('tbl_projects')->where('ProjectBatch', $batch)->orderBy('Projectid', 'asc')->skip(1)->first();
        $projectid2 = $projectid2->Projectid;
        $projectid3 = DB::table('tbl_projects')->where('ProjectBatch', $batch)->orderBy('Projectid', 'asc')->skip(2)->first();
        $projectid3 = $projectid3->Projectid;
        $projectid4 = DB::table('tbl_projects')->where('ProjectBatch', $batch)->orderBy('Projectid', 'asc')->skip(3)->first();
        $projectid4 = $projectid4->Projectid;

        DB::table('tbl_projects')
        ->where('ProjectBatch',$batch)->where('Projectid',$projectid1)
        ->update([
        'ProjectTitle' => $projecName0,
        'ProjectDateStart' => $projectStartYear0."/".$projectStartMonth0,
        'ProjectDateEnd' => $projectEndYear0."/".$projectEndMonth0,
        'ProjectEmployer' => $projectEmployer0,
        'ProjectLink' => $projectLink0,
        'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('tbl_projects')
        ->where('ProjectBatch',$batch)->where('Projectid',$projectid2)
        ->update([
        'ProjectTitle' => $projecName1,
        'ProjectDateStart' => $projectStartYear1."/".$projectStartMonth1,
        'ProjectDateEnd' => $projectEndYear1."/".$projectEndMonth1,
        'ProjectEmployer' => $projectEmployer1,
        'ProjectLink' => $projectLink1,
        'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('tbl_projects')
        ->where('ProjectBatch',$batch)->where('Projectid',$projectid3)
        ->update([
        'ProjectTitle' => $projecName2,
        'ProjectDateStart' => $projectStartYear2."/".$projectStartMonth2,
        'ProjectDateEnd' => $projectEndYear2."/".$projectEndMonth2,
        'ProjectEmployer' => $projectEmployer2,
        'ProjectLink' => $projectLink2,
        'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('tbl_projects')
        ->where('ProjectBatch',$batch)->where('Projectid',$projectid4)
        ->update([
        'ProjectTitle' => $projecName3,
        'ProjectDateStart' => $projectStartYear3."/".$projectStartMonth3,
        'ProjectDateEnd' => $projectEndYear3."/".$projectEndMonth3,
        'ProjectEmployer' => $projectEmployer3,
        'ProjectLink' => $projectLink3,
        'updated_at' => \Carbon\Carbon::now()
        ]);

        $skillid1 = DB::table('tbl_skills')->where('SkillsBatch', $batch)->orderBy('Skillsid', 'asc')->first();
        $skillid1 = $skillid1->Skillsid;
        $skillid2 = DB::table('tbl_skills')->where('SkillsBatch', $batch)->orderBy('Skillsid', 'asc')->skip(1)->first();
        $skillid2 = $skillid2->Skillsid;
        $skillid3 = DB::table('tbl_skills')->where('SkillsBatch', $batch)->orderBy('Skillsid', 'asc')->skip(2)->first();
        $skillid3 = $skillid3->Skillsid;
        $skillid4 = DB::table('tbl_skills')->where('SkillsBatch', $batch)->orderBy('Skillsid', 'asc')->skip(3)->first();
        $skillid4 = $skillid4->Skillsid;
        $skillid5 = DB::table('tbl_skills')->where('SkillsBatch', $batch)->orderBy('Skillsid', 'asc')->skip(4)->first();
        $skillid5 = $skillid5->Skillsid;

        

        DB::table('tbl_skills')
        ->where('SkillsBatch',$batch)->where('Skillsid',$skillid1)
        ->update([
        'SkillsName' => $skillsName0,
        'SkillsLevel' => $skillsLevel0,
        'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('tbl_skills')
        ->where('SkillsBatch',$batch)->where('Skillsid',$skillid2)
        ->update([
        'SkillsName' => $skillsName1,
        'SkillsLevel' => $skillsLevel1,
        'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('tbl_skills')
        ->where('SkillsBatch',$batch)->where('Skillsid',$skillid3)
        ->update([
        'SkillsName' => $skillsName2,
        'SkillsLevel' => $skillsLevel2,
        'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('tbl_skills')
        ->where('SkillsBatch',$batch)->where('Skillsid',$skillid4)
        ->update([
        'SkillsName' => $skillsName3,
        'SkillsLevel' => $skillsLevel3,
        'updated_at' => \Carbon\Carbon::now()
        ]);

        DB::table('tbl_skills')
        ->where('SkillsBatch',$batch)->where('Skillsid',$skillid5)
        ->update([
        'SkillsName' => $skillsName4,
        'SkillsLevel' => $skillsLevel4,
        'updated_at' => \Carbon\Carbon::now()
        ]);


        //update code end

         //return to edit panel
        $getbases = DB::table('tbl_base')->where('BaseBatch',$batch)->first();
        $getbases_b = DB::table('tbl_base_b')->where('BaseBatch',$batch)->first();
        $getedus = DB::table('tbl_educational')->where('BatchNumber',$batch)->orderBy('Eduid', 'asc')->first();
        $getedus2 = DB::table('tbl_educational')->where('BatchNumber',$batch)->orderBy('Eduid', 'asc')->skip(1)->limit(1)->first();
        $getedus3 = DB::table('tbl_educational')->where('BatchNumber',$batch)->orderBy('Eduid', 'asc')->skip(2)->limit(1)->first();
        $getcourse1 = DB::table('tbl_courses')->where('CoursesBatch',$batch)->orderBy('Coursesid', 'asc')->first();
        $getcourse2 = DB::table('tbl_courses')->where('CoursesBatch',$batch)->orderBy('Coursesid', 'asc')->skip(1)->limit(1)->first();
        $getcourse3 = DB::table('tbl_courses')->where('CoursesBatch',$batch)->orderBy('Coursesid', 'asc')->skip(2)->limit(1)->first();
        $getwork1 = DB::table('tbl_work_experience')->where('WorkBatch',$batch)->orderBy('Workid', 'asc')->first();
        $getwork2 = DB::table('tbl_work_experience')->where('WorkBatch',$batch)->orderBy('Workid', 'asc')->skip(1)->limit(1)->first();
        $getwork3 = DB::table('tbl_work_experience')->where('WorkBatch',$batch)->orderBy('Workid', 'asc')->skip(2)->limit(1)->first();
        $getlang1 = DB::table('tbl_languages')->where('LangBatch',$batch)->orderBy('Langid', 'asc')->first();
        $getlang2 = DB::table('tbl_languages')->where('LangBatch',$batch)->orderBy('Langid', 'asc')->skip(1)->limit(1)->first();
        $getlang3 = DB::table('tbl_languages')->where('LangBatch',$batch)->orderBy('Langid', 'asc')->skip(2)->limit(1)->first();
        $getproject1 = DB::table('tbl_projects')->where('ProjectBatch',$batch)->orderBy('Projectid', 'asc')->first();
        $getproject2 = DB::table('tbl_projects')->where('ProjectBatch',$batch)->orderBy('Projectid', 'asc')->skip(1)->limit(1)->first();
        $getproject3 = DB::table('tbl_projects')->where('ProjectBatch',$batch)->orderBy('Projectid', 'asc')->skip(2)->limit(1)->first();
        $getproject4 = DB::table('tbl_projects')->where('ProjectBatch',$batch)->orderBy('Projectid', 'asc')->skip(3)->limit(1)->first();
        $getthesis1 = DB::table('tbl_articles')->where('ArticleBatch',$batch)->orderBy('Articlesid', 'asc')->first();
        $getthesis2 = DB::table('tbl_articles')->where('ArticleBatch',$batch)->orderBy('Articlesid', 'asc')->skip(1)->limit(1)->first();
        $getskill1 = DB::table('tbl_skills')->where('SkillsBatch',$batch)->orderBy('Skillsid', 'asc')->first();
        $getskill2 = DB::table('tbl_skills')->where('SkillsBatch',$batch)->orderBy('Skillsid', 'asc')->skip(1)->limit(1)->first();
        $getskill3 = DB::table('tbl_skills')->where('SkillsBatch',$batch)->orderBy('Skillsid', 'asc')->skip(2)->limit(1)->first();
        $getskill4 = DB::table('tbl_skills')->where('SkillsBatch',$batch)->orderBy('Skillsid', 'asc')->skip(3)->limit(1)->first();
        $getskill5 = DB::table('tbl_skills')->where('SkillsBatch',$batch)->orderBy('Skillsid', 'asc')->skip(4)->limit(1)->first();

    $getcities = DB::table('tbl_cities')->orderBy('name', 'asc')->get();
    $getvocation = DB::table('tbl_vocation')->orderBy('name', 'asc')->get();

    $getcode = DB::table('tbl_prenumber')->first();
    $code = explode('-', $getcode->codes);

    $codeC = explode('-', $getcode->CountryCode);

    $getuniversity = DB::table('universitydata')->first();
    $guniversity = explode('-',$getuniversity->university);

    $getmajor = DB::table('universitydata')->first();
    $gmajor = explode('-',$getuniversity->major);

    $getlang = DB::table('universitydata')->first();
    $glang = explode('-',$getuniversity->lang);

    $getcources = DB::table('coursesdata')->first();
    $getcources = explode('-',$getcources->Type);

    $getyear = DB::table('coursesdata')->first();
    $getyear = explode('-',$getyear->Year);
    $UID = session('UID');

    $projectdatestart = explode("/",$getproject1->ProjectDateStart);
    $projectyearstart = $projectdatestart[0];
    $projectmonthstart = $projectdatestart[1];

    $projectdateend = explode("/",$getproject1->ProjectDateEnd);
    $projectyearend = $projectdateend[0];
    $projectmonthend = $projectdateend[1];

    $projectdatestart2 = explode("/",$getproject2->ProjectDateStart);
    $projectyearstart2 = $projectdatestart2[0];
    $projectmonthstart2 = $projectdatestart2[1];

    $projectdateend2 = explode("/",$getproject2->ProjectDateEnd);
    $projectyearend2 = $projectdateend2[0];
    $projectmonthend2 = $projectdateend2[1];

    $projectdatestart3 = explode("/",$getproject3->ProjectDateStart);
    $projectyearstart3 = $projectdatestart3[0];
    $projectmonthstart3 = $projectdatestart3[1];

    $projectdateend3 = explode("/",$getproject3->ProjectDateEnd);
    $projectyearend3 = $projectdateend3[0];
    $projectmonthend3 = $projectdateend3[1];

    $projectdatestart4 = explode("/",$getproject4->ProjectDateStart);
    $projectyearstart4 = $projectdatestart4[0];
    $projectmonthstart4 = $projectdatestart4[1];

    $projectdateend4 = explode("/",$getproject4->ProjectDateEnd);
    $projectyearend4 = $projectdateend4[0];
    $projectmonthend4 = $projectdateend4[1];

   $birthdate = explode("/",$getbases->BaseBirthdate);
   $day = $birthdate[2];
   $month = $birthdate[1];
   $year = $birthdate[0];

   $defencedate = explode("/",$getthesis1->ArticlesDate);
   $dayt1 = $defencedate[2];
   $montht1 = $defencedate[1];
   $yeart1 = $defencedate[0];

   $defencedate2 = explode("/",$getthesis2->ArticlesDate);
   $dayt2 = $defencedate2[2];
   $montht2 = $defencedate2[1];
   $yeart2 = $defencedate2[0];

   $tel = explode("-",$getbases->BaseTel);
   $pretel = $tel[0];
   $tel = $tel[1];

    $section = $getedus->EduSection;
    $section2 = $getedus2->EduSection;
    $section3 = $getedus3->EduSection;

    if($section2 != '')
    {
        $s_n = 1;
    }
    else
    {
        $s_n = 0;
    }
    if($section3 != '')
    {
        $s_n = 2;
    }

    $lang = $getlang1->LangName;
    $lang2 = $getlang2->LangName;
    $lang3 = $getlang3->LangName;

    if($lang2 != '')
    {
        $l_n = 1;
    }
    else
    {
        $l_n = 0;
    }
    if($lang3 != '')
    {
        $l_n = 2;
    }

    $work = $getwork1->WorkPost;
    $work2 = $getwork2->WorkPost;
    $work3 = $getwork3->WorkPost;

    if($work2 != '')
    {
        $w_n = 1;
    }
    else
    {
        $w_n = 0;
    }
    if($work3 != '')
    {
        $w_n = 2;
    }

    $course1 = $getcourse1->CoursesType;
    $course2 = $getcourse2->CoursesType;
    $course3 = $getcourse3->CoursesType;

    
    if($course2 != '')
    {
        $c_n = 1;
    }
    else
    {
        $c_n = 0;
    }
    if($course3 != '')
    {
        $c_n = 2;
    }

    $project1 = $getproject1->ProjectTitle;
    $project2 = $getproject2->ProjectTitle;
    $project3 = $getproject3->ProjectTitle;
    $project4 = $getproject4->ProjectTitle;

    if($project2 != '')
    {
        $p_n = 1;
    }
    else
    {
        $p_n = 0;
    }
    if($project3 != '')
    {
        $p_n = 2;
    }
    if($project4 != '')
    {
        $p_n = 3;
    }

    $skill1 = $getskill1->SkillsName;
    $skill2 = $getskill2->SkillsName;
    $skill3 = $getskill3->SkillsName;
    $skill4 = $getskill4->SkillsName;
    $skill5 = $getskill5->SkillsName;

    if($skill2 != '')
    {
        $ss_n = 1;
    }
    else
    {
        $ss_n = 0;
    }
    if($skill3 != '')
    {
        $ss_n = 2;
    }
    if($skill4 != '')
    {
        $ss_n = 3;
    }
    if($skill5 != '')
    {
        $ss_n = 4;
    }

    return view('cv.ecv',compact('getskill2','getskill3','getskill4','getskill5','ss_n','projectyearend4','projectmonthend4','projectyearstart4','projectmonthstart4','projectyearend3','projectmonthend3','projectyearstart3','projectmonthstart3','projectyearend2','projectmonthend2','projectyearstart2','projectmonthstart2','p_n','getproject2','getproject3','getproject4','c_n','getcourse2','getcourse3','getwork3','w_n','getwork2','l_n','getlang3','getlang2','getedus3','getedus2','getskill1','projectyearend','projectmonthend','projectyearstart','projectmonthstart','getproject1','getthesis1','getthesis2','getcourse1','getwork1','getlang1','s_n','section','section2','section3','getedus','pretel','tel','day','month','year','getbases','getbases_b','getyear','getcources','getvocation','glang','gmajor','guniversity','getcities','code','getvocation','codeC','UID','batch','dayt1','yeart1','montht1','dayt2','yeart2','montht2'));
    }
}
