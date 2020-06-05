      <div class="modal fade" id="modalActualizarExtra">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Actualizar Extra</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close" id="cerrarModalActualizarExtra2">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">

            <div class="card card-info">
              <form class="form-horizontal">
                <div class="card-body">
                  <div class="form-group row">
                    <label for="idExtraModificar" class="col-sm-2 col-form-label">ID Extra</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="idExtraModificar" disabled>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="actualizarExtraActividad" class="col-sm-2 col-form-label">ID Actividad</label>
                    <div class="col-sm-10">
                      <select class="form-control" id="actualizarExtraActividad">
                        
                      </select>

                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="valorExtraActualizar" class="col-sm-2 col-form-label">Valor</label>
                    <div class="col-sm-10">
                      <input type="number" class="form-control" id="valorExtraActualizar" placeholder="">
                    </div>
                  </div>
                </div>
              </form>
            </div>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal" id="cerrarModalActualizarExtra">Cerrar</button>
              <button type="button" class="btn btn-success" onclick="modificarExtra();">Guardar</button>
            </div>
          </div>
        </div>
      </div>