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
    function verificar(){
		if(document.getElementById('codigo').value=="" || 
		document.getElementById('nombre').value=="" || 
		document.getElementById('duracion').value=="" || 
    document.getElementById('facultad').value==""){
			alert('Campos sin llenar');
			document.getElementById('bandera').value="";
		}else{
			document.getElementById('bandera').value="add";
			document.formcarrera.submit();			
		}//fin else
  }//fin de la función verificar
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
              <div class="title_left">
                <h3>Plan de Estudio <small>Carrera</small></h3>
              </div> 
        </div>
        <div class="clearfix"></div>

        <div class="row" >
              <div class="col-sm-12 col-sm-offset-2 col-md-8 col-md-offset-2 ">
                <div class="x_panel" >
                  <div class="x_title">
                    <h4>Registro</h4>
                    <ul class="nav navbar-right panel_toolbox">
                    <li><a href="registroasignatura.php">Modificar Carrera</a>
                    </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form id="formcarrera" action="../../../build/config/sql/carrera/guardarcarrera.php" method="POST" data-parsley-validate class="form-horizontal form-label-left">
                    <input type="hidden" name="bandera" id="bandera" value="add">
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="codigo">C&oacute;digo: <span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="codigo" name="codigo" required="required" class="form-control col-md-7 col-xs-12" tabindex="1">
                        </div>
                        <span class="help-block" id="error"></span>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nombre">Nombre: <span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="nombre" name="nombre" required="required" class="form-control col-md-7 col-xs-12" tabindex="2">
                        </div>
                        <span class="help-block" id="error"></span>
                      </div>
                      

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Duraci&oacute;n: </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control" id="duracion" name="duracion" tabindex="3">
                            <option selected="selected" value="">Seleccione Duraci&oacute;n...</option>
                            <option value="2">2 AÑOS</option>
                            <option value="3">3 AÑOS</option>
                            <option value="5">5 AÑOS</option>
                            <option value="8">8 AÑOS</option>
                          </select>
                        </div>
                        <span class="help-block" id="error"></span>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Facultad: </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control" id="facultad" name="facultad" tabindex="4">
                            <option selected="selected" value="">Seleccione Facultad...</option>
                            <?php
                            require '../../../build/config/conexion.php';
                            $con=conectarMysql();
                            $consulta  = "SELECT * FROM facultad WHERE estado_fa='1' ORDER BY nombre_fa";
                            $result = $con->query($consulta);
                            if ($result) {
                              while ($fila = $result->fetch_object()) {
                                echo "<option value='".$fila->idfacultad."'>".strtoupper($fila->nombre_fa)."</option>";
                              }//fin while
                            }
                        ?>  
                          </select>
                        </div>
                        <span class="help-block" id="error"></span>
                      </div>
                      
                      <div class="ln_solid"></div>
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
    <script src="../../../build/config/validaciones/carrera/validarcarrera.js"></script>
  </body>
</html>
