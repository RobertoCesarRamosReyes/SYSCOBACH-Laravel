<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return view('index_admin');
});*/
Route::get('/','principal@index');

/* Rutas para los alumnos */
Route::get('/alumnos','AlumnoController@index')->name('alumnos');
Route::post('/alumnos','AlumnoController@store')->name('agregar_alumno');
Route::get('editar_alumno/{id}','AlumnoController@edit')->name('editar_alumno');
Route::put('editar_alumno/{id}','AlumnoController@update')->name('actualizar_alumno');
Route::get('eliminar_alumno/{id}','AlumnoController@destroy')->name('eliminar_alumno');

/* Rutas para las materias */
Route::get('/ver_materias','MateriaController@index')->name('ver_materias');
Route::post('/agregar_materia','MateriaController@store')->name('agregar_materia');
Route::get('/editar_materia/{id}','MateriaController@edit')->name('editar_materia');
Route::put('/actualizar_materia/{id}','MateriaController@update')->name('actualizar_materia');
Route::get('/eliminar_materia/{id}','MateriaController@destroy')->name('eliminar_materia');

/* Rutas para las categorías */
Route::get('/ver_categorias','CategoriaController@index')->name('ver_categorias');
Route::post('/agregar_categoria','CategoriaController@store')->name('agregar_categoria');
Route::get('/editar_categoria/{id}','CategoriaController@edit')->name('editar_categoria');
Route::put('/actualizar_categoria/{id}','CategoriaController@update')->name('actualizar_categoria');
Route::get('/eliminar_categoria/{id}','CategoriaController@destroy')->name('eliminar_categoria');

/*Rutas para las ubicaciones */
Route::get('/ver_ubicaciones','AreaController@index')->name('ver_ubicaciones');
Route::post('/agregar_ubicacion','AreaController@store')->name('agregar_ubicacion');
Route::get('/eliminar_ubicacion/{id}','AreaController@destroy')->name('eliminar_ubicacion');

/*Rutas para los libros */
Route::get('/ver_libros','LibroController@index')->name('ver_libros');
Route::post('/agregar_libro','LibroController@store')->name('agregar_libro');