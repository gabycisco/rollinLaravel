<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class UserController extends Controller
{
    function verUsuario($id){
        $users=User::find($id);
        $vac=compact('users');
        return view('perfil',$vac);
    }


    function modificarDatos(Request $request){


        $reglas=[
            'name'=>"string|required|min:3",
            'surname'=>"string|required|min:3",
            'email'=>"E-Mail|required|min:5",
            'avatar'=>"image",

          ];
    
          $mensajes=[
            'string'=> "Sólo puede ingresar texto",
            'required'=> "Este campo es obligatorio",
            'min'=> "Este campo requiere al menos 3 carateres",
            'unique'=> "Este nombre ya fue utilizado",
            'image'=>"Sólo puede subir archivos .jpg, .jpeg o .png",
            'e-mail'=>"El formato email no es válido",
          ];
          $this->validate($request, $reglas,$mensajes);


        $user = Auth::user();
        $id = Auth::user()->id;

        if($request->hasfile('avatar')){

            $request->validate([
            'avatar' => 'file',
            ]);

        $avatarName = $request->file('avatar')->store('public');
        $user->avatar = basename($avatarName);
    }

        $user->name = $request["name"];
        $user->surname = $request["surname"];
        $user->email =$request["email"];
        $user->address =$request["address"];
        $user->phone = $request["phone"];
        $user->provincia=$request["provincia"];

        $user->save();

        return redirect('perfil/'.$id);

    }


    function tomarDatos($id){
        $users=User::find($id);
        $vac=compact('users');
        return view('editarPerfil',$vac);

    }

    public function perfilDestroy(Request $req)
    {
      $id=$req["id"];
      $user = User::find($id);
      
        $user->delete();
        return redirect("/");
    }

}
