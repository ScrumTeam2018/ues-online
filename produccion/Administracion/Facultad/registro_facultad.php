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
                    <form action = "../../../build/config/sql/facultad/guardar_facultad.php" method ="POST" name="form" data-parsley-validate class="form-horizontal form-label-left">
                    

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" class="required" for="nombre_f">Nombre<span class="required" style="color: #CD5C5C;"> *</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="nombre_f" name="nombre_f" required="required" class="form-control col-md-7 col-xs-12" placeholder="Digite Nombre">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="telefon_f">Teléfono<span class="required" style="color: #CD5C5C;"> *</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" class="form-control has-feedback-left" id="telefono_f" name= "telefono_f" required="required" placeholder="Digite número de Teléfono">
                        
                        <span class="fa fa-phone form-control-feedback left" aria-hidden="true"></span>
                      </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="correo_f">Correo Electrónico <span class="required" style="color: #CD5C5C;"> *</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="email" class="form-control has-feedback-left" id="correo_f_f" name= "correo_f" required="required"placeholder="Digite Correo Electrónico">
                        <span class="fa fa-envelope-o form-control-feedback left" aria-hidden="true"></span>
                      </div>
                      </div>
                    

                 <!-- españa: inicio de datos de responsable de Facultad -->
           

            <!-- Monty:fin bloque -->
                      
                    <div class="ln_solid"></div>
                      <div class="form-group" align="right">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                        <button type="submit" class="btn btn-round btn-primary"><i class=" fa fa-save"> Guardar</i></button>
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

        
      </div>
    </div>
     <!-- Monty:llamado al pie de pagina a la direccion carpeta global -->
   <?php include '../../global/footer.php'?>
 <!-- Monty:llamado a todos los script a la direccion carpeta global-->
   <?php include '../../global/script.php'?>
  
   <script>
  function getInput(type, placeholder){
  var nodo = document.createElement("input");
  nodo.type = type;
  nodo.id = 'telefono[]';
  nodo.class = 'form-control col-md-7 col-xs-12';
  nodo.placeholder = placeholder;
  return nodo;
}

function append(className, nodoToAppend){
  var nodo = document.getElementsByClassName(className)[0];
  nodo.appendChild(nodoToAppend);
}
     /*ESTE ES EL CODIGO Q SE SUPONE DEBERIA  AGREGAR LAS CAJAS DE TEXTO */
function AgregaTelefono(){

  var telefono = getInput("text", "telefono...");
  append("telefono", telefono);

}
   </script>
  </body>
</html>