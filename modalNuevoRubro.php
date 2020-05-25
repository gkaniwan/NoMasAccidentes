      <div class="modal fade" id="modalNuevoRubro">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Nuevo Rubro</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">

            <div class="card card-info">
              <form class="form-horizontal">
                <div class="card-body">
                  <div class="form-group row">
                    <label for="IDRubroAgregar" class="col-sm-2 col-form-label">ID Rubro</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="IDRubroAgregar" disabled>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="tipoRubroAgregar" class="col-sm-2 col-form-label">Tipo Rubro</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="tipoRubroAgregar" placeholder="Descripcion Tipo Rubro">
                    </div>
                  </div>
                </div>
              </form>
            </div>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
              <button type="button" class="btn btn-success" onclick="agregarRubro();">Guardar</button>
            </div>
          </div>
        </div>
      </div>