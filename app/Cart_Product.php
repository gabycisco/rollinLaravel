<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart_Product extends Model
{
    public $table = "cart_product";
  //  public function lista(){
  //    return Cart_Product::all();
    //  $Cart_Product = Cart_Product::all();
    //  $vac = compact('Cart_Product');
    //  return $vac;\
    public function producto(){
      return $this->belongsTo("App\Product","product_id");

    }
    public function carrito(){
      return $this->hasMany("App\Cart","id");

    }
}
