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
                    <label for="rutEmpresa" class="col-sm-2 col-form-label">Rut Cliente</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="rutClienteAgregar" placeholder="Rut Cliente">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="nombreCliente" class="col-sm-2 col-form-label">Nombre</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="nombreClienteAgregar" placeholder="Nombre">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="direccioncliente" class="col-sm-2 col-form-label">Dirección</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="direccionclienteAgregar" placeholder="Dirección">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="telefonoCliente" class="col-sm-2 col-form-label">Telefono 1</label>
                    <div class="col-sm-10">
                      <input type="number" class="form-control" id="telefonoClienteUnoAgregar" placeholder="Telefono">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="telefonoCliente" class="col-sm-2 col-form-label">Telefono 2</label>
                    <div class="col-sm-10">
                      <input type="number" class="form-control" id="telefonoClienteDosAgregar" placeholder="Telefono">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="emailCliente" class="col-sm-2 col-form-label">E-mail</label>
                    <div class="col-sm-10">
                      <input type="email" class="form-control" id="emailClienteAgregar" placeholder="E-mail">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="emailCliente" class="col-sm-2 col-form-label">Contraseña</label>
                    <div class="col-sm-10">
                      <input type="password" class="form-control" id="contrasenaClienteAgregar" placeholder="*******">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="emailCliente" class="col-sm-2 col-form-label">Rubro</label>
                    <div class="col-sm-10">
                      <select class="form-contro" id="selectRubroClienteAgregar">
                        <option value="1">Construcción</option>
                        <option value="2">Minera</option>
                        <option value="3">Industrial</option>
                      </select>
                    </div>
                  </div>
                </div>
              </form>
            </div>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
              <button type="button" class="btn btn-success" onclick="agregarCliente();">Guardar</button>
            </div>
          </div>
        </div>
      </div>