<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorkbTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_work_experience_b', function (Blueprint $table) {
            $table->bigIncrements('Workid');
            $table->integer('WorkUserid');
            $table->string('WorkTitleCenter',30);
            $table->string('WorkLevel',30);
            $table->string('WorkCountry',50);
            $table->string('WorkState',50);
            $table->string('WorkCity',30);
            $table->string('WorkStart',10);
            $table->string('WorkEnd',10);
            $table->boolean('WorkBusy');
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
        Schema::dropIfExists('tbl_work_experience_b');
    }
}
