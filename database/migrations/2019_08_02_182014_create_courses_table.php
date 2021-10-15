<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_courses', function (Blueprint $table) {
            $table->bigIncrements('Coursesid');
            $table->integer('CoursesUserid');
            $table->string('CoursesType', 35)->nullable();
            $table->string('CoursesTitle', 500)->nullable();
            $table->string('CoursesInstitute', 50)->nullable();
            $table->string('CoursesDate', 7)->nullable();
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
        Schema::dropIfExists('tbl_courses');
    }
}
