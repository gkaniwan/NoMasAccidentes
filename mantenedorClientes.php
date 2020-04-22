<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>No Mas Accidentes | Mantenedor Clientes</title>
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
<body class="hold-transition sidebar-mini">
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
          <a href="#" class="d-block">Nombre Usuario</a>
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
                <a href="mantenedorClientes.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Clientes</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="mantenedorProfesionales.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Profesionales</p>
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
            <h1>Mantenedor Clientes</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="inicioAdmin.php">Inicio</a></li>
              <li class="breadcrumb-item active">Mantenedor Clientes</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="row">

         <div class="col-lg-12">

            <div class="card">
              <div class="card-header border-0">
                <h3 class="card-title">Clientes</h3>
                <div class="card-tools">
                  <button type="button" class="btn btn-sm btn-block btn-outline-success" onclick="verCrearCliente();">Agregar</button>
                </div>
              <div class="card-body table-responsive p-0">
                <table class="table table-striped table-valign-middle">
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Rut</th>
                    <th>Mail</th>
                    <th>Telefono</th>
                    <th>Direccion</th>
                    <th></th>
                    <th></th>
                  </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>Cliente 1</td>
                      <td>123456-7</td>
                      <td>Cliente1@clientes.cl</td>
                      <td>12345678</td>
                      <td>Calle Sin nombre 100</td>
                      <td>
                        <button type="button" class="btn btn-sm btn-block btn-outline-warning" onclick="verActualizarCliente();">Modificar</button>
                      </td>
                      <td>
                        <button type="button" class="btn btn-sm btn-block btn-outline-danger">Eliminar</button>
                      </td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>Cliente 2</td>
                      <td>7984570-7</td>
                      <td>Cliente2@clientes.cl</td>
                      <td>13578942</td>
                      <td>Calle Sin nombre 159</td>
                      <td>
                        <button type="button" class="btn btn-sm btn-block btn-outline-warning" onclick="verActualizarCliente();">Modificar</button>
                      </td>
                      <td>
                        <button type="button" class="btn btn-sm btn-block btn-outline-danger">Eliminar</button>
                      </td>
                    </tr>
                    <tr>
                      <td>3</td>
                      <td>Cliente 3</td>
                      <td>98745612-5</td>
                      <td>Cliente3@clientes.cl</td>
                      <td>7539518</td>
                      <td>Calle Sin nombre 875</td>
                      <td>
                        <button type="button" class="btn btn-sm btn-block btn-outline-warning" onclick="verActualizarCliente();">Modificar</button>
                      </td>
                      <td>
                        <button type="button" class="btn btn-sm btn-block btn-outline-danger">Eliminar</button>
                      </td>
                    </tr>
                    <tr>
                      <td>4</td>
                      <td>Cliente 4</td>
                      <td>8527410-7</td>
                      <td>Cliente4@clientes.cl</td>
                      <td>96385274</td>
                      <td>Calle Sin nombre 684</td>
                      <td>
                        <button type="button" class="btn btn-sm btn-block btn-outline-warning" onclick="verActualizarCliente();">Modificar</button>
                      </td>
                      <td>
                        <button type="button" class="btn btn-sm btn-block btn-outline-danger">Eliminar</button>
                      </td>
                    </tr>
                    <tr>
                      <td>5</td>
                      <td>Cliente 5</td>
                      <td>7894561-7</td>
                      <td>Cliente5@clientes.cl</td>
                      <td>36985214</td>
                      <td>Calle Sin nombre 24</td>
                      <td>
                        <button type="button" class="btn btn-sm btn-block btn-outline-warning" onclick="verActualizarCliente();">Modificar</button>
                      </td>
                      <td>
                        <button type="button" class="btn btn-sm btn-block btn-outline-danger">Eliminar</button>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col-md-6 -->
        </div>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?php include('modalActualizarcliente.php');?>
  <?php include('modalGuardarCliente.php');?>

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



<!-- OPTIONAL SCRIPTS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<script src="dist/js/demo.js"></script>
<script src="dist/js/pages/dashboard3.js"></script>

<script>
  
  function verActualizarCliente(){

    $('#modalActualizarCliente').modal('show');

  }

    function verCrearCliente(){

    $('#modalNuevoCliente').modal('show');

  }

</script>




</body>
</html>
