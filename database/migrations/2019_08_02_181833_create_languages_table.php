<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLanguagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_languages', function (Blueprint $table) {
            $table->bigIncrements('Langid');
            $table->integer('LangUserid');
            $table->string('LangName',20);
            $table->tinyInteger('LangWritingskills');
            $table->tinyInteger('LangReadingskills');
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
        Schema::dropIfExists('tbl_languages');
    }
}
