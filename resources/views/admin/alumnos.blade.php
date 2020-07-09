@extends('admin/plantilla_admin')
@section('contenido')
<section id="main-content">
    <section class="wrapper">
      <!--overview start-->
      <div class="row">
        <div class="col-lg-12 text-center text-bold">
         <!-- <h3 class="page-header"><i class="fa fa-laptop"></i> Inicio</h3>-->
          <ol class="breadcrumb">
           <!-- <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>-->
            <li><i class="fa fa-pencil fa-fw "></i><b>Sección de alumnos</b></li>
          </ol>
        </div>
      </div>

    </section>
    <section>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <form class="form-inline" method="GET">
                   <!-- <div class="form-group mb-2">
                       <h4>Nombre del alumno:</h4>
                    </div>-->
                    <div class="form-group mx-sm-3 mb-2">
                      <label for="alumno" class="sr-only">Nombre del alumno</label>
                      <input type="text" class="form-control" name="alumno" id="alumno" placeholder="Nombre del alumno">
                    </div>
                    <button type="submit" class="btn btn-success mb-2">Buscar</button>
                  </form>
            </div>
            <div class="col-md-4"></div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-responsive table-hover">
                    <thead>
                        <th>No.</th>
                        <th>Nombre</th>
                        <th>Apellido paterno</th>
                        <th>Apellido materno</th>
                        <th>Grado</th>
                        <th>Grupo</th>
                        <th>Estado</th>
                        <th>Registro</th>
                        <th>Acciones</th>
                    </thead>
                    <tbody>
                        @php
                        $no=1;
                        @endphp
                        @foreach ($alumnos as $alumno)
                            <tr>
                            <td>{{$no++}}</td>
                                <td>{{$alumno->nombre}}</td>
                                <td>{{$alumno->apellidop}}</td>
                                <td>{{$alumno->apellidom}}</td>
                                <td>{{$alumno->grado}}</td>
                                <td>{{$alumno->grupo}}</td>
                                <td>{{$alumno->estado}}</td>
                                <td>{{$alumno->created_at}}</td>
                                <td>
                                   <!-- <a href=" {{route('editar_alumno',$alumno->id)}} " class="btn btn-warning">Actualizar</a>-->
                                   <!-- <a href=" {{route('eliminar_alumno',$alumno->id)}} " onclick="return confirm('¿Está seguro de eliminar a este alumno?')" class="btn btn-danger">Eliminar</a>-->
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{$alumnos->links()}}
            </div>
           
        </div>
    </section>
@endsection