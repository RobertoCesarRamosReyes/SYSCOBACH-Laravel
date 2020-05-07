<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="img/favicon.png">

  <title>Sysbi COBACH 27</title>

  <!-- Bootstrap CSS -->
  <link href="../css/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="../css/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="../css/elegant-icons-style.css" rel="stylesheet" />
  <link href="../css/font-awesome.min.css" rel="stylesheet" />
 
  <!-- easy pie chart-->
  <link href="../assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen" />
  <!-- owl carousel -->
  <link rel="stylesheet" href="../css/owl.carousel.css" type="text/css">
  <link href="../css/jquery-jvectormap-1.2.2.css" rel="stylesheet">
  <!-- Custom styles -->
  <link href="../css/widgets.css" rel="stylesheet">
  <link href="../css/style.css" rel="stylesheet">
  <link href="../css/style-responsive.css" rel="stylesheet" />
  <link href="../css/xcharts.min.css" rel=" stylesheet">
  <link href="../css/jquery-ui-1.10.4.min.css" rel="stylesheet">
  <!-- =======================================================
    Theme Name: Admin
    Theme URL: 
    Author: Roberto Cesar Ramos Reyes
    Author URL: https://www.linkingsonft.com
  ======================================================= -->
</head>

<body>
  <!-- container section start -->
  <section id="container" class="">


    <header class="header dark-bg">
      <div class="toggle-nav">
        <div class="icon-reorder tooltips" data-original-title="Ver/ocultar menú" data-placement="bottom"><i class="icon_menu"></i></div>
      </div>

      <!--logo start-->
      <a href="/" class="logo">Sysbi <span class="lite">admin</span></a>
      <!--logo end-->

      <div class="top-nav notification-row">
        <!-- notificatoin dropdown start-->
        <ul class="nav pull-right top-menu">
        
          <!-- user login dropdown start-->
          <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="profile-ava">
                                <img alt="" src="../img/roberto.jpg">
                            </span>
                            <span class="username">Roberto Cesar</span>
                            <b class="caret"></b>
                        </a>
            <ul class="dropdown-menu extended logout">
              <div class="log-arrow-up"></div>
              <li class="eborder-top">
                <a href="#"><i class="icon_profile"></i> Mi perfil</a>
              </li>
              
            </ul>
          </li>
          <!-- user login dropdown end -->
        </ul>
        <!-- notificatoin dropdown end-->
      </div>
    </header>
    <!--header end-->

    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu">
          <li class="active">
            <a class="" href="/">
                          <i class="icon_house_alt"></i>
                          <span>Inicio</span>
                      </a>
          </li>
          <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="icon_document_alt"></i>
                          <span>Alumnos</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
              <li><a class="" href="" data-toggle="modal" data-target="#modal_agregar_alumno">Agregar alumno</a></li>
              <li><a class="" href="../alumnos">Consultar alumnos</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="icon_desktop"></i>
                          <span>Materias</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
              <li><a class="" href="" data-toggle="modal" data-target="#modal_agregar_materia">Agregar materia</a></li>
              <li><a class="" href="../ver_materias">Consultar materias</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="icon_desktop"></i>
                          <span>Categorías</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
              <li><a class="" href="" data-toggle="modal" data-target="#modal_agregar_categoria">Agregar categoría</a></li>
              <li><a class="" href="../ver_categorias">Consultar categorías</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="icon_desktop"></i>
                          <span>Ubicaciones</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
              <li><a class="" href="" data-toggle="modal" data-target="#modal_agregar_ubicacion">Agregar ubicación</a></li>
              <li><a class="" href="../ver_ubicaciones">Consultar ubicaciones</a></li>
            </ul>
          </li>
          <li>
            <a class="" href="../ver_libros">
                          <i class="icon_genius"></i>
                          <span>Libros</span>
                      </a>
          </li>


          <li class="sub-menu">
            <a href="javascript:;" class="">
                          <i class="icon_table"></i>
                          <span>Tables</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
            <ul class="sub">
              <li><a class="" href="basic_table.html">Basic Table</a></li>
            </ul>
          </li>

          

        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->


