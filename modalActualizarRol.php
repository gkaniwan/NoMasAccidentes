      <div class="modal fade" id="modalActualizarRol">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Actualizar ROL</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">

            <div class="card card-info">
              <form class="form-horizontal">
                <div class="card-body">
                  <div class="form-group row">
                    <label for="idRolModificar" class="col-sm-2 col-form-label">ID ROL</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="idRolModificar" disabled>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="tipoRolModificar" class="col-sm-2 col-form-label">Descripción Rol</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="tipoRolModificar" placeholder="Descripción">
                    </div>
                  </div>
                </div>
              </form>
            </div>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
              <button type="button" class="btn btn-success" onclick="modificarRol();">Guardar</button>
            </div>
          </div>
        </div>
      </div>