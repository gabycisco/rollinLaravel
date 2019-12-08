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
       /*  $request->validate([
            'avatar' => 'file',
        ]);

        $user = Auth::user();

        $avatarName = $user->id.'_avatar'.time().'.'.request()->avatar->getClientOriginalExtension();

        $request->avatar->store('public');

        $user->avatar = $avatarName;
        $user->save(); */

        $user->name = $request->name; 
        $user->save();
        return back();

    }

    

   /*  function update_avatar(Request $request){

        $request->validate([
            'avatar' => 'file',
        ]);

        $user = Auth::user();

        $avatarName = $user->id.'_avatar'.time().'.'.request()->avatar->getClientOriginalExtension();

        $request->avatar->store('public');

        $user->avatar = $avatarName;
        $user->save();

    } */

    function tomarDatos($id){
        $users=User::find($id);
        $vac=compact('users');
        return view('editarPerfil',$vac);   
        
    }
    
    

    

}

