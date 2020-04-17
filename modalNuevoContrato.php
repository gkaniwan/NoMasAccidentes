      <div class="modal fade" id="modalNuevoContrato">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Nuevo Contrato</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">

            <!-- Horizontal Form -->
            <div class="card card-info">
              <!-- form start -->
              <form class="form-horizontal">
                <div class="card-body">
                  <div class="form-group row">
                    <label for="nombreCliente" class="col-sm-2 col-form-label">Nombre Cliente</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="nombreCliente" placeholder="Nombre Cliente">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="rutEmpresa" class="col-sm-2 col-form-label">Fecha Inicio</label>
                    <div class="col-sm-10">
                      <input type="date" class="form-control" id="rutEmpresa" placeholder="Rut">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="telefonoCliente" class="col-sm-2 col-form-label">Precio</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="telefonoCliente" placeholder="Precio">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="emailCliente" class="col-sm-2 col-form-label">Descripción</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="emailCliente" placeholder="Descripcion contrato">
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
              </form>
            </div>
            <!-- /.card -->
              
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
              <button type="button" class="btn btn-success">Guardar</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->