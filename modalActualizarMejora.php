      <div class="modal fade" id="modalActualizarMejora">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Actualizar Mejora</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close" id="cerrarModalActualizarMejora2">
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
                    <label for="idMejoraActualizar" class="col-sm-2 col-form-label">ID</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="idMejoraActualizar" disabled>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="nombreClienteMejoraActualizar" class="col-sm-2 col-form-label">Cliente</label>
                    <div class="col-sm-10">
                      <select class="form-control" id="nombreClienteMejoraActualizar">

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
                    <label for="descripcionMejoraActualizar" class="col-sm-2 col-form-label">Descripción</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="descripcionMejoraActualizar" placeholder="Descripción Mejora">
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
              </form>
            </div>
            <!-- /.card -->
              
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal" id="cerrarModalActualizarMejora">Cerrar</button>
              <button type="button" class="btn btn-success" onclick="modificarMejora();">Guardar</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->