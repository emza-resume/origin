<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBasebTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_base_b', function (Blueprint $table) {
            $table->bigIncrements('Baseid');
            $table->integer('BaseUserid');
            $table->string('BaseJob',80);
            $table->string('BaseSex',10);
            $table->string('BaseCountry',100);
            $table->string('BaseState',100);
            $table->string('BaseCity',100);
            $table->string('BaseAddress',500);
            $table->string('BaseSummary',500);
            $table->string('BaseSocial',500);
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
        Schema::dropIfExists('tbl_base_b');
    }
}
