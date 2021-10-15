<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLanguagesbTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_languages_b', function (Blueprint $table) {
            $table->bigIncrements('Langid');
            $table->integer('LangUserid');
            $table->tinyInteger('LangListeningskills');
            $table->tinyInteger('LangTalkingskills');
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
        Schema::dropIfExists('tbl_languages_b');
    }
}
