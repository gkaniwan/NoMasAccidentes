      <div class="modal fade" id="modalActualizarActividad">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Actualizar Actividad</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close" id="cerrarModalActualizar2">
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
                    <label for="actividadIdModificar" class="col-sm-2 col-form-label">ID</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="actividadIdModificar" disabled >
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="actividadClienteModificar" class="col-sm-2 col-form-label">Cliente</label>
                    <div class="col-sm-10">
                      <select class="form-control" id="actividadClienteModificar">

                      </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="actividadProfesionalModificar" class="col-sm-2 col-form-label">Profesional</label>
                    <div class="col-sm-10">
                      <select class="form-control" id="actividadProfesionalModificar">

                      </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="actividadFechaModificar" class="col-sm-2 col-form-label">Fecha</label>
                    <div class="col-sm-10">
                      <input type="date" class="form-control" id="actividadFechaModificar" >
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="tipoActividadModificar" class="col-sm-2 col-form-label">Tipo Actividad</label>
                    <div class="col-sm-10">
                      <select class="form-control" id="tipoActividadModificar">
                        
                      </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="descripcionActividadModificar" class="col-sm-2 col-form-label">Descripción</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="descripcionActividadModificar" placeholder="Descripción actividad">
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
              </form>
            </div>
            <!-- /.card -->
              
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal" id="cerrarModalActualizar">Cerrar</button>
              <button type="button" class="btn btn-success" onclick="modificarActividad();">Guardar</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->