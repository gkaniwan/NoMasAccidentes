      <div class="modal fade" id="modalActualizarUsuarios">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Actualizar Usuario</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close" id="cerrarModalActualizar2">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">

            <div class="card card-info">
              <form class="form-horizontal">
                <div class="card-body">
                  <div class="form-group row">
                    <label for="IdUsuarioModificar" class="col-sm-2 col-form-label">Id Usuario</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="IdUsuarioModificar" placeholder="ID Usuario" disabled>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="rutUsuarioModificar" class="col-sm-2 col-form-label">Rut Usuario</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="rutUsuarioModificar" placeholder="Rut Usuario" disabled>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="nombreUsuarioModificar" class="col-sm-2 col-form-label">Nombre</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="nombreUsuarioModificar" placeholder="Nombre">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="direccionUsuarioModificar" class="col-sm-2 col-form-label">Dirección</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="direccionUsuarioModificar" placeholder="Dirección">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="telefonoUsuarioModificar" class="col-sm-2 col-form-label">Telefono</label>
                    <div class="col-sm-10">
                      <input type="number" class="form-control" id="telefonoUsuarioModificar" placeholder="Telefono">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="emailUsuarioModificar" class="col-sm-2 col-form-label">E-mail</label>
                    <div class="col-sm-10">
                      <input type="email" class="form-control" id="emailUsuarioModificar" placeholder="E-mail">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="contrasenaUsuarioModificar" class="col-sm-2 col-form-label">Contraseña</label>
                    <div class="col-sm-10">
                      <input type="password" class="form-control" id="contrasenaUsuarioModificar" placeholder="*******">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="selectRolUsuarioModificar" class="col-sm-2 col-form-label">Rol</label>
                    <div class="col-sm-10">
                      <select class="form-control" id="selectRolUsuarioModificar">
<!--                         <option value="1">Administrador</option>
                        <option value="2">Profesional</option>
                        <option value="3">Cliente</option> -->
                      </select>
                    </div>
                  </div>
                </div>
              </form>
            </div>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal" id="cerrarModalActualizar">Cerrar</button>
              <button type="button" class="btn btn-success" onclick="modificarUsuario();">Guardar</button>
            </div>
          </div>
        </div>
      </div>