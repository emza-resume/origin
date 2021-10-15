<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Templete extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_template', function (Blueprint $table) {
            $table->bigIncrements('TemplateId');
            $table->string('TemplateName');
            $table->string('TemplateCode');
            $table->string('TemplatePicture');
            $table->integer('TemplateFree');
            $table->string('TemplatePrice');
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
