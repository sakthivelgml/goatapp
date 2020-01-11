<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class MateStatus extends Model
{
  use SoftDeletes;
  public $table = 'mate_status';
  public $fillable = [
      'id',
      'description',
  ];
}
