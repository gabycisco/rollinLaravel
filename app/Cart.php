<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Cart extends Model
{
    public $table = "carts";
    public $primaryKey = "id";
    public $producto = [];
    public $value;

//    public $timestamps = false;
    public $guarded = [];

    public function usuario(){
        return $this->belongsTo("App\User","id");

    }

    public function products(){
        return $this->belongsToMany("App\Product", "cart_product","cart_id", "product_id");
    }

    public function sale(){
        return $this->belongsTo("App\Sale","cart_id");
    }

       /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
   protected $fillable = [
       'id'
   ];
   public function agregarUnProducto($valor){
     $this->producto[] = $valor ;
   }

}
