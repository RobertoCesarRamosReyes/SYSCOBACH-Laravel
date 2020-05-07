<?php

namespace App\Http\Controllers;

use App\Materia;
use Illuminate\Http\Request;
use App;

class MateriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $materias=App\Materia::paginate(10);
        return view('admin/materias',compact('materias'));
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
        $materia=new Materia;
        $materia->nombre=$request->nombre_materia;
        $materia->estado='Activo';
        $materia->save();
        return back()->with('materia_agregada','La materia se ha agregado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Materia  $materia
     * @return \Illuminate\Http\Response
     */
    public function show(Materia $materia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Materia  $materia
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $materia=App\Materia::findOrFail($id);
        return view('admin/editar_materia',compact('materia'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Materia  $materia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $materia=App\Materia::findOrFail($id);
        $materia->nombre=$request->nombre;
        $materia->estado=$request->estado;
        $materia->save();
        return back()->with('actualizar_materia','La materia se ha actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Materia  $materia
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $materia=App\Materia::findOrFail($id);
        $materia->delete();
        return back()->with('eliminar_materia','La materia ha sido eliminada exitosamente');
    }
}
