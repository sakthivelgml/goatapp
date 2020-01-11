<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MatingDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('mating_details', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('mate_reference')->unsigned();
          $table->integer('goat_id')->unsigned();
          $table->timestamps();
          $table->softDeletes();
      });
      Schema::table('mating_details', function (Blueprint $table) {
          $table->foreign('mate_reference')->references('id')->on('mating_info');
      });
      Schema::table('mating_details', function (Blueprint $table) {
          $table->foreign('goat_id')->references('id')->on('goat_info');
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
