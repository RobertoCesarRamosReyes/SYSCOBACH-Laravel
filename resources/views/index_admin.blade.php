@extends('admin/plantilla_admin')
@section('contenido')
    <!--main content start-->
<section id="main-content">
    <section class="wrapper">
      <!--overview start-->
      <div class="row">
        <div class="col-lg-12 text-center text-bold">
         <!-- <h3 class="page-header"><i class="fa fa-laptop"></i> Inicio</h3>-->
          <ol class="breadcrumb">
           <!-- <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>-->
            <li><i class="fa fa-pencil fa-fw "></i><b>Ventana principal del administrador</b></li>
          </ol>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
          <div class="info-box blue-bg">
            <i class="fa fa-cloud-download"></i>
            <div class="count">6</div>
            <div class="title">No devueltos</div>
          </div>
          <!--/.info-box-->
        </div>
        <!--/.col-->

        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
          <div class="info-box brown-bg">
            <i class="fa fa-shopping-cart"></i>
            <div class="count">0</div>
            <div class="title">Entregas</div>
          </div>
        </div>
        <!--/.col-->

        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
          <div class="info-box dark-bg">
            <i class="fa fa-thumbs-o-up"></i>
            <div class="count">70</div>
            <div class="title">Prestados</div>
          </div>
          <!--/.info-box-->
        </div>
        <!--/.col-->

        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
          <div class="info-box green-bg">
            <i class="fa fa-cubes"></i>
            <div class="count">560</div>
            <div class="title">Total de libros</div>
          </div>
          <!--/.info-box-->
        </div>
        <!--/.col-->

      </div>
      <!--/.row-->

    </section>
    <section>
        <p>Este sistema esta siendo construido para la biblioteca del colegio de bachilleres plantel 27 en Bajos del Ejido Gro.
          Por el momento están terminadas las funciones siguientes:
        </p>
        
        <div class="container">
          <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
              <ul class="list-group">
                <li class="list-group-item active">FUNCIONES</li>
                <li class="list-group-item">Agregar nuevo alumno</li>
                <li class="list-group-item">Modificar alumno</li>
                <li class="list-group-item">Eliminar alumno</li>
                <li class="list-group-item">Agregar categoria</li>
                <li class="list-group-item">Modificar categoria</li>
                <li class="list-group-item">Eliminar categoría</li>
                <li class="list-group-item">Agregar materia</li>
                <li class="list-group-item">Modificar materia</li>
                <li class="list-group-item">Eliminar materia</li>
                <li class="list-group-item">Agregar ubicación</li>
                <li class="list-group-item">Modificar ubicación</li>
                <li class="list-group-item">Eliminar ubicación</li>
                <li class="list-group-item">Agregar libro</li>
                <li class="list-group-item">Modificar libro</li>
                <li class="list-group-item">Eliminar libro</li>
              </ul>
            </div>
            <div class="col-md-4"></div>
          </div>
          
        </div>

    </section>
@endsection