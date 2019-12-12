<?php

namespace App\Http\Controllers;

use App\Cart;
use Illuminate\Http\Request;

use App\User;
use Auth;
use Session;

use App\Cart_Product;


class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $carts = new Cart;
      $user_id=Auth::user()->id;

        //dd($carts->usuario);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $formulario)
    {    
        
        $user_id=Auth::user();
        $carritoID = Cart::where('user_id','=',$user_id["id"])->get();

        $NewProduct = new Cart_Product();      
        
        $NewProduct->cart_id= $carritoID["id"];
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
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function show(Cart $cart)
    {

        $cart = Cart::all();
        $product = Cart_Product::all();
      //  $productos = Cart_Product::all();
        //$seleccion= $productos->lista;



        $vac = compact('cart','product');
        //dd($cart);

        return view('store/cart', $vac);
      //  if()$usuario){

        //}
        //return view('cart');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function edit(Cart $cart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cart $cart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cart $cart)
    {
        //
    }

     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add(Reguest $req)
    {

    }


}
