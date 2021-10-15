<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEducationalbTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_educational_b', function (Blueprint $table) {
            $table->bigIncrements('Eduid');
            $table->integer('EduUserid');
            $table->string('EduType',80);
            $table->string('EduCountry',80);
            $table->string('EduState',80);
            $table->string('EduCity',80);
            $table->string('EduEnter',20);
            $table->string('EduGraduation',20);
            $table->boolean('EduStudy');
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
        Schema::dropIfExists('tbl_educational_b');
    }
}
