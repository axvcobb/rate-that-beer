<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Beer extends Model
{

  protected $fillable = ['name', 'brewery', 'style', 'abv'];

  public function ratings()
  {
      return $this->hasMany('App\Rating');
  }

  public $timestamps = false;

}
