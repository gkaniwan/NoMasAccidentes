<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>No Mas Accidentes | Mantenedor Actividades</title>
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
    <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
</head>
<body class="hold-transition sidebar-mini" onload="buscarActividades();">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
<!--       <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li> -->
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
          <a href="#" class="d-block" id="NombreUsuario"></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview">
            <a href="inicioAdmin.php" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Reportes
                <!-- <i class="right fas fa-angle-left"></i> -->
              </p>
            </a>
          </li>

                    <li class="nav-item has-treeview">
            <a  class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Mantenedores
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="mantenedorUsuarios.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Usuarios</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="mantenedorContratos.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Contratos</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="mantenedorPagos.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pagos</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="mantenedorActividades.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Actividades</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="mantenedorAccidentes.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Accidentes</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="mantenedorChecklist.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Checklist</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="mantenedorCasos.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Casos</p>
                </a>
              </li>
               <li class="nav-item">
                <a href="mantenedorRoles.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Roles</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="mantenedorCapacitacion.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Capacitaciones</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="mantenedorTipoActividad.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tipo Actividad</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="mantenedorExtras.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Extras</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="mantenedorMejora.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Mejoras</p>
                </a>
              </li>
            </ul>
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
            <h1>Mantenedor Actividades</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="inicioAdmin.php">Inicio</a></li>
              <li class="breadcrumb-item active">Mantenedor Actividades</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Actividades</h3>
                <div class="card-tools">
                  <button type="button" class="btn btn-sm btn-block btn-outline-success" onclick="verCrearActividad();">Nueva Actividad</button>
                </div>
              </div>
              <div class="card-body">
                  <div class="form-group" id="tablaActividades">
                    <table class='table table-bordered table-striped display' style='width:100%' id='tablaListarActividad'>
                            <thead>
                              <tr>
                                  <th>ID Actividad</th>
                                  <th>Profesional</th>
                                  <th>Id Contrato</th>
                                  <th>Descripción</th>
                                  <th>Fecha</th>
                                  <th>Tipo Actividad</th>
                                  <th></th>
                                  <th></th>
                              </tr>
                            </thead>
                            <tbody>

                            </tbody>
                      </table>
                  </div>
              </div>
