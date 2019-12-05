<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
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



    //Administrador de Artículos
    function indexAdmin(){
      $products = Product::all();
      $vac = compact('products');
      return view('adminProducts',$vac);
    }
    function showAdmin ($id){
      $product = Product::find($id);
      $vac = compact('product');
      return view('adminProduct',$vac);
    }

    public function destroy(Request $formulario)
    {
      $id=$formulario["id"];
      $product = Product::find($id);
      $product->delete();
      return redirect("/adminProducts");
    }
}
