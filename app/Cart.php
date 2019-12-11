<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    public function usuario(){
      return $this->belongsTo("App\User","user_id");
    }
}
