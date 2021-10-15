<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Factor extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_factor', function (Blueprint $table) {
            $table->bigIncrements('Factorid');
            $table->string('FactorTemplateid',12);
            $table->string('FactorName',100);
            $table->string('FactorFamily',100);
            $table->integer('FactorAmount');
            $table->string('FactorMobile',100);
            $table->string('FactorEmail',100);
            $table->string('FactorStatus',100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
