<?php

namespace App\Http\Controllers;

use App\Cart_Product;
use App\User;
use App\Product;
use App\Cart;
use App\Sale;
use Auth;
use Illuminate\Http\Request;
use Session;


class CartProductController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $formulario)
    {

        $user_id=Auth::user();
        $carritoId = Cart::where('user_id','=',$user_id["id"])->get();
        // dd($carritoId);

        $NewProduct = new Cart_Product();


        // $NewProduct->cart_id= $carritoId["id"];
        $NewProduct->cart_id= "1";
        $NewProduct->product_id=$formulario["product_id"];
        $NewProduct->quantity=$formulario["quantity"];
        $NewProduct->price=$formulario["price"];


        $NewProduct->save();

        return redirect("store");
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cart_Product  $cart_Product
     * @return \Illuminate\Http\Response
     */
    public function show(Cart_Product $cart_Product)
    {
      $userName=Auth::user()->id;
      //dd($userName);
    //  $cartOwner = Cart::find(2);
    //  dd($cartOwner);
      //REEMPLAZO
      $cartOwner = Cart::where([
                ['user_id', '=', "$userName"],
                ['status', '=', 1]
            ])->get();
    if( $cartOwner != '[]'){
      $idCarrito = $cartOwner[0]->id;
      $productosEnCarrito = Cart_Product::where([
                ['cart_id', '=', "$idCarrito"],
                //['status', '=', 1]
            ])->get();
            $vac = compact('formulario','productosEnCarrito','cartOwner');

              return view('store/mochila', $vac);
    } else {
      return view('/home');
    }



    //dd($productosEnCarrito);
      //dd($cartOwner[0]->status == 1);

      //$cartOwner = $cartOwner[0];
      //$total = $cartOwner->products;

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cart_Product  $cart_Product
     * @return \Illuminate\Http\Response
     */
    public function edit(Cart_Product $cart_Product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cart_Product  $cart_Product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cart_Product $cart_Product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cart_Product  $cart_Product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cart_Product $cart_Product)
    {
        //
    }

    public function add(Request $formulario){

      $userName=Auth::user()->id;

    // $cartOwner = Cart::find($userName);

      // $cartOwner = Cart::where([
      //           ['user_id', '=', "$userName"],
      //           ['status', '=', 1]
      //       ])->get();

//  dd($cartOwnerd);
//$cartOwner = $cartOwner[0];
//  dd($cartOwner !== null);
      $cartOwner = Cart::where([
                ['user_id', '=', "$userName"],
                ['status', '=', 1]
            ])->get();
      //dd($cartOwner[0] != "[]");
 //dd($activeCart[0]->status );
//dd($activeCart[]);
      //dd($activeCart != "[]");
      if($cartOwner != "[]"){

        $NewProduct = new Cart_Product();

        $NewProduct->cart_id = $cartOwner[0]->id;


        $NewProduct->product_id=$formulario["product_id"];
        $NewProduct->quantity=$formulario["quantity"];
        $NewProduct->price=$formulario["price"];

        $cartOwner[0]->amount = $cartOwner[0]->amount + $NewProduct->price ;

        $NewProduct->save();
        $cartOwner[0]->save();

      } else {



        $newCart = new Cart;
        $newCart->user_id = Auth::user()->id;
        $newCart->status = 1;
        $newCart->amount = 0;
        $newCart->save();

        $cartOwner = Cart::where([
                  ['user_id', '=', "$userName"],
                  ['status', '=', 1]
              ])->get();
        $NewProduct = new Cart_Product();
        $NewProduct->cart_id = $cartOwner[0]->id;
        $cartOwner[0]->amount = $cartOwner[0]->amount + $formulario["price"] ;
        $NewProduct->product_id=$formulario["product_id"];
        $NewProduct->quantity=$formulario["quantity"];
        $NewProduct->price=$formulario["price"];


        $NewProduct->save();
        $cartOwner[0]->save();

        $total = $cartOwner[0]->products;
        $vac = compact('formulario','total');

        return view('store/test',$vac);

      }


      $total = $cartOwner[0]->products;
      $vac = compact('formulario','total');

      return view('store/test',$vac);

    }

    public function checkout()
    {
      $venta = new Sale;
      $userName = Auth::user()->id;
      //$cart = Cart::find($userName);
      $cart = Cart::where([
                ['user_id', '=', "$userName"],
                ['status', '=', 1]
            ])->get();
      //dd($cartOwner[0]);

      $cart = $cart[0];

      $venta->cart_id =  $cart->id;
      $venta->save();

      $activeCart = Cart::where([
                ['user_id', '=', "$userName"],
                ['status', '=', 1]
            ])->get();
      $cart->status = 0;

      $cart->save();



        return view('/store/graciasCompra');
    }
    
    function listado (){
      $compras = Cart_Product::all();
      $vac = compact('compras');
      return view('verCompras',$vac);
    }
}
