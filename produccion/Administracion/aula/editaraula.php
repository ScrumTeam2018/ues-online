<?php
     require '../../../build/config/conexion.php';
     $con=conectarMysql();
     $id=$_REQUEST['id'];
     $result = $con->query("SELECT * FROM aula WHERE idaula=".$id);
     if ($result) {
       while ($fila = $result->fetch_object()) {
         $idaula=$fila->idaula;
         $nombre=$fila->nombre_au;
         $ubicacion=$fila->ubicacion_au;
         $cantidad=$fila->cantidad_au;
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
              location.href='listarAula.php';
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
              <h4 style="color: RGB(0, 0, 128);"><strong>ADMINISTRACI&Oacute;N DE AULAS.</strong></h4>
            </div> 
      </div>
      <div class="clearfix"></div>

      <div class="row" >
            <div class="col-sm-12 col-sm-offset-2 col-md-8 col-md-offset-2 ">
              <div class="x_panel" >
                <div class="x_title">
                  <h4 style="color:RGB(205, 92, 92);">Editar Aula.</h4>
                  <ul class="nav navbar-right panel_toolbox">
                  <li><a href="listarAula.php">Lista de Aulas</a>
                  </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  
                  <form id="formcarrera" action="../../../build/config/sql/carrera/guardarcarrera.php" method="POST" data-parsley-validate class="form-horizontal form-label-left">
                  <input type="hidden" name="bandera" id="bandera">
                  <input type="hidden" name="baccion" id="baccion" value="<?php echo $idaula; ?>">
                    <h5> <strong><p style="color:RGB(0, 0, 128);"> Datos Aula:</strong></p></h5>
                
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nombre">Nombre: <span class="required" style="color: #CD5C5C;"> *</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="nombre" name="nombre" required="required" placeholder="Digite Nombre del Aula" class="form-control col-md-7 col-xs-12" value="<?php echo $nombre; ?>" tabindex="1">
                      </div>
                      <span class="help-block" id="error"></span>
                    </div>
                    
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="ubicacion">Ubicaci&oacute;n: <span class="required" style="color: #CD5C5C;"> *</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="ubicacion" name="ubicacion" required="required" placeholder="Digite Ubicaci&oacute;n del Aula" class="form-control col-md-7 col-xs-12" value="<?php echo $ubicacion; ?>" tabindex="2">
                      </div>
                      <span class="help-block" id="error"></span>
                    </div>
                    
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="capacidad">Capacidad: <span class="required" style="color: #CD5C5C;"> *</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="capacidad" name="capacidad" required="required" placeholder="Digite Capacidad del Aula" class="form-control col-md-7 col-xs-12" value="<?php echo $cantidad; ?>" tabindex="3">
                      </div>
                      <span class="help-block" id="error"></span>
                    </div>

                    <h5> <strong><p style="color:RGB(0, 0, 128);"> Complemento Aula:</strong></p></h5>
                    <div class="form-group">
                        <div class="col-sm-12 col-sm-offset-2 col-md-8 col-md-offset-2 ">

                            <div class="checkbox">
                                <label>
                                <input type="checkbox" class="flat"> Ventilador
                                </label>
                            </div>

                            <div class="checkbox">
                                <label>
                                <input type="checkbox" class="flat"> Ventilador
                                </label>
                            </div>

                            <div class="checkbox">
                                <label>
                                <input type="checkbox" class="flat"> Ventilador
                                </label>
                            </div>

                            <div class="checkbox">
                                <label>
                                <input type="checkbox" class="flat"> Ventilador
                                </label>
                            </div>

                          <div class="checkbox">
                            <label>
                              <input type="checkbox" id="otro" name="otro" class="flat"> Otro
                            </label>
                          </div>
                        </div>
                        </div>
                        
                  
                        <div class="ln_solid"></div>
                        <p style="color: RGB(0, 0, 128);">( ' ) Campos no Editables.</p>
                        <p style="color:RGB(205, 92, 92);">( * ) Campos Obligatorios Editables.</p> 
                        <div class="form-group" align="right">
                          <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                            <button class="btn btn-round btn-primary" type="submit"  id="btnmodificar" value="moficicar"><i class="fa fa-refresh">  Actualizar</i></button>
                            <button class="btn btn-round btn-default" type="reset" onclick="cancelar()"><i class="fa fa-ban">  Cancelar</i></button>
                          </div>
                        </div>

                  </form>
                </div>
              </div>
            </div>
          </div>

          <div class="modal fade" id="datosCarrera" name="datosCarrera" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog ">
                      <div class="modal-content">

                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal"><span class="label label-danger" aria-hidden="true" style="color: #FFFFFF;">×</span>
                          </button>
                          <h4 class="modal-title" id="myModalLabel" style="color: RGB(0, 0, 128);">Informaci&oacute;n Carrera</h4>
                        </div>
                        <div class="modal-body">
                          
                        </div>
                        <div class="modal-footer">
                          <p align="left"" style="color: RGB(0, 0, 128);">( ' ) Campos no Editables.</p>
                          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                          
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
  <script src="../../../build/config/validaciones/aula/validaraula.js"></script>
</body>
</html>
