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
    function adminIndex(){
      $products = Product::all();
      $vac = compact('products');

      return view('adminProducts/index',$vac);
    }
    function adminEdit ($id){
      $product = Product::find($id);
      $vac = compact('product');
      return view('adminProducts/edit',$vac);
    }

    public function AdminDestroy(Request $formulario)
    {
      $id=$formulario["id"];
      $product = Product::find($id);

      $product->delete();
      return redirect("admin");
    }

    public function create (Request $formulario)
    {


      $NewProduct = new Product();
      $NewProduct->name = $formulario["name"];
      $NewProduct->description = $formulario["description"];
      $NewProduct->price = $formulario["price"];
      $NewProduct->brand_id = $formulario["brand_id"];

      $NewProduct->save();
      return redirect("admin");
    }
}
