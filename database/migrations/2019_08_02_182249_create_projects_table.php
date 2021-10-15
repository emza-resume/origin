<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_projects', function (Blueprint $table) {
            $table->bigIncrements('Projectid');
            $table->integer('ProjectUserid');
            $table->string('ProjectTitle', 100);
            $table->string('ProjectDate',10)->nullable();
            $table->string('ProjectEmployer', 100)->nullable();
            $table->string('ProjectApplicant', 100)->nullable();
            $table->string('ProjectLink', 900)->nullable();
            $table->mediumText('ProjectDesc')->nullable();
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
        Schema::dropIfExists('tbl_projects');
    }
}
