<!DOCTYPE html>
<html lang="es">
  <head>
  
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
              <h4><strong><p style="color: RGB(0, 0, 128);"> ADMINISTRACIÓN DE AULAS</strong></p></h4>
                
                </div></div>
          <div class="row">
                <div class="col-md-10 col-sm-10 col-xs-10">
                  <div class="x_panel">
                    <div class="x_title">
                    <h4> <p style="color:RGB(205, 92, 92);"> Registrar Aula.</p></h4>
                   
                   <div class="ln_solid"></div>

                   <form action = "../../../build/config/sql/aula/crudaula.php" method ="POST" name="form" data-parsley-validate class="form-horizontal form-label-left">                    
                   <input type="hidden" name="bandera" id="bandera">
                   
                   <h5> <strong><p style="color:RGB(0, 0, 128);"> Datos Aula:</strong></p></h5>
                    
                  

                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="direccion_e">Nombre <span class="required" style="color: #CD5C5C;"> *</span></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="nombre" name="nombre" required="required" placeholder="Digite Nombre de Aula" class="form-control col-md-7 col-xs-12" tabindex="1">
                        </div>
                        <span class="help-block" id="error"></span>
                      </div>

                        <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="direccion_e">Ubicacion <span class="required" style="color: #CD5C5C;"> *</span></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="ubicacion" name="ubicacion" required="required" placeholder="Digite Ubicacion de Aula" class="form-control col-md-7 col-xs-12" tabindex="1">
                        </div>
                        <span class="help-block" id="error"></span>
                      </div>
                     
                          

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="direccion_e">Capacidad <span class="required" style="color: #CD5C5C;"> *</span></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="capacidad" name="capacidad" required="required" placeholder="Digite Capacidad de Aula" class="form-control col-md-7 col-xs-12" tabindex="1">
                        </div>
                        <span class="help-block" id="error"></span>
                      </div>
                     <br> 
                      
                      <h5> <strong><p style="color:RGB(0, 0, 128);"> Coplemento de Aula:</strong></p></h5>

                                       
                     <p style="padding: 5px;">
                      <div class="form-group">
                        <label class="control-label col-md-4 col-sm-4 col-xs-12" for="direccion_e"><input type="checkbox" name="checkbox[]" id="checkbox" value="1" class="flat" />  <span class="required" style="color: #CD5C5C;"> </span>Cannon Multimedia</span>
                        </label>

                         <div class="form-group">
                        <label class="control-label col-md-4 col-sm-5 col-xs-12" for="direccion_e"> <input type="checkbox" name="checkbox[]" id="checkbox" value="2" class="flat" />  <span class="required" style="color: #CD5C5C;"> </span>Aire Acondicionado&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>
                        </label>
                        </div>

                       <div class="form-group">
                        <label class="control-label col-md-4 col-sm-4 col-xs-12" for="direccion_e">  <input type="checkbox" name="checkbox[]" id="checkbox" value="3" class="flat" />  <span class="required" style="color: #CD5C5C;"> </span> Pantalla Electrica&nbsp;&nbsp;&nbsp;&nbsp;</span>
                        </label>

                         <div class="form-group">
                        <label class="control-label col-md-4 col-sm-5 col-xs-12" for="direccion_e">  <input type="checkbox" name="checkbox[]" id="checkbox" value="4" class="flat" />  <span class="required" style="color: #CD5C5C;"> </span>Sistema de Ventiladores</span>
                        </label>
                         </div>
                      <br>
                    
            <!-- Monty:fin bloque -->
                      <p style="color:RGB(205, 92, 92);">( * ) Campos Obligatorios.</p>
                       <div class="ln_solid"></div>
                      <div class="form-group" align="right">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                        <button type="submit" class="btn btn-round btn-primary" id="btnguardar" value="guardar"><i class=" fa fa-save"> Guardar</i></button>
						              <button class="btn btn-round btn-default" type="reset"><i class=" fa fa-ban"> Cancelar</i></button>
                        </div>
                      </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>            
        </div>
        <!-- Monty:/page content -->

        
      </div>
    </div>
     <!-- Monty:llamado al pie de pagina a la direccion carpeta global -->
   <?php include '../../global/footer.php'?>
 <!-- Monty:llamado a todos los script a la direccion carpeta global-->
   <?php include '../../global/script.php'?>
  
   
  </body>
</html>