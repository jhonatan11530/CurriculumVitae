<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
        return view('Cv.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Cv.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dd($request->all());
        $validator = Validator::make($request->all(), [
            'Nombre' => 'required',
            'Cargo' => 'required',
            'Idioma' => 'required',
            'Celular' => 'required',
            'Fijo' => 'required',
            'Correo' => 'required',
            'PerfilProfesional' => 'required',
            'SobreMi' => 'required',
            'ReferenciaPersonal' => 'required',
            'ReferenciaLaboral' => 'required',
            'Education' => 'required',
            'EducationComple' => 'required',
            'Idioma' => 'required',
        ]);
        if ($validator->fails()) {
            toastr()->error('Error verifica los datos !');
            return back()->withErrors($validator);
        } else {

            $foto = $request->file('Foto');
            $fotoImagen = 'storage/foto_cv' . $request->Nombre . '/' . $foto->getClientOriginalName();
            Storage::disk('public')->putFileAs('foto_cv' . $request->Nombre, $request->file('Foto'), $foto->getClientOriginalName());

            foreach ($request->ReferenciaPersonal as $key => $value) {
            }
            foreach ($request->ReferenciaLaboral as $key => $value) {
            }
            foreach ($request->Education as $key => $value) {
            }
            foreach ($request->EducationComple as $key => $value) {
            }
            foreach ($request->Idioma as $key => $value) {
            }

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
        //
    }
}
