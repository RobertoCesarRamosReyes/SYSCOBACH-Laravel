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
            <li><i class="fa fa-pencil fa-fw "></i><b>Sección de categorías</b></li>
          </ol>
        </div>
      </div>

    </section>
    <section>
        <div class="row">
                       <div class="col-md-1"></div>
                       <div class="col-md-10">
                        <table class="table table-responsive table-hover">
                            <thead>
                                <th>No.</th>
                                <th>Nombre</th>
                                <th>Estado</th>
                                <th>Registro</th>
                                <th>Acciones</th>
                            </thead>
                            <tbody>
                             @php
                             $no=1;
                             @endphp
                             @foreach ($categorias as $categoria)
                                 <tr>
                                     <td> {{$no++}} </td>
                                     <td> {{$categoria->nombre}} </td>
                                     <td> {{$categoria->estado}} </td>
                                     <td> {{$categoria->created_at}} </td>
                                     <td>
                                         <a href=" {{route('editar_categoria',$categoria->id)}} " class="btn btn-warning">Editar</a>
                                         <a href=" {{route('eliminar_categoria',$categoria->id)}} " onclick="return confirm('¿Está seguro de eliminar esta categoría?')" class="btn btn-danger">Eliminar</a>
                                     </td>
                                 </tr>
                             @endforeach
                            </tbody>
                        </table>
                        {{$categorias->links()}}
                        @if (session('eliminar_categoria'))
                            <div class="alert alert-success">
                                {{session('eliminar_categoria')}}
                            </div>
                        @endif
                       </div>
                       <div class="col-md-1"></div>
        </div>
    </section>
@endsection