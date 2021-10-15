<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_articles', function (Blueprint $table) {
            $table->bigIncrements('Articlesid');
            $table->integer('ArticlesUserid');
            $table->string('ArticlesType', 50);
            $table->string('ArticlesTitle', 60);
            $table->string('ArticlesPublisher', 60);
            $table->string('ArticlesLink', 300);
            $table->string('ArticlesDate', 7);
            $table->mediumText('ArticlesDesc');
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
        Schema::dropIfExists('tbl_articles');
    }
}
