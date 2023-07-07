<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class logoutController extends Controller
{
    //
    public function store(){
        //Cerrar sesión con el helper auth implementando el metodo logout
        auth()->logout();
        //Enviar a la vista del login 
        return redirect()->route('welcome');
    }
}
