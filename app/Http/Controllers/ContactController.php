<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function create (Request $formulario)
    {


      $NewContact = new Contact();
      $NewContact->name = $formulario["name"];
      $NewContact->email = $formulario["email"];
      $NewContact->message = $formulario["mensaje"];

      $NewContact->save();
      return redirect("graciasContacto");
    }
}
