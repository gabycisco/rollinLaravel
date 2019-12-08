<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    function verUsuario($id){
        $users=User::find($id);
        $vac=compact('users');
        return view('perfil',$vac);
    }

    function modificarDatos($id){
        $users=User::find($id);
        $vac=compact('users');
        return view('editarPerfil',$vac);   
    }
    
    

}

