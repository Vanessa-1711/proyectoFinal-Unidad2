<?php

namespace App\Http\Controllers;

use App\Models\empresa_receptora;
use Illuminate\Http\Request;

class empReceptorasController extends Controller
{
    //
    public function index(){
        //Redireccionando a dashboard
        $empresas = empresa_receptora::all();
    
        // Retornamos la vista 'verProductos' y pasamos los productos como una variable llamada 'productos'
        return view('empresas/empReceptoras')->with('empresas', $empresas);
    }
    public function create()
    {
        // Lógica para mostrar el formulario de creación de una nueva empresa
        return view('empresas/formReceptora');
    }

    public function store(Request $request){
        //Modificamos el Request para que no se repitan los 'username'

        //validar el formulario de registro 
        $this->validate($request,[
            'nombre'=> 'required',
            'direccion'=> 'required',
            'rfc'=> 'required|unique:empresa_receptora',
            'contacto'=> 'required',
            'email'=> 'required|unique:empresa_receptora',
            
        ]);

        //Invocar el modelo User para crear el registro
        empresa_receptora::create([
            'nombre'=> $request->nombre,
            'direccion'=>$request->direccion,
            'rfc'=> $request->rfc,
            'contacto'=> $request->contacto,
            'email'=> $request->email,
        ]);

        //Redireccionando a dashboard
        $empresas = empresa_receptora::all();
    
        // Retornamos la vista 'verProductos' y pasamos los productos como una variable llamada 'productos'
        return view('empresas/empReceptoras')->with('empresas', $empresas);



        
        

    }
}
