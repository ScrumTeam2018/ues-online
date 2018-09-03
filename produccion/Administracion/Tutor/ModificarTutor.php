<!DOCTYPE html>
<html lang="es">
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
            <br />
           <?php include '../../global/menu.php' ?>
          </div>
        </div>

       <?php include '../../global/navigation.php'?>

        <!-- page content Panel de Trabajo -->
        <div class="right_col" role="main">
        
          <div class="">
            <div class="page-title">
              <div class="title_left">
              <h3><strong>Recursos Humanos</strong></h3>
                <br>
              </div>
        <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2><small>Registro de Personal</small></h2>
                   
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Cargo</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control">
                            <option>Tutor</option>
                            <option>Técnico</option>
                          </select>
                        </div>
                        </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="code-name">Codigo <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="code-name" required="required" class="form-control col-md-7 col-xs-12" placeholder="Codigo Tutor">
                        </div>
                      </div>

                        <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="dui-name">Dui <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="dui-name" name="dui-name" required="required" class="form-control col-md-7 col-xs-12" placeholder="123456-7">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nit-name">Nit <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="nit-name" name="nit-name" required="required" class="form-control col-md-7 col-xs-12" placeholder="1234-67891-12-3">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nombre <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12" placeholder="Nombre del Tutor">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Apellido <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="last-name" name="last-name" required="required" class="form-control col-md-7 col-xs-12" placeholder="Apellido del Tutor">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Estado Civil</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control">
                            <option>Soltero</option>
                            <option>Casado</option>
                            <option>Viudo/a</option>
                            <option>Divorciado/a</option>
                            <option>Estudiante</option>
                          </select>
                        </div>
                        </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Especialidad</label>
                        <div class="col-md-5 col-sm-5 col-xs-12">
                          <select class="form-control">
                            <option>Licenciado en Matematica</option>
                            <option>Licenciado en Lenguaje</option>
                            <option>Licenciado en Sociales</option>
                            <option>Licenciado en Ciencia</option>
                            <option>Licenciado en Agricultura</option>
                          </select>
                        </div>
                        <button class="btn btn-round btn-success" type="button"><i class=" fa fa-plus">Agregar</i></button>
                      </div>
                     
                     
                     
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Contacto</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <button class="btn btn-round btn-default" type="button"><i class=" fa fa-phone"> Telefono</i></button>
						  <button class="btn btn-round btn-default" type="reset"><i class=" fa fa-envelope-o"> E-Mail</i></button>
                          
                         
                        </div>
                      </div>
                     
                     <div class="form-group">
                      <label class="control-label col-md-3 col-sm-4 col-xs-12">Genero</label>
                     <div class="col-md-6 col-sm-6 col-xs-12">
                      <div class="radio">
                            <label>
                              <input type="radio" checked="" value="option1" id="optionsRadios1" name="optionsRadios"> Masculino
                            </label>
                          </div>

                          <div class="radio">
                            <label>
                              <input type="radio" value="option2" id="optionsRadios2" name="optionsRadios"> Femenino
                            </label>
                            </label>
                          </div>
                        </div>
                      </div>
                    
                      
                    <div class="ln_solid"></div>
                      <div class="form-group" align="right">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button class="btn btn-round btn-primary" type="button"><i class=" fa fa-save"> Guardar</i></button>
						  <button class="btn btn-round btn-default" type="reset"><i class=" fa fa-ban"> Cancelar</i></button>
                        </div>
                      </div>
                 
                    </form>
                  </div>
                </div>
              </div>
            </div>
        </div>
        <!-- /page content -->
        <?php include '../../global/footer.php'?>
        
      </div>
    </div>
   

   <?php include '../../global/script.php'?>
	
  </body>
</html>
