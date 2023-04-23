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
        $pdf = PDF::loadView('PlantillaCv.index',compact('HojaVida'));

        //$pdf->setOptions(['margin-top' => 20,'header-spacing' => 10,'page-height' => 210,'margin-top' => 40]);
        $pdf->setOptions(['isPhpEnabled' => true]);
        $pdf->setOptions(['isHtml5ParserEnabled' => true]);
        $pdf->setOptions(['isRemoteEnabled' => true]);
        $pdf->setOptions(['isJavascriptEnabled' => true]);
        $pdf->setOptions(['isFontSubsettingEnabled' => true]);
        $pdf->setOptions(['enable_css_float' => true]);
        $pdf->setOptions(['enable_html5_parser' => true]);
        $pdf->setOptions(['enable_remote' => true]);
        $pdf->setOptions(['enable_javascript' => true]);
        $pdf->setOptions(['enable_fontsubsetting' => true]);
        $pdf->setOptions(['enable_php' => true]);


        return $pdf->stream();
    }
    public function PdfExport()
    {
        $pdf = PDF::loadView('PlantillaCv.index');
        return $pdf->download('Plantilla Hoja de vida.pdf');
    }
}
