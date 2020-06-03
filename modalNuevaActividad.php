      <div class="modal fade" id="modalNuevaActividad">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Nueva Actividad</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close" id="cerrarModalNueva2">
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
                    <label for="actividadClienteAgregar" class="col-sm-2 col-form-label">Cliente</label>
                    <div class="col-sm-10">
                      <select class="form-control" id="actividadClienteAgregar">
                        
                      </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="actividadProfesionalAgregar" class="col-sm-2 col-form-label">Profesional</label>
                    <div class="col-sm-10">
                      <select class="form-control" id="actividadProfesionalAgregar">
                        
                      </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="actividadFechaAgregar" class="col-sm-2 col-form-label">Fecha</label>
                    <div class="col-sm-10">
                      <input type="date" class="form-control" id="actividadFechaAgregar" >
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="tipoActividadAgregar" class="col-sm-2 col-form-label">Tipo Actividad</label>
                    <div class="col-sm-10">
                      <select class="form-control" id="tipoActividadAgregar">

                      </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="descripcionActividadAgregar" class="col-sm-2 col-form-label">Descripción</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="descripcionActividadAgregar" placeholder="Descripción actividad">
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
              </form>
            </div>
            <!-- /.card -->
              
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal" id="cerrarModalNueva">Cerrar</button>
              <button type="button" class="btn btn-success" onclick="agregarActividad();">Guardar</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->