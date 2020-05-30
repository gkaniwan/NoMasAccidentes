      <div class="modal fade" id="modalActualizarTipoActividad">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Actualizar Tipo Actividad</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">

            <div class="card card-info">
              <form class="form-horizontal">
                <div class="card-body">
                  <div class="form-group row">
                    <label for="idTipoActividadModificar" class="col-sm-2 col-form-label">ID Tipo Actividad</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="idTipoActividadModificar" disabled>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="tipoTipoActividadModificar" class="col-sm-2 col-form-label">Descripción</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="tipoTipoActividadModificar" placeholder="Descripción">
                    </div>
                  </div>
                </div>
              </form>
            </div>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
              <button type="button" class="btn btn-success" onclick="modificarTipoActividad();">Guardar</button>
            </div>
          </div>
        </div>
      </div>