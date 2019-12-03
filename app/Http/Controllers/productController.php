<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class productController extends Controller
{
    function listado(){
      $products = Product::all();
    //  dd($product);
      $vac = compact('products');
      return view('product',$vac);
    }
    function detalle ($id){
      $products = Product::find($id);
      $vac = compact('products');
      return view('detail',$vac);
    }
}
