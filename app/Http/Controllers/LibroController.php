<?php

namespace App\Http\Controllers;

use App\Libro;
use App\Materia;
use App\Categoria;
use App\Area;
use Illuminate\Http\Request;
use App;

class LibroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $materias=App\Materia::all();
        $libros= App\Libro::all();
        $categorias=App\Categoria::all();
        $ubicaciones=App\Area::all();
        if($request->get('libro')==null){
            $libros=App\Libro::paginate(10);
            return view('../admin/libros',compact('libros','materias','categorias','ubicaciones'));
        }else{
            $busqueda_libro=$request->get('libro');
            $libros_encontrados=App\Libro::where('libro','like',"%$busqueda_libro%")->paginate(10);
            return view('../admin/libros',compact('libros','materias','categorias','ubicaciones','libros_encontrados'));
        }

        //return view('../admin/libros',compact('libros','materias','categorias','ubicaciones'));
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
        $libro=new Libro;
        $libro->materia_id=$request->materia;
        $libro->categoria_id=$request->categoria;
        $libro->area_id=$request->ubicacion;
        $libro->libro=$request->nombre;
        $libro->autor=$request->autor;
        $libro->editorial=$request->editorial;
        $libro->anio=$request->anio;
        $libro->descripcion=$request->descripcion;
        $libro->estado='Activo';
        $libro->save();
        return back()->with('agregar_libro','Libro '.$request->nombre.' agregado exitosamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Libro  $libro
     * @return \Illuminate\Http\Response
     */
    public function show(Libro $libro)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Libro  $libro
     * @return \Illuminate\Http\Response
     */
    public function edit(Libro $libro)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Libro  $libro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Libro $libro)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Libro  $libro
     * @return \Illuminate\Http\Response
     */
    public function destroy(Libro $libro)
    {
        //
    }
}
