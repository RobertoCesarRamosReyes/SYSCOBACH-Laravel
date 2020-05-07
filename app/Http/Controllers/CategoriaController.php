<?php

namespace App\Http\Controllers;

use App\Categoria;
use Illuminate\Http\Request;
use App;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categorias=App\Categoria::paginate(10);
        return view('../admin/categorias',compact('categorias'));
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
        $categoria=new Categoria;
        $categoria->nombre=$request->nombre_categoria;
        $categoria->estado='Activo';
        $categoria->save();
        return back()->with('agregar_categoria','La categoría se ha agregado exitosamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function show(Categoria $categoria)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categoria=App\Categoria::findOrFail($id);
        return view('../admin/editar_categoria',compact('categoria'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $categoria=App\Categoria::findOrFail($id);
        $categoria->nombre=$request->nombre;
        $categoria->estado=$request->estado;
        $categoria->save();
        return back()->with('actualizar_categoria','La categoría se ha actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $categoria=App\Categoria::findOrFail($id);
        $categoria->delete();
        return back()->with('eliminar_categoria','La categoría '.$categoria->nombre.' se ha eliminado correctamente');
    }
}
