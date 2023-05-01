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

        $Database = '';
        $Database = explode("%/-\%", $HojaVida->Database);

        $ReferenceFamily = '';
        $ReferenceFamily = explode("%/-\%", $HojaVida->ReferenceFamily);

        $ReferencePerson = '';
        $ReferencePerson = explode("%/-\%", $HojaVida->ReferencePerson);

        $ReferenceJobs = '';
        $ReferenceJobs = explode("%/-\%", $HojaVida->ReferenceJobs);

        $Idioma = '';
        $Idioma = explode("%/-\%", $HojaVida->Idioma);

        $pdf = PDF::loadView('PlantillaCv.index', compact('HojaVida', 'Habilidades','Database','ReferenceFamily', 'ReferencePerson','ReferenceJobs','Idioma'));
        return $pdf->stream();
    }
    public function PdfExport()
    {
        $pdf = PDF::loadView('PlantillaCv.index');
        return $pdf->download('Plantilla Hoja de vida.pdf');
    }
}
