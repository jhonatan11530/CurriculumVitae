<?php

namespace App\Http\Controllers;

use PDF;
use App\Models\HojaVida;
use Illuminate\Http\Request;

class ExportController extends Controller
{
    public function ShowPdf($id)
    {

        $HojaVida = HojaVida::find($id);
        $Habilidades = '';
        $Habilidades = explode("%/-\%", $HojaVida->Habilidades);
        //
        $pdf = PDF::loadView('PlantillaCv.index',compact('HojaVida','Habilidades'));

        return $pdf->stream();
    }
    public function PdfExport()
    {
        $pdf = PDF::loadView('PlantillaCv.index');
        return $pdf->download('Plantilla Hoja de vida.pdf');
    }
}
