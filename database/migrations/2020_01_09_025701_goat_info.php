<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class GoatInfo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('goat_info', function (Blueprint $table) {
          $table->increments('id');
          $table->string('tagid');
          $table->enum('gender', ['male', 'female']);
          $table->date('dob')->nullable();
          $table->string('adopt')->nullable();
          $table->integer('breedtype')->unsigned();
          $table->timestamps();
          $table->softDeletes();
      });
      Schema::table('goat_info', function (Blueprint $table) {
          $table->foreign('breedtype')->references('id')->on('breed_type');
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
