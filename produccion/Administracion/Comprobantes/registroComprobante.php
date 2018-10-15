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
              location.href='registroComprobante.php';
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
              <h4 style="color: RGB(0, 0, 128);"><strong>RECEPCI&Oacute;N DE DOCUMENTOS.</strong></h4>
            </div> 
      </div>
      <div class="clearfix"></div>

      <div class="row" >
            <div class="col-sm-12 col-sm-offset-2 col-md-8 col-md-offset-2 ">
              <div class="x_panel" >
                <div class="x_title">
                  <h4 style="color:RGB(205, 92, 92);">Registro.</h4>
                  <ul class="nav navbar-right panel_toolbox">
                  <li><a href="listarCarrera.php">Modificar Comprobante</a>
                  </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  
                  <form id="formcomprobante" action="../../../build/config/sql/comprobantes/guardarcomprobantes.php" method="POST" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data">
                  <input type="hidden" name="bandera" id="bandera">

                    <h5> <strong><p style="color:RGB(0, 0, 128);"> Datos Academicos:</strong></p></h5>

                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Facultad: <span class="required" style="color: #CD5C5C;"> *</span></label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <select class="form-control" id="facultad" name="facultad">
                        </select>
                      </div>
                      <span class="help-block" id="error"></span>
                    </div>

                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Carrera: <span class="required" style="color: #CD5C5C;"> *</span></label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <select class="form-control" id="carrera" name="carrera">
                        </select>
                      </div>
                      <span class="help-block" id="error"></span>
                    </div>

                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Estudiante: <span class="required" style="color: #CD5C5C;"> *</span></label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <select class="form-control" id="estudiante" name="estudiante">
                        </select>
                      </div>
                      <span class="help-block" id="error"></span>
                    </div>
                    <br>
                    <h5> <strong><p style="color:RGB(0, 0, 128);"> Datos Certificado M&eacute;dico:</strong></p></h5>
                    <div class='form-group'>
                      <label class='col-md-3 col-sm-3 col-xs-12 control-label'>Pago de Certificado M&eacute;dico ($) : <span class="required" style="color: #CD5C5C;"> *</span></label>
                      <br>
                      <div class='radio col-md-6 col-sm-6 col-xs-12'>
                      <label>
                      <input type='radio' class='flat' id="pagocertificado" value="Pendiente" name='pagocertificado' checked> Pendiente </label>
                      <label>
                      <input type='radio' class='flat' id="pagocertificado" value="Cancelado" name='pagocertificado'> Cancelado </label>
                      </div>
                      </div>
                    <br>
                    <h5> <strong><p style="color:RGB(0, 0, 128);"> Documentos Requeridos:</strong></p></h5>
                    
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="matricula">Matricula: <span class="required" style="color: #CD5C5C;"> </span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="file" id="matricula" name="matricula"  accept=".pdf,.jpg,.png">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="pcuota">Primera Cuota: <span class="required" style="color: #CD5C5C;"> </span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="file" id="pcuota" name="pcuota"  accept=".pdf,.jpg,.png">
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="dui">DUI: <span class="required" style="color: #CD5C5C;"> </span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="file" id="dui" name="dui"  accept=".pdf,.jpg,.png">
                      </div>
                      <input type="hidden" name="carpeta" id="carpeta" value="<?php echo "cf13020"; ?>">
                    </div>

                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nit">NIT: <span class="required" style="color: #CD5C5C;"> </span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="file" id="nit" name="nit"  accept=".pdf,.jpg,.png">
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="partida">Paes: <span class="required" style="color: #CD5C5C;"> </span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="file" id="partida" name="partida"  accept=".pdf,.jpg,.png">
                      </div>
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
  <script src="../../../build/config/validaciones/comprobantes/validarcomprobantes.js"></script>
</body>
</html>
