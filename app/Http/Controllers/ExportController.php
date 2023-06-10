<?php

namespace App\Http\Controllers;

use PDF;
use App\Models\HojaVida;
use App\Models\ReferenciaFamily;
use App\Models\ReferenciaJobs;
use App\Models\SoporteEstudioModel;
use App\Models\SoporteEstudioComplementoModel;
use Illuminate\Http\Request;

class ExportController extends Controller
{
    public function ShowPdf($id)
    {

        $HojaVida = HojaVida::find($id);
        $Family = ReferenciaFamily::all();
        $Jobs = ReferenciaJobs::all();
        $Estudio = SoporteEstudioModel::all();
        $Complementario = SoporteEstudioComplementoModel::all();

        $Habilidades = '';
        $Habilidades = explode("%/-\%", $HojaVida->Habilidades);

        $Database = '';
        $Database = explode("%/-\%", $HojaVida->Database);

        $Idioma = '';
        $Idioma = explode("%/-\%", $HojaVida->Idioma);

        $pdf = PDF::loadView('PlantillaCV.index', compact('HojaVida', 'Habilidades','Database','Family','Jobs','Idioma','Estudio','Complementario'));
        return $pdf->stream();
    }
    public function PdfExport()
    {
        $pdf = PDF::loadView('PlantillaCV.index');
        return $pdf->download('Plantilla Hoja de vida.pdf');
    }
}
