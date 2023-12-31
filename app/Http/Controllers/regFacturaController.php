<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\empEmisora;
use App\Models\empresa_receptora;
use App\Models\Factura;

class regFacturaController extends Controller
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
        $facturas = Factura::with('emisora', 'receptora')->get();

        // Retornamos la vista 'empresas.regFacturas' y pasamos las facturas como una variable llamada 'facturas'
        return view('facturas.facturasTabla')->with('facturas', $facturas);
    }

    public function create()
    {
        $emisoras = empEmisora::all();
        $receptoras = empresa_receptora::all();
        // Retornar la vista para crear facturas y pasar las empresas emisoras y receptoras como variables
        return view('facturas.formFactura', compact('emisoras', 'receptoras'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'emisora_id' => 'required',
            'receptora_id' => 'required',
            'folio' => 'required|unique:facturas|min:5',
            'pdf' => 'required',
            'xml' => 'required',
        ]);

        Factura::create([
            'empresa_emisora_id' => $request->emisora_id,
            'empresa_receptora_id' => $request->receptora_id,
            'folio' => $request->folio,
            'pdf' => $request->pdf,
            'xml' => $request->xml,
        ]);

        // Redireccionando a la vista 'empresas.regFacturas' y pasando todas las facturas como variable
        $facturas = Factura::all();
        return view('facturas.facturasTabla')->with('facturas', $facturas);
    }

    public function download($file)
    {
        $pathFile = public_path('uploads') . '/' . $file;
        return response()->download($pathFile);
    }

    // Funcion para eliminar una factura de la base de datos
    public function delete($id_factura)
    {
        // Sentencia para eliminar la factura
        $eliminarFactura = Factura::find($id_factura)->delete();

        return back();
    }
}
