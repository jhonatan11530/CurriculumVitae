<?php

namespace App\Http\Controllers;

use App\Models\HojaVida;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use LDAP\Result;

class ExportController extends Controller
{
    public function ShowPdf($id)
    {
        $HojaVida = HojaVida::find($id);
        $pdf = PDF::loadView('PlantillaCv.index',compact('HojaVida'));
        return $pdf->stream();
    }
    public function PdfExport()
    {
        $pdf = PDF::loadView('PlantillaCv.index');
        return $pdf->download('Plantilla Hoja de vida.pdf');
    }
}
