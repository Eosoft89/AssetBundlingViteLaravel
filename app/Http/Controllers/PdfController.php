<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class PdfController extends Controller
{
    public function index()
    {
        return view('pdf.example');
    }

    public function download()
    {
        $pdf = Pdf::loadView('pdf.example');
        return $pdf->download('MyExample.pdf');
    }
}
