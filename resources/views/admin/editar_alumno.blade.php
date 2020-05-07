@extends('admin/plantilla_admin')
@section('contenido')
<br><br>
<section id="main-content">
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center">Editar alumno {{$alumno->nombre.' '.$alumno->apellidop.' '.$alumno->apellidom}} </h1>

           <div class="col-md-3"></div>
           <div class="col-md-6">
            <form action="{{route('actualizar_alumno',$alumno->id)}}" method="POST">
              @method('PUT')  
              @csrf                
                <div class="form-group">
                  <label for="nombre">Nombre</label>
                  <input type="text" class="form-control" id="nombre" name="nombre"  value=" {{$alumno->nombre}} ">
                </div>
                <div class="form-group">
                  <label for="apellidop">Apellido paterno</label>
                  <input type="text" class="form-control" id="apellidop" name="apellidop" value=" {{$alumno->apellidop}} ">
                </div>
                <div class="form-group">
                  <label for="apellidom">Apellido materno</label>
                  <input type="text" class="form-control" id="apellidom" name="apellidom" value=" {{$alumno->apellidom}} ">
                </div>
                <div class="form-group">
                  <label for="grado">Grado</label>
                  <!--<input type="number" min="1" class="form-control" id="grado" name="grado" value=" {{$alumno->grado}} ">-->
                  <select name="grado" id="grado" class="form-control">
                    <option value="{{$alumno->grado}}">{{$alumno->grado}}°</option> 
                    <option value="1">1°</option>
                    <option value="2">2°</option>
                    <option value="3">3°</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="grupo">Grupo</label>
                  <select name="grupo" id="grupo" class="form-control">
                    <option value="{{$alumno->grupo}}">{{$alumno->grupo}}</option> 
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                  </select>
                </div>
                <div class="form-group">
                    <label for="estado">Estado</label>
                    <select name="estado" id="estado" class="form-control">
                      <option value="{{$alumno->estado}}">{{$alumno->estado}}</option> 
                      <option value="Activo">Activo</option>
                      <option value="Suspendido">Suspendido</option>
                      <option value="Baja">Baja</option>
                    </select>
                  </div>
              <button type="submit" class="btn btn-warning">Actualizar</button>
          </form>
          
          @if (session('actualizar_alumno'))
          <div class="alert alert-info">
            {{session('actualizar_alumno')}}
          </div>
          @endif
           </div>
           <div class="col-md-3"></div>
        </div>

    </div>
</section>
@endsection