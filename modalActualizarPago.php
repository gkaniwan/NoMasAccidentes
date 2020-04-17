      <div class="modal fade" id="modalActualizarPago">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Actualizar Pago</h4>
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
                    <label for="actualizarContratoPago" class="col-sm-2 col-form-label">Contrato</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="actualizarContratoPago" placeholder="Contrato">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="actualizarFechaPago" class="col-sm-2 col-form-label">Fecha Pago</label>
                    <div class="col-sm-10">
                      <input type="date" class="form-control" id="actualizarFechaPago">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="actualizarValorPago" class="col-sm-2 col-form-label">Valor</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="actualizarValorPago" placeholder="Precio">
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
              <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
              <button type="button" class="btn btn-success">Guardar</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->