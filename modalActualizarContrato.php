      <div class="modal fade" id="modalActualizarContrato">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Actualizar Contrato</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close" id="cerrarModalActualizarContrato2">
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
                    <label for="IDContratoActualizar" class="col-sm-2 col-form-label">ID Contrato</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="IDContratoActualizar" placeholder="" disabled>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="nombreClienteActualizar" class="col-sm-2 col-form-label">Nombre Cliente</label>
                    <div class="col-sm-10">
                      <select class="form-control" id="nombreClienteActualizar">
                        
                      </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="fechaInicioActualizar" class="col-sm-2 col-form-label">Fecha Inicio</label>
                    <div class="col-sm-10">
                      <input type="date" class="form-control" id="fechaInicioActualizar">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="precioActualizar" class="col-sm-2 col-form-label">Precio</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="precioActualizar" placeholder="Precio">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="descripcionActualizar" class="col-sm-2 col-form-label">Descripción</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="descripcionActualizar" placeholder="Descripción">
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
              </form>
            </div>
            <!-- /.card -->
              
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal" id="cerrarModalActualizarContrato">Cerrar</button>
              <button type="button" class="btn btn-success" onclick="modificarContrato();">Guardar</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->