<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
  //STORE
    function listado(){
      $products = Product::paginate(15);
      //  dd($product);
      $vac = compact('products');
      return view('store/index',$vac);
    }

    function detalle ($id){
      $products = Product::find($id);
      $vac = compact('products');
      return view('store/detail',$vac);
    }
    



    //ADMINISTRADOR DE ARTÍCULOS
    function adminIndex(){
      $products = Product::paginate(2);
      $vac = compact('products');

      return view('adminProducts/index',$vac);
    }
    function adminDetail ($id){
      $product = Product::find($id);
      $vac = compact('product');
      return view('adminProducts/detail',$vac);
    }

    function adminEdit ($id){
      $product = Product::find($id);
      $vac = compact('product');
      return view('adminProducts/edit',$vac);
    }

    public function AdminDestroy(Request $formulario){
      $id=$formulario["id"];
      $product = Product::find($id);

      $product->delete();
      return redirect("admin");
    }

    public function create (Request $formulario){

      $reglas=[
        'name'=>"string|required|min:3|unique:products,name",
        'brand_id'=>"string|required|min:5",
        'description'=>"string|required|min:5",
        'price'=>"numeric|required|min:0",
        'imgProd'=>"image|required",
      ];

      $mensajes=[
        'string'=> "Sólo puede ingresar texto",
        'required'=> "Este campo es obligatorio",
        'min'=> "Este campo requiere al menos 5 carateres",
        'unique'=> "Este nombre ya fue utilizado",
        'numeric'=>"Sólo puede ingresar números",
        'image'=>"Sólo puede subir archivos .jpg o .png",
      ];
      $this->validate($formulario, $reglas,$mensajes);

      $path = $formulario -> file("imgProd") -> store("public");
      $nombreArchivo=basename($path);

      $NewProduct = new Product();
      $NewProduct->img = $nombreArchivo;
      $NewProduct->name = $formulario["name"];
      $NewProduct->description = $formulario["description"];
      $NewProduct->price = $formulario["price"];
      $NewProduct->brand = $formulario["brand"];
      $NewProduct->save();

      return redirect("admin");
    }

    public function update (Request $formulario){
      $id=$formulario["id"];
      $product = Product::find($id);

      if($formulario->hasfile('imgProd')){

        $formulario->validate([
        'imgProd' => 'file',
        ]);
        $path = $formulario -> file("imgProd") -> store("public");
        $nombreArchivo=basename($path);
        $product->img = $nombreArchivo;
      }

      $product->name = $formulario["name"];
      $product->description = $formulario["description"];
      $product->price = $formulario["price"];
      $product->brand_id = $formulario["brand_id"];
      $product->save();

      $vac = compact('product');
      return view('adminProducts/detail',$vac);
    }
    public function agregarAlCarrito(Request $datoProducto, $id){
      $producto = Producto::find($id);
    }
    public function addCart($id){
      return view('mochilla',$id);
    }

}
