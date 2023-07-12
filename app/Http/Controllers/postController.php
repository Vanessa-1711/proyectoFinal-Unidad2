<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class postController extends Controller
{
    //Constructor para validar usuario autentificado
    public function __construct()
    {
        // Para verificar que el user este autenticado
        $this->middleware('auth');
    }

    public function index(){
        //Muestre la vista de dashboard 
        return view('dashboard');
    }
}
