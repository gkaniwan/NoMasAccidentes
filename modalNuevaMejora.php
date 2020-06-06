      <div class="modal fade" id="modalNuevaMejora">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Nueva Mejora</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close" id="cerrarModalNuevoMejora">
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
                    <label for="nombreClienteMejoraNuevo" class="col-sm-2 col-form-label">Contrato</label>
                    <div class="col-sm-10">
                      <select class="form-control" id="nombreClienteMejoraNuevo">

                      </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="nombreProfesionalNuevo" class="col-sm-2 col-form-label">Profesional</label>
                    <div class="col-sm-10">
                      <select class="form-control" id="nombreProfesionalNuevo">

                      </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="descripcionNuevaMejora" class="col-sm-2 col-form-label">Descripción</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="descripcionNuevaMejora" placeholder="Descripción Mejora">
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
              </form>
            </div>
            <!-- /.card -->
              
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal" id="cerrarModalNuevoCaso2">Cerrar</button>
              <button type="button" class="btn btn-success" onclick="agregarMejora();">Guardar</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->