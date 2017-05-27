<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogTables extends Migration
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
      $table->string('title', 140);
      $table->string('slug');
      $table->mediumText('short_description');
      $table->text('body');
      $table->timestamps();
    });

    Schema::create('tags', function (Blueprint $table) {
      $table->increments('id');
      $table->string('name');
      $table->string('slug');
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('articles');
    Schema::dropIfExists('tags');
  }
}