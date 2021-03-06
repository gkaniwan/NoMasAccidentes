<?php
  session_start();

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>No Mas Accidentes | Inicio Profesional</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini" onload="consultarClientes(); buscarActividades();">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>


    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="inicioAdmin.php" class="brand-link">
      <img src="dist/img/noMasAccidentesLogo.jfif"
           alt="AdminLTE Logo"
           class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">No mas Accidentes</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block" id='NombreUsuario'></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview">
            <a href="inicioProfesional.php" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Inicio
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="profesionalMisclientes.php" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Clientes
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Inicio Profesional</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">

        <div class="row">
          <!-- left column -->
          <div class="col-md-5">
            <!-- Horizontal Form -->
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Nueva Actividad</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal">
                <div class="card-body">
                  <div class="form-group row">
                    <label for="clientesSelect" class="col-sm-4 col-form-label">Cliente</label>
                    <div class="col-sm-8">
                      <select class="form-control" id="clientesSelect">
                        
                      </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="reportarAccidente" class="col-sm-4 col-form-label">Tipo Actividad</label>
                    <div class="col-sm-8">
                      <select class="form-control" id="reportarAccidente">
                        <option value="1">Capacitación</option>
                        <option value="2">Planificar Visita</option>
                        <option value="3">Gestión</option>
                        <option value="4">CheckList</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="fechaActividad" class="col-sm-4 col-form-label">Fecha</label>
                    <div class="col-sm-8">
                      <input type="date" class="form-control" id="fechaActividad">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="descripcionActividad" class="col-sm-4 col-form-label">Descripción</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" id="descripcionActividad" placeholder="Descripcion">
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-success float-right" onclick="guardarActividad();">Guardar</button>
                  <!-- <button type="submit" class="btn btn-default">Borrar</button> -->
                </div>
                <!-- /.card-footer -->
              </form>
            </div>
            <!-- /.card -->
        </div>
        
        <div class="col-md-7">

          <section class="content">
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Actividades Profesional</h3>
                <div class="card-tools">
                  <!-- <button type="button" class="btn btn-sm btn-block btn-outline-success" onclick="verCrearAccidente();">Nuevo Accidente</button> -->
                </div>
              </div>
              <div class="card-body">
                  <div class="form-group" id="divListarActividades">
                    
                  </div>
              </div>
<!--         <div class="card-footer" align="right">
        </div> -->
        </div>
    </section>

        </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 1.0
    </div>
    <strong>Copyright &copy; 2020 <a href="login.php">No mas Accidentes</a>.</strong> Todos Los Derechos Reservados
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>

<!-- DataTables -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>


<script>
  
   $(document).ready(function () {  

    nombreUsuario = localStorage.getItem('NOMBRE');
    $('#NombreUsuario').html(nombreUsuario);

   });  

   function consultarClientes(){

    dato1 = '1';
 
         $.ajax({  
             url: './funciones/funcionesProfesional.php', 
             type: 'POST',
             data: {dato1 : dato1},
             cache: false,
             success: function(resultado) {
              console.log(resultado);
                $('#clientesSelect').html(resultado);
                },
              
         });
   }

   function buscarActividades(){

  nombreProfesional = localStorage.getItem('NOMBRE');
  console.log(nombreProfesional);
 
         $.ajax({  
             url: './funciones/funcionesProfesional.php',  
             type: 'POST',
             data: {nombreProfesional : nombreProfesional},
             cache: false,
             success: function(resultado) {
                $('#divListarActividades').html(resultado);
                },
             complete: function () {
                  $('#tablaListarActividades').dataTable( {
                        'paging'      : true,
                        'lengthChange': false,
                        'searching'   : false,
                        'ordering'    : true,
                        'info'        : false,
                        'autoWidth'   : true,
                        "lengthMenu": [[5, 10, 20], [5, 10, 20]],
                        "order": [[ 0, "desc" ]],
                        "language": {   
                          "sProcessing":     "Procesando...",
                          "sLengthMenu":     "Mostrar _MENU_ registros",
                          "sZeroRecords":    "No se encontraron resultados",
                          "sEmptyTable":     "Ningún dato disponible en esta tabla",
                          "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
                          "sInfoPostFix":    "",
                          "sSearch":         "Buscar:",
                          "sUrl":            "",
                          "sInfoThousands":  ",",
                          "sLoadingRecords": "Cargando...",
                          "oPaginate": { "sFirst":    "Primero",
                                         "sLast":     "Último",
                                         "sNext":     "Siguiente",
                                         "sPrevious": "Anterior" },
                          "oAria": { "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                                     "sSortDescending": ": Activar para ordenar la columna de manera descendente" },
                          "buttons": { "copy": "Copiar",
                                       "colvis": "Visibilidad" }
                          }
                    });
            } 
         });
    }

    function formato(texto){
  return texto.replace(/^(\d{4})-(\d{2})-(\d{2})$/g,'$3/$2/$1');
  }

    function guardarActividad(){

    nombreProfesional = localStorage.getItem('NOMBRE');
    idClientes = $('#clientesSelect').val();
    tipoActividad = $('#reportarAccidente').val();
    fechaActividad = $('#fechaActividad').val();
    descripcionActividad= $('#descripcionActividad').val();
    var salida = formato(fechaActividad);

    $.ajax({
        url: "./funciones/funcionesProfesional.php",
        type:"POST",
        data:{nombreProfesional : nombreProfesional, idClientes : idClientes, tipoActividad : tipoActividad, fechaActividad : salida, descripcionActividad : descripcionActividad},
        cache:false,
        success:function(resultado){

          alert(resultado);
        }
    });
  }

 
</script>



</body>
</html>
