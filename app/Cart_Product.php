<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart_Product extends Model
{
    public $table = "cart_product";
    public $primaryKey = "id";
//    public $timestamps = false;
    public $guarded = [];


       /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'cart_id','id'
    ];
}