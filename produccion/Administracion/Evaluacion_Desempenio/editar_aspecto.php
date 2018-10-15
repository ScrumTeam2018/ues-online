<?php
     require '../../../build/config/conexion.php';
     $con=conectarMysql();
     $id=$_REQUEST['id'];
     $result = $con->query("SELECT * FROM ed_aspectos_evaluar WHERE ed_idaspectos=".$id);
     if ($result) {
       while ($fila = $result->fetch_object()) {
         $idaspecto=$fila->ed_idaspectos;
         $nombre=$fila->ed_naspecto;
         $criterio=$fila->ed_idcriteriofk;
       }
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
              location.href='listar_aspecto.php';
            });
          });
        }
      </script>s
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
              <h4 style="color: RGB(0, 0, 128);"><strong>ADMINISTRACI&Oacute;N DE EVALUACIÓN DE DESEMPEÑO.</strong></h4>
            </div> 
      </div>
      <div class="clearfix"></div>

      <div class="row" >
            <div class="col-sm-12 col-sm-offset-2 col-md-8 col-md-offset-2 ">
              <div class="x_panel" >
                <div class="x_title">
                  <h4 style="color:RGB(205, 92, 92);">Editrar Criterios de Evaluación.</h4>
                  <ul class="nav navbar-right panel_toolbox"> 
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  
                  <form id="formed" method="POST" data-parsley-validate class="form-horizontal form-label-left">
                  <input type="hidden" name="bandera" id="bandera">
                  <input type="hidden" name="baccion" id="baccion" value="<?php echo $idaspecto; ?>">

                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Criterio: <span class="required" style="color: #CD5C5C;"> *</span></label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <select class="form-control" id="criterio" name="criterio" tabindex="4">
                          <option selected="selected" value="">Seleccione un Criterio...</option>
                          <?php
                            $sql  = "SELECT * FROM ed_criterio";
                            $result = $con->query($sql);
                            if ($result) {
                              while ($fila = $result->fetch_object()) {
                                echo "<option value='".$fila->ed_idcriterio."'>".$fila->ed_ncriterio."</option>";
                              }//fin while
                            }
                          ?>  
                        </select>
                      </div>
                      <span class="help-block" id="error"></span>
                      <script language="javascript">
                        document.forms['formed']['criterio'].value=<?php echo $criterio; ?>;
                      </script>
                    </div>
                    




                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nombre">Nombre: <span class="required" style="color: #CD5C5C;"> *</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="nombre" name="nombre" required="required" value="<?php echo $nombre; ?>" placeholder="Digite Nombre del Criterio" class="form-control col-md-7 col-xs-12" >
                      </div>
                      <span class="help-block" id="error"></span>
                    </div>
                    
                    
                    <div class="ln_solid"></div>
                    <p style="color:RGB(205, 92, 92);">( * ) Campos Obligatorios.</p>
                    <div class="form-group" align="right">
                      <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                        <button class="btn btn-round btn-primary" type="button"  id="btnmodificar" value="moficicar"><i class="fa fa-refresh">  Actualizar</i></button>
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
  <script src="../../../build/config/validaciones/evaluacion_desempenio/validarcriterio.js"></script>
</body>
</html>
