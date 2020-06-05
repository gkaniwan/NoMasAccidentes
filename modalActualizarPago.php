      <div class="modal fade" id="modalActualizarPago">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Actualizar Pago</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close" id="cerrarModalActualizarPago">
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
                    <label for="idPagoActualizar" class="col-sm-2 col-form-label">Id Pago</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="idPagoActualizar" disabled>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="idContratoActualizarPago" class="col-sm-2 col-form-label">Id Contrato</label>
                    <div class="col-sm-10">
                      <select class="form-control" id="idContratoActualizarPago">
                        
                      </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="actualizarFechaPago" class="col-sm-2 col-form-label">Fecha Pago</label>
                    <div class="col-sm-10">
                      <input type="date" class="form-control" id="actualizarFechaPago">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="actualizarDetallePago" class="col-sm-2 col-form-label">Detalle</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="actualizarDetallePago" placeholder="Detalle pago">
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
              </form>
            </div>
            <!-- /.card -->
              
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal" id="cerrarModalActualizarPago2">Cerrar</button>
              <button type="button" class="btn btn-success" onclick="modificarPago();">Guardar</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->