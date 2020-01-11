<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class MatingDetails extends Model
{
  use SoftDeletes;
  public $table = 'mating_details';
  public $fillable = [
      'id',
      'mate_reference',
      'goat_id',
  ];
}
