      <div class="modal fade" id="modalNuevoChecklist">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Nuevo Checklist</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close" id="cerrarNuevoChecklist2">
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
                    <label for="nombreclienteChecklist" class="col-sm-2 col-form-label">Cliente</label>
                    <div class="col-sm-10">
                      <select class="form-control" id="nombreclienteChecklist">
                       
                      </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="nombreProfesionalChecklist" class="col-sm-2 col-form-label">Profesional</label>
                    <div class="col-sm-10">
                      <select class="form-control" id="nombreProfesionalChecklist">

                      </select>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="fechaNuevoChecklist" class="col-sm-2 col-form-label">Fecha</label>
                    <div class="col-sm-10">
                      <input type="date" class="form-control" id="fechaNuevoChecklist" >
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="actividaChecklist" class="col-sm-2 col-form-label">Actividades</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="actividaChecklist" placeholder="Descripcion actividades">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="descripcionNuevaMejoraChecklist" class="col-sm-2 col-form-label">Mejora</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="descripcionNuevaMejoraChecklist" placeholder="Descripción mejora">
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
              </form>
            </div>
            <!-- /.card -->
              
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal" id="cerrarNuevoChecklist">Cerrar</button>
              <button type="button" class="btn btn-success" onclick="agregarChecklist();">Guardar</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->