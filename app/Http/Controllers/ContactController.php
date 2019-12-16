<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function create (Request $formulario)
    {

      $reglas=[
        'name'=>"string|required|min:5",
        'email'=>"e-mail|required|min:5",
        'mensaje'=>"string|min:5|required",
        

      ];

      $mensajes=[
        'string'=> "Sólo puede ingresar texto",
        'required'=> "Este campo es obligatorio",
        'min'=> "Este campo requiere al menos 5 carateres",
        'e_mail'=>"El formato email no es válido",
      ];
      $this->validate($formulario, $reglas,$mensajes);

      $NewContact = new Contact();
      $NewContact->name = $formulario["name"];
      $NewContact->email = $formulario["email"];
      $NewContact->message = $formulario["mensaje"];

      $NewContact->save();
      return redirect("graciasContacto");
    }

    function listado (){
      $contact = Contact::all();
      $vac = compact('contact');
      return view('verListaContactos',$vac);
    }

}
