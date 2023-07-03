<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\empEmisora;

class empEmisorasController extends Controller
{
    //
    public function index(){
        //Mostrar a vista de login de usuarios 
        $empresas = empEmisora::all();
    
        // Retornamos la vista 'verProductos' y pasamos los productos como una variable llamada 'productos'
        return view('empresas/empEmisora')->with('empresas', $empresas);
    }

    public function create()
    {
        // Lógica para mostrar el formulario de creación de una nueva empresa
        return view('empresas/formEmisora');
    }

    public function store(Request $request){
        //Modificamos el Request para que no se repitan los 'username'

        //validar el formulario de registro 
        $this->validate($request,[
            'razon'=> 'required|unique:empresa_emisora',
            'correo'=> 'required|unique:empresa_emisora',
            'rfc'=> 'required|unique:empresa_emisora',
        ]);

        //Invocar el modelo User para crear el registro
        empEmisora::create([
            'razon'=> $request->razon_social,
            'correo'=>$request->correo,
            'rfc'=> $request->rfc,
        ]);

        //Redireccionando a dashboard
        $empresas = empEmisora::all();
    
        // Retornamos la vista 'verProductos' y pasamos los productos como una variable llamada 'productos'
        return view('empresas/empEmisora')->with('empresas', $empresas);



        
        

    }
}
