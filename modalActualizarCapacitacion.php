      <div class="modal fade" id="modalActualizarCapacitacion">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Actualizar Capacitación</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close" id="cerrarModalActualizarCapacitacion2" >
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
                    <label for="idCapacitacionActualizar" class="col-sm-2 col-form-label">ID</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="idCapacitacionActualizar" disabled>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="nombreClienteCapacitacionActualizar" class="col-sm-2 col-form-label">Cliente</label>
                    <div class="col-sm-10">
                      <select class="form-control" id="nombreClienteCapacitacionActualizar">

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
                    <label for="descripcionCapacitacionActualizar" class="col-sm-2 col-form-label">Descripción</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="descripcionCapacitacionActualizar" placeholder="Descripción Capacitación">
                    </div>
                  </div>
                                    <div class="form-group row">
                    <label for="asistentesCapacitacionActualizar" class="col-sm-2 col-form-label">Asistentes</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="asistentesCapacitacionActualizar" placeholder="Descripción Capacitación">
                    </div>
                  </div>
                                    <div class="form-group row">
                    <label for="materialCapacitacionActualizar" class="col-sm-2 col-form-label">Material</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="materialCapacitacionActualizar" placeholder="Descripción Capacitación">
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
              </form>
            </div>
            <!-- /.card -->
              
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal" id="cerrarModalActualizarCapacitacion">Cerrar</button>
              <button type="button" class="btn btn-success" onclick="modificarCapacitacion();">Guardar</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->