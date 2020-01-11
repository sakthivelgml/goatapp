<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BreedType extends Model
{
  use SoftDeletes;
  public $table = 'breed_type';
  public $fillable = [
      'id',
      'type',
      'description',
  ];
}
