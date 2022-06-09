<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <div class="content">
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Producto</h3>

                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i
                            class="fa fa-times"></i></button>
                </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form method="post" id = "formulario">
                <div class="col-lg-6">
                  <div class="input-group margin">
                      <div class="input-group-btn">
                        <button type="button" class="btn btn-danger">Descripcion</button>
                      </div>
                      <!-- /btn-group -->
                      <input type="text" class="form-control" id="txtdescripcion" name="txtdescripcion">
                    </div>
                </div>
                <div class="col-lg-6">
                  <div class="input-group margin">
                      <div class="input-group-btn">
                        <button type="button" class="btn btn-danger">Cantidad</button>
                      </div>
                      <!-- /btn-group -->
                      <input type="text" class="form-control" id="txtcantidad" name="txtcantidad">
                    </div>
                </div>
                <div class="col-lg-6">
                  <div class="input-group margin">
                      <div class="input-group-btn">
                        <button type="button" class="btn btn-danger">Referencia</button>
                      </div>
                      <!-- /btn-group -->
                      <input type="text" class="form-control" id="txtreferencia" name="txtreferencia">
                    </div>
                </div>
                <div class="col-lg-6">
                  <div class="input-group margin">
                      <div class="input-group-btn">
                        <button type="button" class="btn btn-danger">Disponible</button>
                      </div>
                      <!-- /btn-group -->
                      <input type="text" class="form-control" id="txtdisponible" name="txtdisponible">
                    </div>
                </div>
                <button class="btn btn-app" onclick="validar(event);">
                  <i class="fa fa-save"></i> Guardar
                </button>
              </form>
              <?php
                if (isset($_POST["txtdescripcion"])){
                  $objCtrProducto = new ControllerProducto();
                  $objCtrProducto -> ctrInsertarProducto ( 
                    $_POST["txtdescripcion"],
                    $_POST["txtcantidad"],
                    $_POST["txtreferencia"],
                    $_POST["txtdisponible"]
                  );
                }
              ?>
            </div>

        </div>
        <div class="box">
            <div class="box-header with-border">
                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i
                            class="fa fa-times"></i></button>
                </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
             
              <table id="td-producto" class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th>Codigo</th>
                    <th>Descripcion</th>
                    <th>Cantidad</th>
                    <th>Referencia</th>
                    <th>Disponibilidad</th>
                    <th>Acciones</th>
                  </tr> 
                </thead>
                <tbody>

              <?php
              $objCtrProducto = new ControllerProducto();
              $listaProducto = $objCtrProducto -> ctrListarProducto();
              
              foreach($listaProducto as $dato){
                echo"
                  <tr>
                    <td>".$dato["CODIGO"]."</td>
                    <td>".$dato["DESCRIPCION"]."</td>
                    <td>".$dato["CANTIDAD"]."</td>
                    <td>".$dato["REFERENCIA"]."</td>
                    <td>".$dato["DISPONIBLE"]."</td>
                    <td>
                      <button>Eli</button>
                      <button>Mod</button>
                      <button>Rep</button>
                    </td>
                  </tr>";
                }
                  ?>
                </tbody>
              </table>
            </div>

        </div>
    </div>
</div>
<!-- /.content-wrapper -->