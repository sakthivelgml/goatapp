<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MatingInfo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('mating_info', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('male_tagid')->unsigned();
          $table->integer('female_tagid')->unsigned();
          $table->date('mate_date');
          $table->integer('mate_stat')->unsigned();
          $table->timestamps();
          $table->softDeletes();
      });
      Schema::table('mating_info', function (Blueprint $table) {
          $table->foreign('mate_stat')->references('id')->on('mate_status');
      });
      Schema::table('mating_info', function (Blueprint $table) {
          $table->foreign('male_tagid')->references('id')->on('goat_info');
      });
      Schema::table('mating_info', function (Blueprint $table) {
          $table->foreign('female_tagid')->references('id')->on('goat_info');
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
