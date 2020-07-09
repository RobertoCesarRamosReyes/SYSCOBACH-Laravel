
@extends('admin/plantilla_admin')
@section('contenido')
<section id="main-content">
    <section class="wrapper ">
      <!--overview start-->
      <div class="row ">
        <div class="col-lg-12 text-center text-bold">
         <!-- <h3 class="page-header"><i class="fa fa-laptop"></i> Inicio</h3>-->
          <ol class="breadcrumb">
           <!-- <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>-->
            <li class="my-3"><i class="fa fa-pencil fa-fw "></i><b>Sección de libros</b>              
        </li>
          </ol>
        </div>
      </div>

    </section>
    <section>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-2"> 
                <a class="btn btn-primary " href="" data-toggle="modal" data-target="#modal_agregar_libro">Agregar nuevo libro</a>
            </div>
            <div class="col-md-4">
                <form class="form-inline" method="GET">
                  
                    <div class="form-group mx-sm-3 mb-2">
                      <label for="libro" class="sr-only">Nombre del libro</label>
                      <input type="text" class="form-control" name="libro" id="libro" placeholder="Nombre del libro">
                    </div>
                    <button type="submit" class="btn btn-success mb-2">Buscar</button>
                  </form>
                  @if (session('agregar_libro'))
                      <script>
                        alert("{{session('agregar_libro')}}")
                      </script>
                     @endif
            </div>
            <div class="col-md-4"></div>
        </div>
        <div class="row">
            <div class="col-md-12">
              <div class="col-md-12">
                <table class="table table-responsive table-hover">
                    <thead>
                        <th>No.</th>
                        <th>Materia</th>
                        <th>Categoria</th>
                        <th>Ubicación</th>
                        <th>Nombre</th>
                        <th>Autor</th>
                        <th>Editorial</th>
                        <th>Año</th>
                        <th>Descripcion</th>
                        <th>Estado</th>
                        <th></th>
                    </thead>
                    <tbody>
                        @php
                        $no=1;
                        @endphp
                        @foreach ($libros as $lb)
                            <tr>
                            <td>{{$no++}}</td>
                                <td>{{$lb->materia_id}}</td>
                                <td>{{$lb->categoria_id}}</td>
                                <td>{{$lb->area_id}}</td>
                                <td>{{$lb->libro}}</td>
                                <td>{{$lb->autor}}</td>
                                <td>{{$lb->editorial}}</td>
                                <td>{{$lb->anio}}</td>
                                <td>{{$lb->descripcion}}</td>
                                <td>{{$lb->estado}}</td>
                                <td>
                                    <a href=" {{route('editar_alumno',$lb->id)}} " class="btn btn-warning">Actualizar</a>
                                    <a href=" {{route('eliminar_alumno',$lb->id)}} " onclick="return confirm('¿Está seguro de eliminar a este alumno?')" class="btn btn-danger">Eliminar</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{$libros->links()}}
            </div>
            </div>
           
        </div>
    </section>
@endsection

<!-- Modal nueva materia -->
<div class="modal fade" id="modal_agregar_libro" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-center" id="modal_agregar_libro">Agregar nuevo libro</h5>

      </div>
      <div class="modal-body">
      <form action="{{route('agregar_libro')}}" method="POST">
          @csrf
          <div class="form-group">
            <label for="nombre">Nombre del libro</label>
            <input type="text" class="form-control" id="nombre" name="nombre">
          </div>  
          <div class="form-group">
            <label for="autor">Nombre del autor</label>
            <input type="text" class="form-control" id="autor" name="autor">
          </div>  
          <div class="form-group">
            <label for="editorial">Nombre de la editorial</label>
            <input type="text" class="form-control" id="editorial" name="editorial">
          </div>  
          <div class="form-group">
            <label for="anio">Año de publicación</label>
            <input type="number" class="form-control" id="anio" name="anio">
          </div>  
            <div class="form-group">
              <label for="categoria">Categoría</label>
              <select name="categoria" id="categoria" class="form-control">
                
                  @foreach ($categorias as $categoria)
                  <option value="{{$categoria->id}}">{{$categoria->nombre}}</option> 
                  @endforeach                  
              </select>
            </div>   
            <div class="form-group">
              <label for="materia">Materia</label>
              <select name="materia" id="materia" class="form-control">
                  @foreach ($materias as $materia)
                  <option value="{{$materia->id}}">{{$materia->nombre}}</option> 
                  @endforeach                  
              </select>
            </div>    
            <div class="form-group">
              <label for="ubicacion">Ubicación</label>
              <select name="ubicacion" id="ubicacion" class="form-control">
                  @foreach ($ubicaciones as $ubicacion)
                  <option value="{{$ubicacion->id}}">{{$ubicacion->estante}}-{{$ubicacion->charola}} </option> 
                  @endforeach                  
              </select>
            </div>  
            <div class="form-group">
              <label for="descripcion">Descripcion</label>
              <textarea id="descripcion" name="descripcion" class="form-control" rows="3" cols="50"></textarea>
            </div>    
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Agregar</button>
      </div>
    </form>
    </div>
  </div>
</div>
<!--Fin modal nueva materia-->