<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>No Mas Accidentes | Mantenedor Roles</title>
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
<body class="hold-transition sidebar-mini" onload="buscarRoles();">
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
            <h1>Mantenedor Roles</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="inicioAdmin.php">Inicio</a></li>
              <li class="breadcrumb-item active">Mantenedor Roles</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

       <div class="card">
        <div class="card-header">
          <h3 class="card-title">Roles</h3>
          
          <div class="card-tools">
            <button type="button" class="btn btn-sm btn-block btn-outline-success" onclick="verCrearRol();">Agregar Rol</button>
            <!-- <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fas fa-times"></i></button> -->
          </div>
        </div>
        <div class="card-body">
          <div class="form-group" id="tablaRoles">
              <table class='table table-bordered table-striped display' style='width:100%' id='tablaListarRoles'>
                      <thead>
                        <tr>
                            <th>ID Rol</th>
                            <th>Descripción</th>
                            <th></th>
                            <th></th>
                        </tr>
                      </thead>
                    <tbody>

                      </tbody>
                </table>
            </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer" align="right">
          <!-- <button type="button" class="btn btn-success">boton</button> -->
        </div>
        <!-- /.card-footer-->
      </div>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?php include('modalActualizarRol.php');?>
  <?php include('modalNuevoRol.php');?>

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


<!-- OPTIONAL SCRIPTS -->
<!-- <script src="plugins/chart.js/Chart.min.js"></script>
<script src="dist/js/demo.js"></script>
<script src="dist/js/pages/dashboard3.js"></script> -->

