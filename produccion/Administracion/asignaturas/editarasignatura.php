<?php
     require '../../../build/config/conexion.php';
     $con=conectarMysql();
     $id=$_REQUEST['id'];
     $result = $con->query("SELECT * FROM asignatura WHERE idasignatura=".$id);
     if ($result) {
       while ($fila = $result->fetch_object()) {
         $idasignatura=$fila->idasignatura;
         $codigo=$fila->codigo_as;
         $nombre=$fila->nombre_as;
         $tipo = $fila->tipo_as;
         $prerequisito = $fila->prerequisito;
         $postrequisito = $fila->postrequisito;
       }
     }

?>

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
            text: "Esta Seguro de Regresar?",
            type: "warning",
            showCancelButton: true,
            cancelButtonText: "Cancelar",
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Aceptar",
            closeOnConfirm: false },

            function(){ 
            swal({ 
            title:'Éxito',
            text: 'Cargando....',
            type: 'success'
          },
            function(){
              //event to perform on click of ok button of sweetalert
              location.href='listarasignaturas.php';
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
              <h3 style="color: RGB(0, 0, 128);"><strong>ASIGNATURAS.</strong></h3>
            </div> 
      </div>
      <div class="clearfix"></div>

      <div class="row" >
            <div class="col-sm-12 col-sm-offset-2 col-md-8 col-md-offset-2 ">
              <div class="x_panel" >
                <div class="x_title">
                  <h3 style="color:RGB(205, 92, 92);">Modificacion.</h3>
                  <ul class="nav navbar-right panel_toolbox">
                  <li><a href="listarasignaturas.php">Modificar Asignaturas</a>
                  </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <br />
                  <form id="formasignatura" action="../../../build/config/sql/asignaturas/guardarasignatura.php" method="POST" data-parsley-validate class="form-horizontal form-label-left">
                    <input type="hidden" name="bandera" id="bandera">
                    <input type="hidden" name="baccion" id="baccion" value="<?php echo $idasignatura; ?>">
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="codigo">C&oacute;digo: <span style="color:	#000080;"> '</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="codigo" name="codigo" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $codigo; ?>" disabled>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nombre">Nombre: <span class="required" style="color: #CD5C5C;"> *</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="nombre" name="nombre" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $nombre; ?>">
                      </div>
                      <span class="help-block" id="error"></span>
                    </div>

                     <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="codigo">Tipo: <span style="color:	#000080;"> '</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="codigo" name="codigo" required="required" class="form-control col-md-7 col-xs-12" value="Electiva" disabled>
                      </div>
                    </div>
                    
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="codigo">Pre-Requisito: <span style="color:	#000080;"> '</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="codigo" name="codigo" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $prerequisito; ?>" disabled>
                      </div>
                    </div>

                     <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="codigo">Post-Requisito <span style="color:	#000080;"> '</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="codigo" name="codigo" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $postrequisito; ?>" disabled>
                      </div>
                    </div>
                    
                    <div class="ln_solid"></div>
                    <p style="color: RGB(0, 0, 128);">( ' ) Campos no Editables.</p>
                    <p style="color:RGB(205, 92, 92);">( * ) Campos Obligatorios Editables.</p> 
                    <div class="form-group" align="right">
                      <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                        <button class="btn btn-round btn-primary" type="submit"  id="btnmodificar" value="modificar"><i class="fa fa-refresh">  Actualizar</i></button>
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
  <script src="../../../build/config/validaciones/carrera/validarmod.js"></script>
</body>
</html>
