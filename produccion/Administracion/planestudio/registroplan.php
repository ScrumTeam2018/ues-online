<!DOCTYPE html>
<html lang="es">
<!-- abrir head el cierre esta dentro del archivo que se incluye -->
<head>
<?php include '../../global/head.php' ?>
</head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="#" class="site_title"><img src="../../../public/images/logo2.png"/><span> Sede Cojutepeque</span></a>
            </div>
            <div class="clearfix"></div>
            <!-- menu profile quick info 
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="../public/images/descarga.png" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Bienvenido,</span>
                <h2>John Doe</h2>
              </div>
            </div>
          /menu profile quick info -->
            <br />
            <?php include '../../global/menu.php' ?>
          </div>
        </div>
       <?php include '../../global/navigation.php' ?>
        <!-- page content Panel de Trabajo -->
        <div class="right_col" role="main">
        <!--Monty: Aqui dentro iria todo lo necesario para el panel de trabajo -->

        <!--Magda titulo de plan -->
        <div class="page-title">
        <div class="col-sm-12 col-sm-offset-2 col-md-8 col-md-offset-2 ">
                <h3 style="color: RGB(0, 0, 128);"><strong>PLAN DE ESTUDIO.</strong></h3>
                
              </div> 
        </div>
        <div class="clearfix"></div>

        <div class="row" >
              <div class="col-sm-12 col-sm-offset-2 col-md-8 col-md-offset-2 ">
                <div class="x_panel" >
                  <div class="x_title">
                    <h3 style="color:RGB(205, 92, 92);">Registro.</h3>
                    <ul class="nav navbar-right panel_toolbox">
                    <li><a href="registroasignatura.php">Registrar Asignaturas</a>
                    </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form id="formplanestudio" action="../../../build/config/sql/planestudio/crudPlanEstudio.php" method="POST" data-parsley-validate class="form-horizontal form-label-left">
                    <input type="hidden" name="bandera" id="bandera">
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nombre">Nombre: <span style="color:	#000080;"> '</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="nombre" name="nombre" required="required" class="form-control col-md-7 col-xs-12" disabled>
                        </div>
                      </div>


                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Carrera: <span class="required" style="color: #CD5C5C;"> *</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control" id="carrera" name="carrera">
                            <option selected="selected" value="">Seleccione Carrera...</option>
                            <?php
                              require '../../../build/config/conexion.php';
                              $con=conectarMysql();
                              $consulta  = "SELECT * FROM carrera WHERE estado_ca='1' ORDER BY nombre_ca";
                              $result = $con->query($consulta);
                              if ($result) {
                                while ($fila = $result->fetch_object()) {
                                  echo "<option value='".$fila->nombre_ca."'>".strtoupper($fila->nombre_ca)."</option>";
                                }//fin while
                              }
                            ?>  
                          </select>
                        </div>
                        <span class="help-block" id="error"></span>
                      </div>


                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="anio">Año: <span class="required" style="color: #CD5C5C;"> *</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="anio" name="anio" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                        <span class="help-block" id="error"></span>
                      </div>

                      
                      <div class="ln_solid"></div>
                      <p style="color: RGB(0, 0, 128);">( ' ) Campos no Editables.</p>
                      <p style="color:RGB(205, 92, 92);">( * ) Campos Obligatorios Editables.</p> 
                      <div class="form-group" align="right">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button class="btn btn-round btn-primary" type="submit"  id="btnguardar" value="guardar"><i class="fa fa-save">  Guardar</i></button>
						              <button class="btn btn-round btn-default" type="reset"><i class="fa fa-ban">  Cancelar</i></button>
                        </div>
                      </div>

                    </form>
                  </div>
                </div>
              </div>
            </div>

        



        </div>
        <!-- /page content -->
        <?php include '../../global/footer.php' ?>    
      </div>
    </div>
    <?php include '../../global/script.php' ?>
    <script src="../../../build/config/validaciones/planestudio/validarplanestudio.js"></script>
    
  </body>
</html>
