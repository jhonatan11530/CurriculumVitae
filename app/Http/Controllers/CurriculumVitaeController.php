<?php

namespace App\Http\Controllers;

use App\Models\Cargos;
use App\Models\Database;
use App\Models\ExperienciaLaboral;
use App\Models\HojaVida;
use App\Models\languajes;
use App\Models\ReferenciaFamily;
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
        $Databases = Database::all();
        $Cargos = Cargos::all();

        return view('Cv.create', compact('Cargos', 'Databases'));
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

            $Database = '';
            $Database = implode("%/-\%", $request->Database);


            $ReferenceJobs = '';
            $ReferenceJobs = implode("%/-\%", $request->HabilidadesReferenciaLaboral);

            $Idioma = '';
            $Idioma = implode("%/-\%", $request->Idioma);

            for ($i = 0; $i < count($request->NombreReferenciaLaboral); $i++) {
                ExperienciaLaboral::create([
                    'Identificador' => $request->Identificador,
                    'NombreReferenciaLaboral' => $request->NombreReferenciaLaboral[$i],
                    'FechaEntradaReferenciaLaboral' => $request->FechaEntradaReferenciaLaboral[$i],
                    'FechaSalidaReferenciaLaboral' => $request->FechaSalidaReferenciaLaboral[$i],
                    'CargoReferenciaLaboral' => $request->CargoReferenciaLaboral[$i],
                    'PaisReferenciaLaboral' => $request->PaisReferenciaLaboral[$i],
                    'DepartamentoReferenciaLaboral' => $request->DepartamentoReferenciaLaboral[$i],
                    'CiudadReferenciaLaboral' => $request->CiudadReferenciaLaboral[$i],
                    'TareasReferenciaLaboral' => $request->TareasReferenciaLaboral[$i],
                    'FuncionesReferenciaLaboral' => $request->FuncionesReferenciaLaboral[$i],
                    'HabilidadesReferenciaLaboral' => $ReferenceJobs,
                ]);
            }

            for ($i=0; $i < count($request->NombreReferenciaPersonal); $i++) {
                ReferenciaFamily::create([
                    'Identificador' => $request->Identificador,
                    'NombreReferenciaPersonal' => $request->NombreReferenciaPersonal[$i],
                    'CargoReferenciaPersonal' => $request->CargoReferenciaPersonal[$i],
                    'TelReferenciaPersonal' => $request->TelReferenciaPersonal[$i],
                    'PaisReferenciaPersonal' => $request->PaisReferenciaPersonal[$i],
                    'DepartamentoReferenciaPersonal' => $request->DepartamentoReferenciaPersonal[$i],
                    'CiudadReferenciaPersonal' => $request->CiudadReferenciaPersonal[$i],
                ]);
            }


            $HojaVida = new HojaVida();
            $HojaVida->Identificador = $request->Identificador;
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
            $HojaVida->Database = $Database;
            $HojaVida->Idioma = $Idioma;
            $HojaVida->save();

            toastr()->success('Se Creo la hoja de vida Correctamente !');
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $HojaVida = HojaVida::find($id);
        return view('Cv.edit', compact('HojaVida'));
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
