<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEducationalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_educational', function (Blueprint $table) {
            $table->bigIncrements('Eduid');
            $table->integer('EduUserid');
            $table->string('EduSection',80);
            $table->string('EduMajor',80);
            $table->string('EduOrientation',80);
            $table->string('EduLnstitute',80);
            $table->string('EduAverage',5);
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
        Schema::dropIfExists('tbl_educational');
    }
}
