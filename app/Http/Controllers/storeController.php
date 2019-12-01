<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class storeController extends Controller
{
    function listado(){
      $products = Product::all();
      $vac = compact('product');
      return view('store',$vac);
    }
}
