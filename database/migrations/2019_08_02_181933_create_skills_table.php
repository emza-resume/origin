<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSkillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_skills', function (Blueprint $table) {
            $table->bigIncrements('Skillsid');
            $table->integer('SkillsUserid');
            $table->string('SkillsName', 1500)->nullable();
            $table->tinyInteger('SkillsLevel')->nullable();
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
        Schema::dropIfExists('tbl_skills');
    }
}
