<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorkTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_work_experience', function (Blueprint $table) {
            $table->bigIncrements('Workid');
            $table->integer('WorkUserid');
            $table->string('WorkPost',100)->nullable();
            $table->string('WorkCenter',50)->nullable();
            $table->string('WorkTitleCenter',50)->nullable();
            $table->string('WorkCooperation',20)->nullable();
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
        Schema::dropIfExists('tbl_work_experience');
    }
}
