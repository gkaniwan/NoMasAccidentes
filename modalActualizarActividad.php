      <div class="modal fade" id="modalActualizarActividad">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Actualizar Actividad</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
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
                    <label for="nombreProfesionalActividad2" class="col-sm-2 col-form-label">Profesional</label>
                    <div class="col-sm-10">
                      <select class="form-control" id="nombreProfesionalActividad2">
                        <option value="profesional1">Profesional 1</option>
                        <option value="profesional2">Profesional 2</option>
                        <option value="profesional3">Profesional 3</option>
                        <option value="profesional4">Profesional 4</option>
                        <option value="profesional5">Profesional 5</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="nombreClienteActividad2" class="col-sm-2 col-form-label">Cliente</label>
                    <div class="col-sm-10">
                      <select class="form-control" id="nombreClienteActividad2">
                        <option value="cliente1">Cliente 1</option>
                        <option value="cliente2">Cliente 2</option>
                        <option value="cliente3">Cliente 3</option>
                        <option value="cliente4">Cliente 4</option>
                        <option value="cliente5">Cliente 5</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="fechaNuevaActividad2" class="col-sm-2 col-form-label">Fecha</label>
                    <div class="col-sm-10">
                      <input type="date" class="form-control" id="fechaNuevaActividad2" >
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="tipoNuevaActividad2" class="col-sm-2 col-form-label">Tipo Actividad</label>
                    <div class="col-sm-10">
                      <select class="form-control" id="tipoNuevaActividad2">
                        <option value="visita">Visita</option>
                        <option value="capacitacion">Capacitación</option>
                        <option value="gestion">Gestión</option>
                        <option value="asesoriaEspecial">Asesoria Especial</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="descripcionNuevaActividad2" class="col-sm-2 col-form-label">Descripción</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="descripcionNuevaActividad2" placeholder="Descripción actividad">
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
              </form>
            </div>
            <!-- /.card -->
              
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
              <button type="button" class="btn btn-success">Guardar</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->