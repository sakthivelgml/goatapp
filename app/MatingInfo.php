<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class MatingInfo extends Model
{
  use SoftDeletes;
  public $table = 'mating_info';
  public $fillable = [
      'id',
      'male_tagid',
      'female_tagid',
      'mate_date',
      'mate_stat',
  ];
}
