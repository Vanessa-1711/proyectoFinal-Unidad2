<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class archivosController extends Controller
{
    // Almacena un archivo PDF
    public function storePDF(Request $request)
    {
        $pdf = $request->file('file');
        // Obtener el nombre original del archivo
        $nombrepdf = $pdf->getClientOriginalName() . '.' . $pdf->extension();
        // Obtener la ruta donde queremos almacenar el archivo
        $pdfPath = public_path('uploads') . '/' . $nombrepdf;
        // Copiar el archivo a la ruta especificada
        copy($pdf, $pdfPath);

        return response()->json([
            'pdf' => $nombrepdf
        ]);
    }

    // Almacena un archivo XML
    public function storeXML(Request $request)
    {
        $xml = $request->file('file');
        // Obtener el nombre original del archivo
        $nombrexml = $xml->getClientOriginalName() . '.' . $xml->extension();
        // Obtener la ruta donde queremos almacenar el archivo
        $xmlPath = public_path('uploads') . '/' . $nombrexml;
        // Copiar el archivo a la ruta especificada
        copy($xml, $xmlPath);

        return response()->json([
            'xml' => $nombrexml
        ]);
    }
}
