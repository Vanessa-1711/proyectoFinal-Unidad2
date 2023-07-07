<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\empEmisora;

class empEmisorasController extends Controller
{
    //
    public function index()
    {
        // Mostrar la vista de inicio de sesión de usuarios
        $empresas = empEmisora::all();

        // Retornar la vista 'empresas/empEmisora' y pasar las empresas como una variable llamada 'empresas'
        return view('empresas/empEmisora')->with('empresas', $empresas);
    }

    public function create()
    {
        // Lógica para mostrar el formulario de creación de una nueva empresa
        return view('empresas/formEmisora');
    }

    public function store(Request $request)
    {

        // Validar el formulario de registro
        $this->validate($request, [
            'razon' => 'required|unique:empresa_emisora',
            'correo' => 'required|unique:empresa_emisora',
            'rfc' => 'required|unique:empresa_emisora',
        ]);

        // Invocar el modelo empEmisora para crear el registro
        empEmisora::create([
            'razon' => $request->razon,
            'correo' => $request->correo,
            'rfc' => $request->rfc,
        ]);

        // Redireccionar al dashboard
        $empresas = empEmisora::all();

        // Retornar la vista 'empresas/empEmisora' y pasar las empresas como una variable llamada 'empresas'
        return view('empresas/empEmisora')->with('empresas', $empresas);
    }

    // Función para eliminar una empresa de la base de datos
    public function delete($id_emisora)
    {
        // Sentencia para eliminar la empresa
        $eliminarEmisora = empEmisora::find($id_emisora)->delete();

        return back();
    }
}
