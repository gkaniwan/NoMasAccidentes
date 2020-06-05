      <div class="modal fade" id="modalNuevoAccidente">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Nuevo Accidente</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close" id="cerrarNuevoAccidente2">
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
                    <label for="nombreClienteAccidente" class="col-sm-2 col-form-label">Cliente</label>
                    <div class="col-sm-10">
                      <select class="form-control" id="nombreClienteAccidente">

                      </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="nombreProfesionalAccidente" class="col-sm-2 col-form-label">Profesional</label>
                    <div class="col-sm-10">
                      <select class="form-control" id="nombreProfesionalAccidente">
 
                      </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="fechaNuevoAccidente" class="col-sm-2 col-form-label">Fecha</label>
                    <div class="col-sm-10">
                      <input type="date" class="form-control" id="fechaNuevoAccidente">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="descripcionNuevoAccidente" class="col-sm-2 col-form-label">Descripción</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="descripcionNuevoAccidente" placeholder="Descripción accidente">
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
              </form>
            </div>
            <!-- /.card -->
              
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal" id="cerrarNuevoAccidente">Cerrar</button>
              <button type="button" class="btn btn-success" onclick="agregarAccidente();">Guardar</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->