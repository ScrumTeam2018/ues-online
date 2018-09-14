<!DOCTYPE html>
<html lang="es">
<!-- abrir head  -->
<head>
<!-- estilo vertical para las ventanas -->
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


<script type="text/javascript">
        function salir(){
          swal({ 
            title: "Advertencia",
            text: "¿Seguro que Desea Cerrar Sesión?",
            type: "warning",
            showCancelButton: true,
            cancelButtonText: "No",
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: "Si",
            closeOnConfirm: false },

            function(){ 
            swal({ 
            title:'Éxito',
            text: 'Sesión Cerrada',
            type: 'success'
          },
            function(){
              //event to perform on click of ok button of sweetalert
              location.href='logout.php';
           });
          });
        }

      
        function cancelar(){
          swal({ 
            title: "Advertencia",
            text: "Se Eliminarán Datos Ingresados ",
            type: "warning",
            showCancelButton: true,
            cancelButtonText: "Cancelar",
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Aceptar",
            closeOnConfirm: false },

            function(){ 
            swal({ 
            title:'Éxito',
            text: 'Datos Eliminados',
            type: 'success'
          },
            function(){
              //event to perform on click of ok button of sweetalert
              location.href='registro_facultad.php';
            });
          });
        }
      </script>
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
              <h3 style="color: RGB(0, 0, 128);"><strong>ADMINISTRACIÓN DE FACULTADES.</strong></h3>
            </div> 
      </div>
      <div class="clearfix"></div>

      <div class="row" >
            <div class="col-sm-12 col-sm-offset-2 col-md-8 col-md-offset-2 ">
              <div class="x_panel" >
                <div class="x_title">
                  <h3 style="color:RGB(205, 92, 92);">Registrar Facultad.</h3>
                  <ul class="nav navbar-right panel_toolbox">
                  <li><a href="listarFacultad.php">Lista de las Facultades</a>
                  </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <br />
                  <form id="formfacultad" action="../../../build/config/sql/facultad/guardar_facultad.php" method="POST" data-parsley-validate class="form-horizontal form-label-left">
                  <input type="hidden" name="bandera" id="bandera">
                  <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" class="required" for="nombre_f">Nombre: <span class="required" style="color: #CD5C5C;"> *</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="nombre_f" name="nombre_f" required="required" class="form-control col-md-7 col-xs-12" tabindex="1" placeholder="Digite Nombre">
                        </div>
                        <span class="help-block" id="error"></span>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="telefono_f">Tel&eacute;fono: <span class="required" style="color: #CD5C5C;"> *</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" class="form-control has-feedback-left" id="telefono_f" name= "telefono_f" required="required" tabindex="2" placeholder="Digite número de Teléfono">
                        <span class="fa fa-phone form-control-feedback left" aria-hidden="true"></span>
                      </div>
                      <span class="help-block" id="error"></span>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="correo_f">Correo Electr&oacute;nico: <span class="required" style="color: #CD5C5C;"> *</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" class="form-control has-feedback-left" id="correo_f" name= "correo_f" required="required" tabindex="3" placeholder="Digite Correo Electrónico">
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
                    
                    <div class="ln_solid"></div>
                    <p style="color:RGB(205, 92, 92);">( * ) Campos Obligatorios.</p>
                    <div class="form-group" align="right">
                      <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                        <button class="btn btn-round btn-primary" type="submit"  id="btnguardar" value="guardar"><i class="fa fa-save">  Guardar</i></button>
                        <button class="btn btn-round btn-default" type="reset" onclick="cancelar()"><i class="fa fa-ban">  Cancelar</i></button>
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
  <script src="../../../build/config/validaciones/facultad/validarfacultad.js"></script>
</body>
</html>
