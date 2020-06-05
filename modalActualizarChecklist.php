      <div class="modal fade" id="modalActualizarChecklist">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Actualizar Checklist</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close" id="cerrarActualizarChecklist2">
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
                    <label for="idChecklistModificar" class="col-sm-2 col-form-label">ID Checklist</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="idChecklistModificar" placeholder="Descripción mejora">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="nombreClienteChecklistActualizar" class="col-sm-2 col-form-label">Cliente</label>
                    <div class="col-sm-10">
                      <select class="form-control" id="nombreClienteChecklistActualizar">

                      </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="nombreProfesionalChecklistActualizar" class="col-sm-2 col-form-label">Profesional</label>
                    <div class="col-sm-10">
                      <select class="form-control" id="nombreProfesionalChecklistActualizar">

                      </select>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="fechaChecklistActualizar" class="col-sm-2 col-form-label">Fecha</label>
                    <div class="col-sm-10">
                      <input type="date" class="form-control" id="fechaChecklistActualizar" >
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="actividadesChecklistActualizar" class="col-sm-2 col-form-label">Actividades</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="actividadesChecklistActualizar" placeholder="Descripción mejora">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="mejorasChecklistActualizar" class="col-sm-2 col-form-label">Mejoras</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="mejorasChecklistActualizar" placeholder="Descripción mejora">
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
              </form>
            </div>
            <!-- /.card -->
              
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal" id="cerrarActualizarChecklist">Cerrar</button>
              <button type="button" class="btn btn-success" onclick="modificarChecklist();">Guardar</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->