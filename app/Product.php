<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
      public $table = "products";
      public $primaryKey = "id";
//    public $timestamps = false;
      public $guarded = [];
      
      public function carts(){
            return $this->belongsToMany("App\Cart", "cart_product", "producto_id", "cart_id");
        }
}
