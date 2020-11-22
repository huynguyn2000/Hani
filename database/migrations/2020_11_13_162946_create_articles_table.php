<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('a_name')->nullable();
            $table->string('a_slug')->index();
            $table->string('a_title_seo')->nullable();
            $table->longText('a_content')->nullable();
            $table->string('a_description')->nullable();
            $table->string('a_avatar')->nullable();
            $table->string('a_description_seo')->nullable();
//            $table->dateTime('created_at', 0)->useCurrent();
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
        Schema::dropIfExists('article');
    }
}
