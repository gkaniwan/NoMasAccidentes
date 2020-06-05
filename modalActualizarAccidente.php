      <div class="modal fade" id="modalActualizarAccidente">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Actualizar Accidente</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close" id="cerrarActualizarAccidente2">
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
                    <label for="idAccidenteActualizar" class="col-sm-2 col-form-label">ID Accidente</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="idAccidenteActualizar">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="nombreClienteActualizar" class="col-sm-2 col-form-label">Cliente</label>
                    <div class="col-sm-10">
                      <select class="form-control" id="nombreClienteActualizar">

                      </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="nombreProfesionalActualizar" class="col-sm-2 col-form-label">Profesional</label>
                    <div class="col-sm-10">
                      <select class="form-control" id="nombreProfesionalActualizar">

                      </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="fechaActualizarAccidente" class="col-sm-2 col-form-label">Fecha</label>
                    <div class="col-sm-10">
                      <input type="date" class="form-control" id="fechaActualizarAccidente">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="descripcionNuevaActividad" class="col-sm-2 col-form-label">Descripción</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="descripcionActualizarAccidente" placeholder="Descripción accidente">
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
              </form>
            </div>
            <!-- /.card -->
              
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal"  id="cerrarActualizarAccidente">Cerrar</button>
              <button type="button" class="btn btn-success" onclick="modificarAccidente();">Guardar</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->