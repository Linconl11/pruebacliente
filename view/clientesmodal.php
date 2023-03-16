<div class="modal fade" id="clientemodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form method="POST" id="formclientes">
                <div class="modal-header">
                    <h5 class="modal-title" id="titulomodal"></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-layout form-layout-1">

                        <div class="row mg-b-25">
                            <div class="col-lg-4">
                                <input type="hidden" id="idcliente" name="idcliente">
                                <div class="form-group">
                                    <label class="form-control-label">Nombres: <span class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" name="txtnombre" id="txtnombre"
                                        placeholder="Ingrese los Nombres">
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label">Apellidos: <span
                                            class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" name="txtapellido" id="txtapellido"
                                        placeholder="Ingrese los apellidos">
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label">Email: <span class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" name="txtemail" id="txtemail"
                                        placeholder="Ingrese el email">
                                </div>
                            </div><!-- col-4 -->
                            <div class="col-lg-6">
                                <div class="form-group mg-b-10-force">
                                    <label class="form-control-label">Direccion: <span
                                            class="tx-danger">*</span></label>
                                    <input class="form-control" type="text" name="txtdireccion" id="txtdireccion"
                                        placeholder="Ingrese la direccion">
                                </div>
                            </div><!-- col-8 -->
                            <div class="col-lg-6">
                                <div class="form-group mg-b-10-force">
                                    <label class="form-control-label">Telefono:</label>
                                    <input class="form-control" type="text" name="txttelefono" id="txttelefono"
                                        placeholder="Ingrese el telefono">
                                </div>
                            </div>

                        </div>


                        <!-- form-layout-footer -->
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">cerrar</button>
                    <button type="button" class="btn btn-primary">Guardar</button>
                </div>
            </form>
        </div>
    </div>
</div>