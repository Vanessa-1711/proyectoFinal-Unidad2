<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Factura;
use App\Models\empEmisora;
use App\Models\empresa_receptora;

class portalController extends Controller
{
    // Retorna la vista del formulario de búsqueda
    public function index()
    {
        // Obtiene todas las empresas emisoras
        $emisoras = empEmisora::all();
        // Obtiene todas las empresas receptoras
        $receptoras = empresa_receptora::all();
        // Retornar la vista para buscar facturas
        return view('portal.portal', compact('emisoras', 'receptoras'));
    }

    // Muestra la lista de facturas consultadas según lo recibido del formulario
    public function lista(Request $request)
    {
        // Obtiene las facturas de la sesión flash
        $facturas = $request->session()->get('facturas');
        // Muestra los datos en la vista
        return view('portal.verResultados', compact('facturas'));
    }

    // Busca en la base de datos los valores de la factura
    public function buscar(Request $request)
    {
        // Valida los datos requeridos
        $request->validate([
            'emisora_id' => 'required',
            'receptora_id' => 'required',
            'rfc' => 'required',
        ]);

        // Busca si el RFC coincide con el ID de la empresa receptora
        $receptora = empresa_receptora::where('id', $request->receptora_id)
            ->where('rfc', $request->rfc)
            ->first();

        if ($receptora) {
            // Agrega la empresa emisora y receptora como condiciones de consulta
            $query = Factura::where('empresa_emisora_id', $request->emisora_id)
                ->where('empresa_receptora_id', $request->receptora_id);

            // Si el folio está lleno, lo agrega como condición
            if ($request->filled('folio')) {
                $query->where('folio', $request->folio);
            }

            // Ejecuta la consulta
            $facturas = $query->get();

            // Si se encontraron facturas, redirige al listado
            if ($facturas->count() > 0) {
                return redirect()->route('portalTabla')->with('facturas', $facturas);
            } else {
                // Si no se encontraron facturas en la base de datos, muestra un mensaje
                return redirect()->route('portalIndex')->with('no_encontrada', 'Los datos ingresados no corresponden a ninguna factura.');
            }
        } else {
            // Si el RFC y el nombre de la empresa receptora no coinciden, muestra un mensaje
            return redirect()->route('portalIndex')->with('no_encontrada', 'El RFC no coincide con la empresa receptora seleccionada.');
        }
    }

    public function download($file)
    {
        $pathFile = public_path('uploads') . '/' . $file;
        return response()->download($pathFile);
    }
}
