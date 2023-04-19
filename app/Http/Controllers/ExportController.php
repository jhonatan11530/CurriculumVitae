<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class ExportController extends Controller
{
    public function ShowPdf()
    {
        $pdf = PDF::loadView('PlantillaCv.index');
        return $pdf->stream();
    }
    public function PdfExport()
    {
        $pdf = PDF::loadView('PlantillaCv.index');
        return $pdf->download('Plantilla Hoja de vida.pdf');
    }
}