<script>

    $(document).ready(function () {  

    nombreUsuario = localStorage.getItem('NOMBRE');
    $('#NombreUsuario').html(nombreUsuario);
      console.log(nombreUsuario);

   });  
  
  function verActualizarRol($IDRol){

     var rol = new Object();
          rol.id = $IDRol; 
          console.log(rol);


         $.ajax({ 
             url: 'http://localhost:8181/nomasaccidentes/rol/'+rol.id,
             type: 'GET',  
             dataType: 'json',
           success: function (data, textStatus, xhr) {  
              $("#idRolModificar").val(data.id);
              $("#tipoRolModificar").val(data.descripcion);
             
              $('#modalActualizarRol').modal('show');
           },  
           error: function (xhr, textStatus, errorThrown) {  
               console.log('Error in Operation');  
           }  
          });
  }

  function verCrearRol(){

    // dato6 = 6;
    
    // $.ajax({
    //     url: "./funciones/funcionRubro.php",
    //     type:"POST",
    //     data:{dato6 : dato6},
    //     cache:false,
    //     success:function(resultado){

    //       $('#IDRubroAgregar').val(resultado);
          $('#modalNuevoRol').modal('show');
    //     }

    // });
  }

    function modificarRol(){

    var rol = new Object();
    rol.id = $('#idRolModificar').val(); 
    rol.descripcion = $('#tipoRolModificar').val(); 
    // console.log(rubro);

   $.ajax({  
       url: 'http://localhost:8181/nomasaccidentes/rol',  
       type: 'PUT',  
       dataType: 'json',
       contentType : 'application/json',
       data: JSON.stringify(rol),
     success: function (data, textStatus, xhr) {  
         location.reload();
     },  
     error: function (xhr, textStatus, errorThrown) {  
         console.log('Error in Operation');  
     }  
    });
  }

  function borrarRol($IDRol){

    if (confirm("Seguro quieres borrar el Rol ID : " + $IDRol)) {
      
          var rol = new Object();
          rol.id = $IDRol; 
          // console.log(rubro);

         $.ajax({  
             url: 'http://localhost:8181/nomasaccidentes/rol/'+rol.id,
             type: 'DELETE',  
             dataType: 'json',
             contentType : 'application/json',
             data: JSON.stringify(rol),
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

  function agregarRol(){

    var rol = new Object();
    rol.descripcion = $('#tipoRolAgregar').val(); 
    // console.log(rubro);

   $.ajax({  
       url: 'http://localhost:8181/nomasaccidentes/rol',  
       type: 'POST',  
       dataType: 'json',
       contentType : 'application/json',
       data: JSON.stringify(rol),
     success: function (data, textStatus, xhr) {  
         location.reload();
     },  
     error: function (xhr, textStatus, errorThrown) {  
         console.log('Error in Operation');  
     }  
    });
  }


  function buscarRoles(){
 
         $.ajax({  
             url: 'http://localhost:8181/nomasaccidentes/rol',  
             type: 'GET',  
             dataType: 'json',
             success: function (data, textStatus, xhr) {  
                  
                  $('#tablaListarRoles').dataTable( {
                      data : data,
                      columns: [
                          {"data" : "id"},
                          {"data" : "descripcion"},
                          {"data": null,
                           render: function ( data, type, row ) {
                            return "<button type='button' class='btn btn-outline-info' onclick='verActualizarRol("+data.id+")';>Editar</a>";}
                          },
                          {"data": null,
                           render: function ( data, type, row ) {
                              return '<button type="button" class="btn btn-outline-danger" onclick="borrarRol('+data.id+')";>Eliminar</a>';}
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

    // function buscarRubros(){

    //   dato1 = 1;

    //     $.ajax({
    //         url:"./funciones/funcionRubro.php",
    //         type: "POST",
    //         data: {dato1 : dato1},
    //         cache: false,
    //         beforeSend: function () {
    //               $("#tablaRubros").html("Procesando, espere por favor...");
    //           },
    //         success: function(resultado) {

    //               $('#tablaRubros').html(resultado);
    //           },
    //         complete: function(){

    //           var myTable =  $('#tablaListarRubros').DataTable( {
    //               'paging'      : true,
    //               'lengthChange': false,
    //               'searching'   : true,
    //               'ordering'    : true,
    //               'info'        : true,
    //               'autoWidth'   : true,
    //               "lengthMenu": [[10, 20, 50, 100], [10, 20, 50, 100]],
    //               // "order": [[ 2, "asc" ]],
    //               dom: 'Bfrtip',
    //               // buttons: ['copy', 'excel', 'pdf'],
    //               "columnDefs": [
    //                         {"className": "dt-center", "targets": "_all"}
    //                       ],
    //               "language": {   
    //                             "sProcessing":     "Procesando...",
    //                             "sLengthMenu":     "Mostrar _MENU_ registros",
    //                             "sZeroRecords":    "No se encontraron resultados",
    //                             "sEmptyTable":     "Ningún dato disponible en esta tabla",
    //                             "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
    //                             "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
    //                             "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
    //                             "sInfoPostFix":    "",
    //                             "sSearch":         "Buscar:",
    //                             "sUrl":            "",
    //                             "sInfoThousands":  ",",
    //                             "sLoadingRecords": "Cargando...",
    //                             "oPaginate": { "sFirst":    "Primero",
    //                                            "sLast":     "Último",
    //                                            "sNext":     "Siguiente",
    //                                            "sPrevious": "Anterior" },
    //                             "oAria": { "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
    //                                        "sSortDescending": ": Activar para ordenar la columna de manera descendente" },
    //                             "buttons": { "copy": "Copiar",
    //                                          "colvis": "Visibilidad" }
    //                           }
    //         } );
    //         },
    //     });
    // }
         
  //     function agregarRubro(){

  //   dato2 = 2;
  //   IDRubro = $('#IDRubroAgregar').val();
  //   Tipo = $('#tipoRubroAgregar').val();

  //   console.log(IDRubro ,Tipo);
    
  //   $.ajax({
  //       url: "./funciones/funcionRubro.php",
  //       type:"POST",
  //       data:{dato2 : dato2, IDRubro : IDRubro, Tipo : Tipo},
  //       cache:false,
  //       success:function(resultado){
  //         console.log(resultado);

  //         alert("Rubro Agregado");
  //         setTimeout(function(){
  //          location.reload(); 
  //           }, 1000); 
  //       }

  //   });
  // }

  // function borrarRubro($IDRubro){

  //   if (confirm("Seguro quieres borrar el Rubro ID : " + $IDRubro)) {
  //     // console.log("hola");
  //     dato3 = 3;
  //     IDRubro = $IDRubro[0];

  //     $.ajax({
  //       url: "./funciones/funcionRubro.php",
  //       type:"POST",
  //       data:{dato3 : dato3, IDRubro : IDRubro},
  //       cache:false,
  //       success:function(resultado){
  //         if(resultado == 'OK'){
  //           alert("Rubro borrado exitosamente");
  //           setTimeout(function(){
  //            location.reload(); 
  //             }, 1000); 
  //         }

  //       }

  //     });

  //   } else {
  //   return false;
  //   }

  // }


  //     function modificarRubro(){

  //   dato5 = 5;
  //   IDRubro = $('#idRubroModificar').val();
  //   Tipo = $('#tipoRubroModificar').val();
  

  //   $.ajax({
  //       url: "./funciones/funcionRubro.php",
  //       type:"POST",
  //       data:{dato5 : dato5, IDRubro : IDRubro, Tipo : Tipo},
  //       cache:false,
  //       success:function(resultado){
  //         if(resultado == 'OK'){
  //           alert("Rubro Modificado");

  //           setTimeout(function(){
  //           location.reload(); 
  //           }, 1000); 

  //         }
  //       }

  //   });

  // }

  //   function verActualizarRubro($IDRubro){

  //   console.log($IDRubro);
  //   dato4 = 4;
  //   IDRubro = $IDRubro;

  //       $.ajax({
  //       url: "./funciones/funcionRubro.php",
  //       type:"POST",
  //       data:{dato4 : dato4, IDRubro : IDRubro},
  //       dataType: 'json',
  //       cache:false,
  //       success:function(resultado){
  //         console.log(resultado);
  //         $("#idRubroModificar").val(resultado[0].IDRubro);
  //         $("#tipoRubroModificar").val(resultado[0].Tipo);
         
  //         $('#modalActualizarRubro').modal('show');
  //       }

  //   });

  // }

</script>




</body>
</html>
