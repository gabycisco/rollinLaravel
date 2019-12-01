<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class storeController extends Controller
{
    function listado(){
      $product = Product::all();
    //  dd($product);
      $vac = compact('product');
      return view('store',$vac);
    }
}
