<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class GoatInfo extends Model
{
  protected  $primaryKey = 'tagid';
  public $incrementing = false;
  use SoftDeletes;
  public $table = 'goat_info';
  public $fillable = [
      'id',
      'tagid',
      'gender',
      'dob',
      'adopt',
      'gender',
  ];
}
