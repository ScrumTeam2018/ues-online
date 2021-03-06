<?php
  require '../../../build/config/conexion.php';
    if(isset($_REQUEST['id'])){
    $evaluacion = $_REQUEST['id'];
    $con=conectarMysql();
    $consulta  = "SELECT ed.id_ed, ed.nombre_ed, ed.criterio_ed, ed.can_asp_ed, ed.estado_ed, COUNT(asp.ed_idaspectos) as maximo FROM evaulaciond as ed, ed_aspectos as asp  WHERE ed.id_ed='$evaluacion' AND ed.id_ed=asp.id_edfk";
    $result = $con->query($consulta);
      if ($result) {
        while ($fila = $result->fetch_object()) {
            $nombre=$fila->nombre_ed;
            $criterio=$fila->criterio_ed;
            $cantmax=$fila->maximo+1;
                      
        }//fin while
      }
  //    echo "exito";

    
    }
?>

<!DOCTYPE html>
<html lang="es">
<!-- abrir head  -->
<head>
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
              location.href='listar_evaluaciond.php';
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
            <h4 style="color: RGB(0, 0, 128);"><strong>EVALUACIÓN DE DESEMPEÑO.</strong></h4>
            </div> 
      </div>
      <div class="clearfix"></div>

      <div class="row" >
            <div class="col-sm-12 col-sm-offset-2 col-md-8 col-md-offset-2 ">
              <div class="x_panel" >
                <div class="x_title">
                  <h4 style="color:RGB(205, 92, 92);">Registro de Aspectos a Evaluar <span style="color: #0B615E;"> "</span></h4>
                  <ul class="nav navbar-right panel_toolbox">
                  
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  
                  <form id="formed" data-parsley-validate class="form-horizontal form-label-left">
                  <input type="hidden" name="bandera" id="bandera">
                  <input type="hidden" name="canmax" id="canmax" value="<?php echo $cantmax; ?>">
                  <input type="hidden" name="evaluacion" id="evaluacion" value="<?php echo $evaluacion; ?>">

                  
                    <div id="info">
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Nombre: <span style="color:	#000080;"> '</span>
                      </label>
                      <div class="col-md-9 col-sm-9 col-xs-12">
                        <input type="text" id="nombre_ed" name ="nombre_ed"  value="<?php echo $nombre; ?>" class="form-control col-md-7 col-xs-12"  disabled>
                      </div>
                    </div>

                   <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Criterio: <span style="color:	#000080;"> '</span>
                      </label>
                      <div class="col-md-9 col-sm-9 col-xs-12">
                        <input type="text" id ="criterio_ed" name ="criterio_ed" value="<?php echo $criterio; ?>" class="form-control col-md-7 col-xs-12"  disabled>
                      </div>
                    </div>
                    <div id="insertaraspecto">
                     
                    </div>

                    </div>
                    

                    <div class="ln_solid"></div>
                    <p style="color: RGB(0, 0, 128);">( ' ) Campos no Editables.</p>
                    <p style="color:RGB(205, 92, 92);">( * ) Campos Obligatorios Editables.</p> 
                    <p style="color: #0B615E;">( " ) M&iacute;nimo 3 y M&aacute;ximo 7.</p>
                    <div class="form-group" align="right">
                      <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                        <button class="btn btn-round btn-primary" type="button"  id="btnguardar" value="guardar"><i class="fa fa-save">  Guardar</i></button>
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
    <script src="../../../build/config/validaciones/evaluacion_desempenio/validaraspectosdos.js"></script> 
</body>
</html>
