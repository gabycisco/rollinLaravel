<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    public $table = "sale";
    public $primaryKey = "id";
//    public $timestamps = false;
    public $guarded = [];

    public function carts(){
        return $this->belongsTo("App\Cart","cart_id");
    }
}
