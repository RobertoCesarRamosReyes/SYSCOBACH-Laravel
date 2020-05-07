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
            <li><i class="fa fa-pencil fa-fw "></i><b>Sección de ubicaciones</b></li>
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
                                <th>Estante</th>
                                <th>Charola</th>
                                <th>Acciones</th>
                            </thead>
                            <tbody>
                             @php
                             $no=1;
                             @endphp
                             @foreach ($areas as $area)
                                 <tr>
                                     <td><b>Ubicación {{$no++}} </b></td>
                                     <td> {{$area->estante}} </td>
                                     <td> {{$area->charola}} </td>
                                     <td>
                                         <a href=" {{route('eliminar_ubicacion',$area->id)}} " onclick="return confirm('¿Está seguro de eliminar esta ubicación?')" class="btn btn-danger">Eliminar</a>
                                     </td>
                                 </tr>
                             @endforeach
                            </tbody>
                        </table>
                        {{$areas->links()}}
                        @if (session('eliminar_ubicacion'))
                            <div class="alert alert-success">
                                {{session('eliminar_ubicacion')}}
                            </div>
                        @endif
                       </div>
                       <div class="col-md-1"></div>
        </div>
    </section>
@endsection