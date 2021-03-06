@extends('admin/plantilla_admin')
@section('contenido')
<br><br>
<section id="main-content">
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center">Editar materia {{$materia->nombre}} </h1>

           <div class="col-md-3"></div>
           <div class="col-md-6">
            <form action="{{route('actualizar_materia',$materia->id)}}" method="POST">
              @method('PUT')  
              @csrf                
                <div class="form-group">
                  <label for="nombre">Nombre</label>
                  <input type="text" class="form-control" id="nombre" name="nombre"  value=" {{$materia->nombre}} ">
                </div>
                <div class="form-group">
                    <label for="estado">Estado</label>
                    <select name="estado" id="estado" class="form-control">
                      <option value="{{$materia->estado}}">{{$materia->estado}}</option> 
                      <option value="Activo">Activo</option>
                      <option value="Baja">Baja</option>
                    </select>
                  </div>
              <button type="submit" class="btn btn-warning">Actualizar</button>
          </form>
          
          @if (session('actualizar_materia'))
          <div class="alert alert-info">
            {{session('actualizar_materia')}}
          </div>
          @endif
           </div>
           <div class="col-md-3"></div>
        </div>

    </div>
</section>
@endsection