<!--         <div class="card-footer" align="right">
        </div> -->
        </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?php include('modalActualizarActividad.php');?>
  <?php include('modalNuevaActividad.php');?>

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
      console.log(nombreUsuario);

  });  

      $(document).on('click', '#cerrarModalNueva', function () {
          var select = document.getElementById("tipoActividadAgregar");
          var length = select.options.length;
          for (i = length-1; i >= 0; i--) {
            select.options[i] = null;
          }
          var select = document.getElementById("actividadClienteAgregar");
          var length = select.options.length;
          for (i = length-1; i >= 0; i--) {
            select.options[i] = null;
          }
          var select = document.getElementById("actividadProfesionalAgregar");
          var length = select.options.length;
          for (i = length-1; i >= 0; i--) {
            select.options[i] = null;
          }
      });

      $(document).on('click', '#cerrarModalNueva2', function () {
          var select = document.getElementById("tipoActividadAgregar");
          var length = select.options.length;
          for (i = length-1; i >= 0; i--) {
            select.options[i] = null;
          }
          var select = document.getElementById("actividadClienteAgregar");
          var length = select.options.length;
          for (i = length-1; i >= 0; i--) {
            select.options[i] = null;
          }
          var select = document.getElementById("actividadProfesionalAgregar");
          var length = select.options.length;
          for (i = length-1; i >= 0; i--) {
            select.options[i] = null;
          }
      });

      $(document).on('click', '#cerrarModalActualizar', function () {
          var select = document.getElementById("tipoActividadModificar");
          var length = select.options.length;
          for (i = length-1; i >= 0; i--) {
            select.options[i] = null;
          }
          var select = document.getElementById("actividadClienteModificar");
          var length = select.options.length;
          for (i = length-1; i >= 0; i--) {
            select.options[i] = null;
          }
          var select = document.getElementById("actividadProfesionalModificar");
          var length = select.options.length;
          for (i = length-1; i >= 0; i--) {
            select.options[i] = null;
          }
      });

      $(document).on('click', '#cerrarModalActualizar2', function () {
          var select = document.getElementById("tipoActividadModificar");
          var length = select.options.length;
          for (i = length-1; i >= 0; i--) {
            select.options[i] = null;
          }
          var select = document.getElementById("actividadClienteModificar");
          var length = select.options.length;
          for (i = length-1; i >= 0; i--) {
            select.options[i] = null;
          }
          var select = document.getElementById("actividadProfesionalModificar");
          var length = select.options.length;
          for (i = length-1; i >= 0; i--) {
            select.options[i] = null;
          }
      });

 function verActualizarActividad($id){

    var dato = new Object();
    dato.id = $id; 

        $.ajax({  
             url: 'http://localhost:8182/nomasaccidentes/tipoactividad',  
             type: 'GET',  
             dataType: 'json',
             success: function (data, textStatus, xhr) {  

              var option = '';
    
              for (var i = 0; i < data.length; i++){
                 option += '<option value="'+ data[i].id + '">' + data[i].descripcion + '</option>';
              }

                  $('#tipoActividadModificar').append(option);
                 },
             error: function (xhr, textStatus, errorThrown) {  
                 console.log('Error in Operation');  
             }  
         });

          $.ajax({  
               url: 'http://localhost:8183/nomasaccidentes/usuario/getByRol/3',  
               type: 'GET',  
               dataType: 'json',
               success: function (data, textStatus, xhr) {  

                var option = '';

                for (var i = 0; i < data.length; i++){
                   option += '<option value="'+ data[i].id + '">' + data[i].nombre + '</option>';
                }
                    
                    $('#actividadClienteModificar').append(option);

                   },
               error: function (xhr, textStatus, errorThrown) {  
                   console.log('Error in Operation');  
               }  
           });

          $.ajax({  
               url: 'http://localhost:8183/nomasaccidentes/usuario/getByRol/2',  
               type: 'GET',  
               dataType: 'json',
               success: function (data, textStatus, xhr) {  

                var option = '';

                for (var i = 0; i < data.length; i++){
                   option += '<option value="'+ data[i].id + '">' + data[i].nombre + '</option>';
                }

                    $('#actividadProfesionalModificar').append(option);
                    $('#modalActualizarActividad').modal('show');

                   },
               error: function (xhr, textStatus, errorThrown) {  
                   console.log('Error in Operation');  
               }  
           });

           $.ajax({ 
               url: 'http://localhost:8184/nomasaccidentes/actividad/'+dato.id,
               type: 'GET',  
               dataType: 'json',
              success: function (data, textStatus, xhr) { 

                $('#actividadIdModificar').val(data.id);
                $('#actividadProfesionalModificar').val(data.usuarioProfesional);
                $('#tipoActividadModificar').val(data.tipoActividad);
                $('#descripcionActividadModificar').val(data.descripcion);
                $('#actividadFechaModificar').val(data.fecha);
                idContrato = data.idContrato;

                    $.ajax({ 
                         url: 'http://localhost:8183/nomasaccidentes/usuario/getByIdContrato/'+idContrato,
                         type: 'GET',  
                         dataType: 'json',
                        success: function (data2, textStatus, xhr) { 

                                $('#actividadClienteModificar').val(data2.id);
                                $('#modalActualizarActividad').modal('show');

                       },  
                     error: function (xhr, textStatus, errorThrown) {  
                         console.log('Error in Operation');  
                     }  
                    });

             },  
           error: function (xhr, textStatus, errorThrown) {  
               console.log('Error in Operation');  
           }  
          });

  }



  function verCrearActividad(){

          $.ajax({  
             url: 'http://localhost:8182/nomasaccidentes/tipoactividad',  
             type: 'GET',  
             dataType: 'json',
             success: function (data, textStatus, xhr) {  

              var option = '';
    
              for (var i = 0; i < data.length; i++){
                 option += '<option value="'+ data[i].id + '">' + data[i].descripcion + '</option>';
              }

                  $('#tipoActividadAgregar').append(option);
                 },
             error: function (xhr, textStatus, errorThrown) {  
                 console.log('Error in Operation');  
             }  
         });

          $.ajax({  
               url: 'http://localhost:8183/nomasaccidentes/usuario/getByRol/3',  
               type: 'GET',  
               dataType: 'json',
               success: function (data, textStatus, xhr) {  

                var option = '';

                for (var i = 0; i < data.length; i++){
                   option += '<option value="'+ data[i].id + '">' + data[i].nombre + '</option>';
                }
                    
                    $('#actividadClienteAgregar').append(option);

                   },
               error: function (xhr, textStatus, errorThrown) {  
                   console.log('Error in Operation');  
               }  
           });

            $.ajax({  
               url: 'http://localhost:8183/nomasaccidentes/usuario/getByRol/2',  
               type: 'GET',  
               dataType: 'json',
               success: function (data, textStatus, xhr) {  

                var option = '';

                for (var i = 0; i < data.length; i++){
                   option += '<option value="'+ data[i].id + '">' + data[i].nombre + '</option>';
                }

                    $('#actividadProfesionalAgregar').append(option);
                    $('#modalNuevaActividad').modal('show');

                   },
               error: function (xhr, textStatus, errorThrown) {  
                   console.log('Error in Operation');  
               }  
           });

  }

  function modificarActividad(){

    idCliente = $('#actividadClienteModificar').val();

    $.ajax({  
             url: 'http://localhost:8187/nomasaccidentes/contrato/getByCliente/'+idCliente,
             type: 'GET',  
             dataType: 'json',
           success: function (data, textStatus, xhr) {

                var dato = new Object();
                dato.id = $('#actividadIdModificar').val();
                dato.descripcion = $('#descripcionActividadModificar').val();
                dato.fecha = $('#actividadFechaModificar').val(); 
                dato.tipoActividad = $('#tipoActividadModificar').val();
                dato.usuarioProfesional = $('#actividadProfesionalModificar').val();
                dato.idContrato = data.id;

                     $.ajax({  
                         url: 'http://localhost:8184/nomasaccidentes/actividad',  
                         type: 'PUT',  
                         dataType: 'json',
                         contentType : 'application/json',
                         data: JSON.stringify(dato),
                       success: function (data, textStatus, xhr) {  
                           location.reload();
                       },  
                       error: function (xhr, textStatus, errorThrown) {  
                           console.log('Error in Operation');  
                       }  
                      });
        
           },  
           error: function (xhr, textStatus, errorThrown) {  
               console.log('Error in Operation');  
           }  
          });
  }

  function borrarActividad($id){

    if (confirm("Seguro quieres borrar la actividad ID : " + $id)) {
      
          var dato = new Object();
          dato.id = $id; 
          // console.log(rubro);

         $.ajax({  
             url: 'http://localhost:8184/nomasaccidentes/actividad/'+dato.id,
             type: 'DELETE',  
             dataType: 'json',
             contentType : 'application/json',
             data: JSON.stringify(dato),
           success: function (data, textStatus, xhr) {  
               location.reload();
           },  
           error: function (xhr, textStatus, errorThrown) {  
               console.log('Error in Operation');  
           }  
          });

    } else {
    return false;
    }
  }

  function agregarActividad(){

    idcliente = $('#actividadClienteAgregar').val();


    $.ajax({  
             url: 'http://localhost:8187/nomasaccidentes/contrato/getByCliente/'+idcliente,
             type: 'GET',  
             dataType: 'json',
           success: function (data, textStatus, xhr) {

                  var dato = new Object();
                      dato.descripcion = $('#descripcionActividadAgregar').val();
                      dato.fecha = $('#actividadFechaAgregar').val(); 
                      dato.tipoActividad = $('#tipoActividadAgregar').val();
                      dato.usuario = $('#actividadClienteAgregar').val();
                      dato.usuarioProfesional = $('#actividadProfesionalAgregar').val();  
                      dato.idContrato = data.id;

                  $.ajax({  
                         url: 'http://localhost:8184/nomasaccidentes/actividad',  
                         type: 'POST',  
                         dataType: 'json',
                         contentType : 'application/json',
                         data: JSON.stringify(dato),
                       success: function (data, textStatus, xhr) {  
                           location.reload();

                       },  
                       error: function (xhr, textStatus, errorThrown) {  
                           console.log('Error in Operation');  
                       }  
                      });
           },  
           error: function (xhr, textStatus, errorThrown) {  
               console.log('Error in Operation');  
           }  
          });
  }

  function buscarActividades(){
 
         $.ajax({  
             url: 'http://localhost:8184/nomasaccidentes/actividad',  
             type: 'GET',  
             dataType: 'json',
             success: function (data, textStatus, xhr) {
                  $('#tablaListarActividad').dataTable( {
                      data : data,
                      columns: [
                          {"data" : "id"},
                          {"data" : "descripcionProfesional"},
                          {"data" : "idContrato"},
                          {"data" : "descripcionActividad"},
                          {"data" : "fecha"},
                          {"data" : "descripcionTipoActividad"},
                          {"data": null,
                           render: function ( data, type, row ) {
                            return "<button type='button' class='btn btn-outline-info' onclick='verActualizarActividad("+data.id+")';>Editar</a>";}
                          },
                          {"data": null,
                           render: function ( data, type, row ) {
                              return '<button type="button" class="btn btn-outline-danger" onclick="borrarActividad('+data.id+')";>Eliminar</a>';}
                          }
                        ],
                        'paging'      : true,
                        'lengthChange': false,
                        'searching'   : true,
                        'ordering'    : true,
                        'info'        : true,
                        'autoWidth'   : true,
                        "language": {   
                          "sProcessing":     "Procesando...",
                          "sLengthMenu":     "Mostrar _MENU_ registros",
                          "sZeroRecords":    "No se encontraron resultados",
                          "sEmptyTable":     "Ningún dato disponible en esta tabla",
                          "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                          "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
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
                   // console.log(data);  
               },  
             error: function (xhr, textStatus, errorThrown) {  
                 console.log('Error in Operation');  
             }  
         });
    }

</script>




</body>
</html>