<!-- Modal nuevo alumno -->
<div class="modal fade" id="modal_agregar_alumno" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-center" id="modal_agregar_alumno">Agregar nuevo alumno</h5>

      </div>
      <div class="modal-body">
      <form action="{{route('agregar_alumno')}}" method="POST">
          @csrf
          <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre">
          </div>
          <div class="form-group">
            <label for="apellidop">Apellido paterno</label>
            <input type="text" class="form-control" id="apellidop" name="apellidop">
          </div>
          <div class="form-group">
            <label for="apellidom">Apellido materno</label>
            <input type="text" class="form-control" id="apellidom" name="apellidom">
          </div>
          <div class="form-group">
            <label for="grado">Grado</label>
            <select name="grado" id="grado" class="form-control">
              <option value="1" default>1°</option>
              <option value="2">2°</option>
              <option value="3">3°</option>
            </select>
          </div>
          <div class="form-group">
            <label for="grupo">Grupo</label>
            <select name="grupo" id="grupo" class="form-control">
              <option value="A" default>A</option>
              <option value="B">B</option>
              <option value="C">C</option>
            </select>
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
<!--Fin modal nuevo alumno-->
<!-- Modal nueva materia -->
<div class="modal fade" id="modal_agregar_materia" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-center" id="modal_agregar_materia">Agregar nueva materia</h5>

      </div>
      <div class="modal-body">
      <form action="{{route('agregar_materia')}}" method="POST">
          @csrf
          <div class="form-group">
            <label for="nombre_materia">Nombre de la materia</label>
            <input type="text" class="form-control" id="nombre_materia" name="nombre_materia">
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
<!-- Modal nueva categoría -->
<div class="modal fade" id="modal_agregar_categoria" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-center" id="modal_agregar_categoria">Agregar nueva categoría</h5>

      </div>
      <div class="modal-body">
      <form action="{{route('agregar_categoria')}}" method="POST">
          @csrf
          <div class="form-group">
            <label for="nombre_categoria">Nombre de la categoría</label>
            <input type="text" class="form-control" id="nombre_categoria" name="nombre_categoria">
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
<!--Fin modal nueva categoría-->
<!-- Modal nueva ubicaciones -->
<div class="modal fade" id="modal_agregar_ubicacion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-center" id="modal_agregar_ubicacion">Agregar nueva ubicación</h5>

      </div>
      <div class="modal-body">
      <form action="{{route('agregar_ubicacion')}}" method="POST">
          @csrf
          <div class="form-group">
            <label for="estante">Estante</label>
            <input type="number" class="form-control" id="estante" name="estante">
          </div>        
          <div class="form-group">
            <label for="charola">Charola</label>
            <input type="text" maxlength="1" class="form-control" id="charola" name="charola">
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
<!--Fin modal nueva ubicaciones-->

  @if (session('agregar_alumno'))
  <script>
    alert("  {{session('agregar_alumno')}} " );
  </script>
  @endif
  @if (session('materia_agregada'))
      <script>
        alert(" {{session('materia_agregada')}} ");
      </script>
  @endif
  @if (session('agregar_categoria'))
  <script>
    alert(" {{session('agregar_categoria')}} ");
  </script>
@endif
@if (session('agregar_ubicacion'))
<script>
  alert(" {{session('agregar_ubicacion')}} ");
</script>
@endif

    @yield('contenido')
      <div class="text-right">
        <div class="credits">
          <!--
            All the links in the footer should remain intact.
            You can delete the links only if you purchased the pro version.
            Licensing information: https://bootstrapmade.com/license/
            Purchase the pro version form: https://bootstrapmade.com/buy/?theme=NiceAdmin
          -->
          Desarrollado por <a href="http://www.linkingsonft.com" target="_blank">Linkingsonft</a>
        </div>
      </div>
    </section>
    <!--main content end-->
  </section>
  <!-- container section start -->

  <!-- javascripts -->
  <script src="../js/jquery.js"></script>
  <script src="../js/jquery-ui-1.10.4.min.js"></script>
  <script src="../js/jquery-1.8.3.min.js"></script>
  <script type="text/javascript" src="../js/jquery-ui-1.9.2.custom.min.js"></script>
  <!-- bootstrap -->
  <script src="../js/bootstrap.min.js"></script>
  <!-- nice scroll -->
  <script src="../js/jquery.scrollTo.min.js"></script>
  <script src="../js/jquery.nicescroll.js" type="text/javascript"></script>
  <!-- charts scripts -->
  <!--<script src="assets/jquery-knob/js/jquery.knob.js"></script>
  <script src="js/jquery.sparkline.js" type="text/javascript"></script>
  <script src="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
  <script src="js/owl.carousel.js"></script>-->
  <!-- jQuery full calendar -->
  <!--<script src="js/fullcalendar.min.js"></script>-->
    <!-- Full Google Calendar - Calendar -->
   <!-- <script src="assets/fullcalendar/fullcalendar/fullcalendar.js"></script>-->
    <!--script for this page only-->
   <!-- <script src="js/calendar-custom.js"></script>-->
    <!--<script src="js/jquery.rateit.min.js"></script>-->
    <!-- custom select -->
   <!-- <script src="js/jquery.customSelect.min.js"></script>
    <script src="assets/chart-master/Chart.js"></script>-->

    <!--custome script for all page-->
    <script src="../js/scripts.js"></script>
    <!-- custom script for this page-->
    <script src="../js/sparkline-chart.js"></script>
    <script src="../js/easy-pie-chart.js"></script>
    <script src="../js/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="../js/jquery-jvectormap-world-mill-en.js"></script>
    <script src="../js/xcharts.min.js"></script>
    <script src="../js/jquery.autosize.min.js"></script>
    <script src="../js/jquery.placeholder.min.js"></script>
    <script src="../js/gdp-data.js"></script>
    <script src="../js/morris.min.js"></script>
    <script src="../js/sparklines.js"></script>
    <script src="../js/charts.js"></script>
    <script src="../js/jquery.slimscroll.min.js"></script>
    <script>
      //knob
      $(function() {
        $(".knob").knob({
          'draw': function() {
            $(this.i).val(this.cv + '%')
          }
        })
      });

      //carousel
      $(document).ready(function() {
        $("#owl-slider").owlCarousel({
          navigation: true,
          slideSpeed: 300,
          paginationSpeed: 400,
          singleItem: true

        });
      });

      //custom select box

      $(function() {
        $('select.styled').customSelect();
      });

      /* ---------- Map ---------- */
      $(function() {
        $('#map').vectorMap({
          map: 'world_mill_en',
          series: {
            regions: [{
              values: gdpData,
              scale: ['#000', '#000'],
              normalizeFunction: 'polynomial'
            }]
          },
          backgroundColor: '#eef3f7',
          onLabelShow: function(e, el, code) {
            el.html(el.html() + ' (GDP - ' + gdpData[code] + ')');
          }
        });
      });
    </script>

</body>

</html>

