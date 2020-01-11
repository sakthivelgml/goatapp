<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class GoatWeight extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('goat_weight', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('tagid')->unsigned();
          $table->integer('weight');
          $table->string('remarks')->nullable();
          $table->timestamps();
          $table->softDeletes();
      });
      Schema::table('goat_weight', function (Blueprint $table) {
          $table->foreign('tagid')->references('id')->on('goat_info');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
