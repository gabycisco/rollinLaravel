<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class storeController extends Controller
{
    function listado(){
      $products = Product::all();
    //  dd($product);
      $vac = compact('products');
      return view('store',$vac);
    }
    function detalle ($id){
      $products = Product::find($id);
      $vac = compact('products');
      return view('detail',$vac);
    }
    function listadoAdmin(){
      $products = Product::all();
    //  dd($product);
      $vac = compact('products');
      return view('admin',$vac);
    }
    function detalleAdmin ($id){
      $products = Product::find($id);
      $vac = compact('products');
      return view('edit',$vac);
    }
}
