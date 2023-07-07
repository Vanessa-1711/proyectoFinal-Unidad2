<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loginController extends Controller
{
    //
    public function index(){
        //Mostrar a vista de login de usuarios 
        return view('auth.login');
    }
    //Validar formulario de login
    public function store(Request $request){
        $this->validate($request,[
            //Reglas de validacion 
            'email' => 'required|email',
            'password' => 'required',
        ]);
        //verificar que las credenciales sean correctas
        if(!auth()->attempt($request->only('email', 'password'), $request->remember)){
            //Usar la directiva "with " para llenar los valores de la sesion
            return back()->with('mensaje','Credenciales incorrectas');
        }
        //Credenciales correctas
        return redirect()->route('dashboard', auth()->user()->username);
    }
}
