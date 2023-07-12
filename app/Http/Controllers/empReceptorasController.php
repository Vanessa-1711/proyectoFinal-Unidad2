<?php

namespace App\Http\Controllers;

use App\Models\empresa_receptora;
use Illuminate\Http\Request;

class empReceptorasController extends Controller
{
    //Constructor para validar usuario autentificado
    public function __construct()
    {
        // Para verificar que el user este autenticado
        // except() es para indicar cuales metodos pueden usarse sin autenticarse
        $this->middleware('auth');
    }
    
    public function index()
    {
        // Redireccionar al dashboard
        $empresas = empresa_receptora::all();

        // Retornar la vista 'empresas/empReceptoras' y pasar las empresas como una variable llamada 'empresas'
        return view('empresaReceptora.empReceptoraTabla')->with('empresas', $empresas);
    }

    public function create()
    {
        // Lógica para mostrar el formulario de creación de una nueva empresa
        return view('empresaReceptora.formReceptora');
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
        return view('empresaReceptora.empReceptoraTabla')->with('empresas', $empresas);
    }

    //eliminar empresa emisora con un id
    public function delete($id_receptora)
    {
        /// Buscar la empresa emisora por su ID
        $empresaReceptora = empresa_receptora::find($id_receptora);
        if ($empresaReceptora->facturas()->exists()) {
            // Obtener las facturas relacionadas
            $facturas = $empresaReceptora->facturas;
             // Eliminar las facturas relacionadas
             foreach ($facturas as $factura) {
                $factura->delete();
            }
        }

        // Eliminar la empresa emisora
        $empresaReceptora->delete();

        // Eliminar la empresa emisora
        $empresaReceptora->delete();
        return back();
    }
}
