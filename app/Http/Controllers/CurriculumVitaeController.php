<?php

namespace App\Http\Controllers;

use App\Models\Cargos;
use App\Models\HojaVida;
use App\Models\languajes;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class CurriculumVitaeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $HojaVida = HojaVida::all();
        return view('Cv.index', compact('HojaVida'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Languajes = languajes::all();
        $Cargos = Cargos::all();
        return view('Cv.create', compact('Languajes', 'Cargos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'Nombre' => 'required',
            'Cargo' => 'required',
            'Celular' => 'required',
            'Correo' => 'required',
            'Habilidades' => 'required',
            'PerfilProfesional' => 'required',
            /*'ReferenciaPersonal' => 'required',
            'ReferenciaLaboral' => 'required',
            'Education' => 'required',
            'EducationComple' => 'required',
            'Idioma' => 'required',*/
        ]);
        if ($validator->fails()) {
            toastr()->error('Error verifica los datos !');
            return back()->withErrors($validator);
        } else {

            $edad = Carbon::parse($request->DateNacimiento)->age;

            $foto = $request->file('Foto');
            $fotoImagen = 'storage/foto_cv_' . $request->Nombre . '/' . $foto->getClientOriginalName();
            Storage::disk('public')->putFileAs('foto_cv_' . $request->Nombre, $request->file('Foto'), $foto->getClientOriginalName());

            $Habilidades = '';
            $Habilidades = implode("%/-\%", $request->Habilidades);


            $HojaVida = new HojaVida();
            $HojaVida->Nombre = $request->Nombre;
            $HojaVida->Foto = $fotoImagen;
            $HojaVida->Edad = $edad;
            $HojaVida->FechaNacimiento = $request->DateNacimiento;
            $HojaVida->Cargo = $request->Cargo;
            $HojaVida->Celular = $request->Celular;
            $HojaVida->Correo = $request->Correo;
            $HojaVida->Ubicacion = $request->Pais . " " . $request->Departamento . " " . $request->Ciudad;
            $HojaVida->PerfilProfesional = $request->PerfilProfesional;
            $HojaVida->Habilidades = $Habilidades;
            $HojaVida->save();

            toastr()->success('Se Creo el Fabricante !');
            return redirect('CurriculumVitae');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('Cv.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('Cv.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $curriculum = HojaVida::find($id);
        Storage::deleteDirectory('foto_cv_' . $curriculum->Nombre);
        $curriculum->delete();
        toastr()->error('Se elimino la hoja de vida exitosamente !');
        return redirect('CurriculumVitae');
    }
}
