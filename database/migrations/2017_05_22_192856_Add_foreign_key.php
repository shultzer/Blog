<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKey extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('articles', function ($table) {

        $table->integer('user_id')->foreign()->
        references('id')->
        on('users')->onDelete('cascade');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::table('articles', function (Blueprint $table) {

        $table->dropForeign('articles_user_id_foreign');
        $table->dropColumn('user_id');
      });
    }
}
