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

        $user = Auth::user();

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

        $user->save();

        return back();

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
      Auth::logout();
        $user->delete();
        return redirect("/home");
    }

}
