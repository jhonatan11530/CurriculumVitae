<?php

namespace App\Http\Controllers;

use App\Models\SoporteEstudioModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class AddSoportesEstudiosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $SoporteEstudioModel = SoporteEstudioModel::all();
        return view('Estudios.index',compact('SoporteEstudioModel'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Estudios.create');
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
            'Fecha' => 'required',
            'Institucion' => 'required',
            'NombreTitulo' => 'required',
            'TipoEstudio' => 'required',
        ]);
        if ($validator->fails()) {
            toastr()->error('Error verifica los datos !');
            return back()->withErrors($validator);
        } else {

            $foto = $request->file('SoporteEstudio');
            $fotoImagen = 'storage/SoporteEstudio' . $request->Nombre . '/' . $foto->getClientOriginalName();
            Storage::disk('public')->putFileAs('SoporteEstudio' . $request->Nombre, $request->file('SoporteEstudio'), $foto->getClientOriginalName());

            $SoporteEstudioModel = new SoporteEstudioModel();
            $SoporteEstudioModel->Fecha = $request->Fecha;
            $SoporteEstudioModel->Institucion = $request->Institucion;
            $SoporteEstudioModel->NombreTitulo = $request->NombreTitulo;
            $SoporteEstudioModel->TipoEstudio = $request->TipoEstudio;
            $SoporteEstudioModel->SoporteFisico = $fotoImagen;
            $SoporteEstudioModel->save();

            toastr()->success('Se Creo el Registro !');
            return redirect('CurriculumVitaeAddSupportStudent');
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
        $SoporteEstudioModel = SoporteEstudioModel::find($id);
        return view('Estudios.show',compact('SoporteEstudioModel'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $SoporteEstudioModel = SoporteEstudioModel::find($id);
        return view('Estudios.edit',compact('SoporteEstudioModel'));
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
        $validator = Validator::make($request->all(), [
            'Fecha' => 'required',
            'Institucion' => 'required',
            'NombreTitulo' => 'required',
            'TipoEstudio' => 'required',
        ]);
        if ($validator->fails()) {
            toastr()->error('Error verifica los datos !');
            return back()->withErrors($validator);
        } else {

            $foto = $request->file('SoporteEstudio');
            $fotoImagen = 'storage/SoporteEstudio' . $request->Nombre . '/' . $foto->getClientOriginalName();
            Storage::disk('public')->putFileAs('SoporteEstudio' . $request->Nombre, $request->file('SoporteEstudio'), $foto->getClientOriginalName());

            $SoporteEstudioModel = SoporteEstudioModel::find($id);
            $SoporteEstudioModel->Fecha = $request->Fecha;
            $SoporteEstudioModel->Institucion = $request->Institucion;
            $SoporteEstudioModel->NombreTitulo = $request->NombreTitulo;
            $SoporteEstudioModel->TipoEstudio = $request->TipoEstudio;
            $SoporteEstudioModel->SoporteFisico = $fotoImagen;
            $SoporteEstudioModel->update();

            toastr()->success('Se Creo el Registro !');
            return redirect('CurriculumVitaeAddSupportStudent');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $SoporteEstudioModel = SoporteEstudioModel::find($id);
        Storage::deleteDirectory('SoporteEstudio' . $SoporteEstudioModel->Nombre);
        $SoporteEstudioModel->delete();

        toastr()->error('Se elimino el registro exitosamente !');
        return redirect('CurriculumVitaeAddSupportStudent');
    }
}
