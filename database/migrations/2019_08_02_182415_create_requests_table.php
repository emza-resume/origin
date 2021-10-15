<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_requests', function (Blueprint $table) {
            $table->bigIncrements('Requestsid');
            $table->integer('RequestsUserid');
            $table->tinyInteger('RequestsChangeJob');
            $table->tinyInteger('RequestsMigrationStudy');
            $table->tinyInteger('RequestsMigrationJob');
            $table->tinyInteger('RequestStudyHere');
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
        Schema::dropIfExists('tbl_requests');
    }
}
