<?php

namespace App\Http\Controllers;

use App\Alumno;
use Illuminate\Http\Request;
use App;

class AlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //dd($request->get('alumno'));
        if($request->get('alumno')==null){
            $alumnos=App\Alumno::paginate(7);
        }else{
            $campo=$request->get('alumno');
            $alumnos=Alumno::where('nombre','like',"%$campo%")->paginate(7);
        }       
        return view('admin/alumnos',compact('alumnos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $alumno=new Alumno;
        $alumno->nombre=$request->nombre;
        $alumno->apellidop=$request->apellidop;
        $alumno->apellidom=$request->apellidom;
        $alumno->grado=$request->grado;
        $alumno->grupo=$request->grupo;
        $alumno->estado='Activo';
        $alumno->save();
        return back()->with('agregar_alumno','Alumno agregado exitosamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function show(Alumno $alumno)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $alumno=App\Alumno::findOrFail($id);
        return view('admin/editar_alumno',compact('alumno'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $alumno=App\Alumno::findOrFail($id);
        $alumno->nombre=$request->nombre;
        $alumno->apellidop=$request->apellidop;
        $alumno->apellidom=$request->apellidom;
        $alumno->grado=$request->grado;
        $alumno->grupo=$request->grupo;
        $alumno->estado=$request->estado;
        $alumno->save();
        return back()->with('actualizar_alumno','El alumno se ha actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $alumno=App\Alumno::findOrFail($id);
        $alumno->delete();
        return back()->with('alumno_eliminado','El alumno se ha eliminado exitosamente');
    }
}
