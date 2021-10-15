<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Messages extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_massages', function (Blueprint $table) {
            $table->bigIncrements('Massageid');
            $table->integer('MassageUserid');
            $table->string('MassageTitle', 100);
            $table->string('MassageText', 1500);
            $table->tinyInteger('MassageImportant')->nullable();
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
