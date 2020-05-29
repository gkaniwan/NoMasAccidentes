      <div class="modal fade" id="modalNuevoUsuario">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Nuevo Usuario</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">

            <div class="card card-info">
              <form class="form-horizontal">
                <div class="card-body">
                  <div class="form-group row">
                    <label for="rutUsuarioAgregar" class="col-sm-2 col-form-label">Rut Usuario</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="rutUsuarioAgregar" placeholder="Rut Usuario">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="nombreUsuarioAgregar" class="col-sm-2 col-form-label">Nombre</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="nombreUsuarioAgregar" placeholder="Nombre">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="direccionUsuarioAgregar" class="col-sm-2 col-form-label">Dirección</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="direccionUsuarioAgregar" placeholder="Dirección">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="telefonoUsuarioAgregar" class="col-sm-2 col-form-label">Telefono</label>
                    <div class="col-sm-10">
                      <input type="number" class="form-control" id="telefonoUsuarioAgregar" placeholder="Telefono">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="emailUsuarioAgregar" class="col-sm-2 col-form-label">E-mail</label>
                    <div class="col-sm-10">
                      <input type="email" class="form-control" id="emailUsuarioAgregar" placeholder="E-mail">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="contrasenaUsuarioAgregar" class="col-sm-2 col-form-label">Contraseña</label>
                    <div class="col-sm-10">
                      <input type="password" class="form-control" id="contrasenaUsuarioAgregar" placeholder="*******">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="selectRolUsuarioAgregar" class="col-sm-2 col-form-label">Rubro</label>
                    <div class="col-sm-10">
                      <select class="form-contro" id="selectRolUsuarioAgregar">
                        <option value="1">Administrador</option>
                        <option value="2">Profesional</option>
                        <option value="3">Cliente</option>
                      </select>
                    </div>
                  </div>
                </div>
              </form>
            </div>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
              <button type="button" class="btn btn-success" onclick="agregarUsuario();">Guardar</button>
            </div>
          </div>
        </div>
      </div>