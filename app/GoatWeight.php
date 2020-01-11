<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class GoatWeight extends Model
{
  use SoftDeletes;
  public $table = 'goat_weight';
  public $fillable = [
      'id',
      'tagid',
      'weight',
      'remarks',
  ];
}
