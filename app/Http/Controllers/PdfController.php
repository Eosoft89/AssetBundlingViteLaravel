<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class PdfController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function download()
    {
        $data = 'Eric';
        $pdf = Pdf::setOption(['dpi' => 150, 'defaultFont' => 'arial'])->setPaper('a4', 'landscape')->loadView('pdf.example', ['data' => $data]); //se pueden aplicar opciones personalizadas, o definir opciones compartidas en config/dompdf.php
        // $pdf->save('/my_file.PDF'); para guardar el pdf antes de descargarlo        
        return $pdf->download('MyExample.pdf');
    }
}
