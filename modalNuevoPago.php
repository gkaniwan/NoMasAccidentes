      <div class="modal fade" id="modalNuevoPago">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Nuevo Pago</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close" id="cerrarModalNuevoPago">
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
                    <label for="idContratoNuevoPago" class="col-sm-2 col-form-label">Contrato</label>
                    <div class="col-sm-10">
                      <select class="form-control" id="idContratoNuevoPago">
                        
                      </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="fechaNuevoPago" class="col-sm-2 col-form-label">Fecha Pago</label>
                    <div class="col-sm-10">
                      <input type="date" class="form-control" id="fechaNuevoPago">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="detalleNuevoPago" class="col-sm-2 col-form-label">Detalle</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="detalleNuevoPago" placeholder="Detalle pago">
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
              </form>
            </div>
            <!-- /.card -->
              
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal" id="cerrarModalNuevoPago2">Cerrar</button>
              <button type="button" class="btn btn-success" onclick="agregarPago();">Guardar</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->