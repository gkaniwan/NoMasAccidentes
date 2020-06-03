      <div class="modal fade" id="modalNuevoContrato">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Nuevo Contrato</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close" id="cerrarModalNuevoContrato2">
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
                    <label for="nuevoClienteAgregar" class="col-sm-2 col-form-label">Cliente</label>
                    <div class="col-sm-10">
                      <select class="form-control" id="nuevoClienteAgregar">
                        
                      </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="fechaInicioContrato" class="col-sm-2 col-form-label">Fecha Inicio</label>
                    <div class="col-sm-10">
                      <input type="date" class="form-control" id="fechaInicioContrato" placeholder="Rut">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="precioContrato" class="col-sm-2 col-form-label">Precio</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="precioContrato" placeholder="Precio">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="descripcionContrato" class="col-sm-2 col-form-label">Descripción</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="descripcionContrato" placeholder="Descripcion contrato">
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
              </form>
            </div>
            <!-- /.card -->
              
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal" id="cerrarModalNuevoContrato">Cerrar</button>
              <button type="button" class="btn btn-success" onclick="agregarContrato();">Guardar</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->