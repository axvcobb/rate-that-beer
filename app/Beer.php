<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Beer extends Model
{
  public function ratings()
  {
      return $this->hasMany('App\Rating');
  }

  public $timestamps = false;
}
