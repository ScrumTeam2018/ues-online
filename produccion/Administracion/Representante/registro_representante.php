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
              <h4><strong><p style="color: RGB(0, 0, 128);"> ADMINISTRACIÓN DE REPRESENTANTES DE FACULTAD.</strong></p></h4>
                
                </div></div>
          <div class="row">
                <div class="col-md-10 col-sm-10 col-xs-10">
                  <div class="x_panel">
                    <div class="x_title">
                    <h4> <p style="color:RGB(205, 92, 92);"> Registrar Representante.</p></h4>
                   
                   <div class="ln_solid"></div>

                   <form action = "../../../build/config/sql/representante/guardar_representante.php" method ="POST" name="form" data-parsley-validate class="form-horizontal form-label-left">                    
                    <br>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nombre_r">Nombre<span class="required" style="color: #CD5C5C;"> *</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" class="form-control has-feedback-left" id="nombre_r" name="nombres_r" required="required" placeholder="Digite Nombres">
                        <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                        </div>
                      </div>

                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="apellidos_r">Apellidos<span class="required" style="color: #CD5C5C;"> *</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" class="form-control has-feedback-left" id="apellidos_r" name="apellidos_r" required="required" placeholder="Digite Apellidos">
                        <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                      </div>
                      </div>     

                      <div class='form-group'>
                      <label class='col-md-3 col-sm-3 col-xs-12 control-label'>Genero: <span class="required" style="color: #CD5C5C;"> *</span></label>
                        <div class='radio col-md-6 col-sm-6 col-xs-12'>
                        <label>
                        <input type='radio' class='flat' id="genero" value="Masculino" name='genero'> Masculino </label>
                        <label>
                        <input type='radio' class='flat' id="genero" value="Femenino" name='genero'> Femenino </label>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="telefon_r">Teléfono<span class="required" style="color: #CD5C5C;"> *</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" class="form-control has-feedback-left" id="telefono_r"  name="telefono_r" required="required" placeholder="Digite número de Teléfono">
                        <span class="fa fa-phone form-control-feedback left" aria-hidden="true"></span>
                      </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="correo_r">Correo Electrónico<span class="required" style="color: #CD5C5C;"> *</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="email" class="form-control has-feedback-left" id="correo_r" name="correo_r" required="required" placeholder="Digite Correo Electrónico Personal o Isnstitucional">
                        <span class="fa fa-envelope-o form-control-feedback left" aria-hidden="true"></span>
                      </div>
                      </div>

                      <
                      
                      <br>

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