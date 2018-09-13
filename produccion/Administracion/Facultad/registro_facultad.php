<!DOCTYPE html>
<html lang="es">
  <head>
  <style>
* {box-sizing: border-box}
body {font-family: "Lato", sans-serif;}

/* Style the tab */
.tab {
    float: left;
    border: 1px solid #ccc;
    background-color: #f1f1f1;
    width: 10%;
    height: 300px;
}

/* Style the buttons inside the tab */
.tab button {
    display: block;
    background-color: inherit;
    color: black;
    padding: 22px 16px;
    width: 100%;
    border: none;
    outline: none;
    text-align: left;
    cursor: pointer;
    font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
    background-color: #ccc;
}

/* Create an active/current "tab button" class */
.tab button.active {
    background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
    float: left;
    padding: 0px 12px;
    border: 1px solid #ccc;
    width: 90%;
    border-left: none;
    height: 300px;
    display: none;
}

/* Clear floats after the tab */
.clearfix::after {
    content: "";
    clear: both;
    display: table;
}
</style>
<?php include '../../global/head.php' ?>

</head>

<script src="../../../public/js/personales/data-mask.js"></script>
<?php include '../../global/head.php' ?>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="#" class="site_title"><img src="../../../public/images/logo2.png"/><span> Sede Cojutepeque</span></a>
            </div>

            <div class="clearfix"></div>
            <br />
            <!-- Monty:llamado al menu a la direccion carpeta global -->
           <?php include '../../global/menu.php' ?>
          </div>
        </div>
         <!-- Monty:llamado al navegacion a la direccion carpeta global -->
       <?php include '../../global/navigation.php'?>

        <!-- Monty:page content Panel de Trabajo -->
                
          <div class="right_col" role="main">
          <div class="right_col" role="main">
            <div class="page-title">
              <div class="title_left">
              <h4><strong><p style="color: RGB(0, 0, 128);"> ADMINISTRACIÓN DE FACULTADES.</strong></p></h4>
              </div></div>
        <div class="row">
              <div class="col-md-10 col-sm-10 col-xs-10">
                <div class="x_panel">
                  <div class="x_title">
                  <h4> <p style="color:RGB(205, 92, 92);"> Registrar Facultad.</p></h4>
                   
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form id="formfacultad" action = "../../../build/config/sql/facultad/guardar_facultad.php" method ="POST" name="form" data-parsley-validate class="form-horizontal form-label-left">
                    
                    <input type="hidden" name="bandera" id="bandera">

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" class="required" for="nombre_f">Nombre<span class="required" style="color: #CD5C5C;"> *</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="nombre_f" name="nombre_f" required="required" class="form-control col-md-7 col-xs-12" tabindex="1" placeholder="Digite Nombre">
                        </div>
                        <span class="help-block" id="error"></span>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="telefon_f">Teléfono<span class="required" style="color: #CD5C5C;"> *</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" class="form-control has-feedback-left" id="telefono_f" name= "telefono_f" required="required" tabindex="2" placeholder="Digite número de Teléfono">
                        <span class="fa fa-phone form-control-feedback left" aria-hidden="true"></span>
                      </div>
                      <span class="help-block" id="error"></span>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="correo_f">Correo Electrónico <span class="required" style="color: #CD5C5C;"> *</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="email" class="form-control has-feedback-left" id="correo_f_f" name= "correo_f" required="required" tabindex="3" placeholder="Digite Correo Electrónico">
                        <span class="fa fa-envelope-o form-control-feedback left" aria-hidden="true"></span>
                      </div>
                      <span class="help-block" id="error"></span>
                      </div>

                      <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Representante: <span class="required" style="color: #CD5C5C;"> *</span></label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <select class="form-control" id="representante" name="representante" tabindex="4">
                          <option selected="selected" value="">Seleccione Representante...</option>
                          <?php
                            require '../../../build/config/conexion.php';
                            $con=conectarMysql();
                            $sql_fa  = "Select rf.id_re_fa, rf.nombre_rf, rf.apellido_rf from representante_facultad as rf left join facultad as f on rf.id_re_fa=f.id_re_fafk where f.id_re_fafk is null ORDER BY nombre_rf";
                            $result = $con->query($sql_fa);
                            if ($result) {
                              while ($fila = $result->fetch_object()) {
                                echo "<option value='".$fila->id_re_fa."'>".($fila->nombre_rf)."  ".($fila->apellido_rf)."</option>";
                              }//fin while
                            }
                          ?>  
                        </select>
                      </div>
                      <span class="help-block" id="error"></span>
                    </div>
                    

                 <!-- españa: inicio de datos de responsable de Facultad -->
           

            <!-- Monty:fin bloque -->
                      
                    <div class="ln_solid"></div>
                      <div class="form-group" align="right">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                        <button class="btn btn-round btn-primary" type="submit"  id="btnguardar" value="guardar"><i class=" fa fa-save"> Guardar</i></button>
						              <button class="btn btn-round btn-default" type="reset"><i class=" fa fa-ban"> Cancelar</i></button>
                        </div>
                      </div>
                      <p style="color:RGB(205, 92, 92);">( * ) Campos Obligatorios.</p>
                    </form>
                  </div>
                </div>
              </div>
            </div>            
        </div>
        <!-- Monty:/page content -->

      <!-- /page content -->    
      <?php include '../../global/footer.php' ?>
    </div>
  </div>
  
  <?php include '../../global/script.php' ?>
  <script src="../../../build/config/validaciones/carrera/validarcarrera.js"></script>
</body>
</html>