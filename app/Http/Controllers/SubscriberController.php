<?php

namespace App\Http\Controllers;

use App\Subscriber;
use Illuminate\Http\Request;

class SubscriberController extends Controller
{
    public function create (Request $formulario)
    {


      $NewSubscriber = new Subscriber();
      $NewSubscriber->email = $formulario["email"];

      $NewSubscriber->save();
      return redirect("/");
    }
}
