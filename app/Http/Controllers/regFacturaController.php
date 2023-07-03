<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\empEmisora;

class regFacturaController extends Controller
{
    //
    public function index(){
        $empresaEmisora = empEmisora::count();
        if ($empresaEmisora === 0) {
            // Redirigir o mostrar un mensaje de error si no hay empresas emisoras registradas
            return redirect()->back()->with('error', 'No hay empresas emisoras registradas en la base de datos.');
        }
        
        return view('empresas/regFacturas');
    }

    public function create()
    {
        // Lógica para mostrar el formulario de creación de una nueva empresa
        return view('empresas/formFactura');
    }

    

    
}
