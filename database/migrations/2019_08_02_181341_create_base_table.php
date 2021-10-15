<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBaseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_base', function (Blueprint $table) {
            $table->bigIncrements('Baseid');
            $table->integer('BaseUserid');
            $table->string('BaseAvatar',5000);
            $table->string('BaseName',50);
            $table->string('BaseFamily',80);
            $table->string('BaseMarital',10);
            $table->string('BaseSolider',40);
            $table->string('BaseBirthdate',10);
            $table->string('BaseWorkTitle',30);
            $table->string('BaseWebsite',200)->nullable()->unique();
            $table->string('BaseEmail',500);
            $table->string('BaseMobile',14);
            $table->string('BaseTel',14);
            $table->string('Status',200);
            $table->string('Lang',20)->nullable();
            $table->integer('Trash',1)->nullable();
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
        Schema::dropIfExists('tbl_base');
    }
}
