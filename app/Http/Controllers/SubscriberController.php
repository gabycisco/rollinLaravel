<?php

namespace App\Http\Controllers;

use App\Subscriber;
use Illuminate\Http\Request;

class SubscriberController extends Controller
{
    public function create (Request $formulario)
    {

      
      $reglas=[
        'email'=>"e-mail|required|min:5", 

      ];

      $mensajes=[
        'required'=> "Este campo es obligatorio",
        'min'=> "Este campo requiere al menos 5 carateres",
        'e-mail'=>"El formato email no es válido",
      ];
      
      $this->validate($formulario, $reglas,$mensajes);

      $NewSubscriber = new Subscriber();
      $NewSubscriber->email = $formulario["email"];

      $NewSubscriber->save();
      return redirect("/");
    }


    function listado (){
      $subscriber = Subscriber::all();
      $vac = compact('subscriber');
      return view('verListaNL',$vac);
    }
}
