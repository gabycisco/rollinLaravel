<?php

namespace App\Http\Controllers;

use App\Cart_Product;
use App\User;
use App\Product;
use App\Cart;
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
        //
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


}
