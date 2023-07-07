<?php

namespace App\Http\Controllers;

use App\Models\empresa_receptora;
use Illuminate\Http\Request;

class empReceptorasController extends Controller
{
    //
    public function index()
    {
        // Redireccionar al dashboard
        $empresas = empresa_receptora::all();

        // Retornar la vista 'empresas/empReceptoras' y pasar las empresas como una variable llamada 'empresas'
        return view('empresas/empReceptoras')->with('empresas', $empresas);
    }

    public function create()
    {
        // Lógica para mostrar el formulario de creación de una nueva empresa
        return view('empresas/formReceptora');
    }

    public function store(Request $request)
    {
        // Validar el formulario de registro 
        $this->validate($request, [
            'nombre' => 'required',
            'direccion' => 'required',
            'rfc' => 'required|unique:empresa_receptora',
            'contacto' => 'required',
            'email' => 'required|unique:empresa_receptora',
        ]);

        // Invocar el modelo empresa_receptora para crear el registro
        empresa_receptora::create([
            'nombre' => $request->nombre,
            'direccion' => $request->direccion,
            'rfc' => $request->rfc,
            'contacto' => $request->contacto,
            'email' => $request->email,
        ]);

        // Redireccionar al dashboard
        $empresas = empresa_receptora::all();

        // Retornar la vista 'empresas/empReceptoras' y pasar las empresas como una variable llamada 'empresas'
        return view('empresas/empReceptoras')->with('empresas', $empresas);
    }
}
