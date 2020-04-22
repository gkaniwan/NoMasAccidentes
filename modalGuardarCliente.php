      <div class="modal fade" id="modalNuevoCliente">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Nuevo Cliente</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">

            <div class="card card-info">
              <form class="form-horizontal">
                <div class="card-body">
                  <div class="form-group row">
                    <label for="nombreCliente" class="col-sm-2 col-form-label">Nombre</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="nombreCliente" placeholder="Nombre">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="rutEmpresa" class="col-sm-2 col-form-label">Rut</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="rutEmpresa" placeholder="Rut">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="direccioncliente" class="col-sm-2 col-form-label">Dirección</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="direccioncliente" placeholder="Dirección">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="telefonoCliente" class="col-sm-2 col-form-label">Telefono</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="telefonoCliente" placeholder="Telefono">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="emailCliente" class="col-sm-2 col-form-label">E-mail</label>
                    <div class="col-sm-10">
                      <input type="email" class="form-control" id="emailCliente" placeholder="E-mail">
                    </div>
                  </div>
                </div>
              </form>
            </div>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
              <button type="button" class="btn btn-success">Guardar</button>
            </div>
          </div>
        </div>
      </div>