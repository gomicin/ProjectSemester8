<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class user_profile extends Model
{
  public function user()
  {
      return $this->belongsTo('App\User');
  }
}
