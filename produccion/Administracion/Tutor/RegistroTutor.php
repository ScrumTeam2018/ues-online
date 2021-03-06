<!DOCTYPE html>
<html lang="es">
  <head>
  <script src="../../../public/js/personales/data-mask.js"></script>
  <script src="jquery.min.js"></script>
  <script src="../../../build/config/modal/empleado/funciones.js"></script>
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
            <!-- Monty:llamado al menu a la direccion carpeta global -->
           <?php include '../../global/menu.php' ?>
          </div>
        </div>
         <!-- Monty:llamado al navegacion a la direccion carpeta global -->
       <?php include '../../global/navigation.php'?>

        <!-- Monty:page content Panel de Trabajo -->
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
                    <form action = "../../../build/config/sql/empleado/guardar.php" enctype="multipart/form-data" method ="POST" id="uploadForm" name="form" data-parsley-validate class="form-horizontal form-label-left">
                    <!--<form action = "../sql/guardar.php" method ="POST" name="form">-->
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Cargo</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control" id="cargo" name="cargo">
                          <?php
                              require '../../../build/config/conexion.php';
                              $con=conectarMysql();
                              $consulta  = "SELECT * FROM cargo ORDER BY nombre_ca";
                              $result = $con->query($consulta);
                              if ($result) {
                                while ($fila = $result->fetch_object()) {
                                  echo "<option value='".$fila->id_ca_em."'>".strtoupper($fila->nombre_ca)."</option>";
                                }//fin while
                              }
                            ?>  
                          </select>
                          
                          <span class="help-block" id="error"></span>
                       </div>
                      </div>

                        <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="dui">Dui <span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="dui" name="dui" required="required" class="form-control col-md-7 col-xs-12" placeholder="123456-7">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nit">Nit <span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="nit" name="nit" required="required" class="form-control col-md-7 col-xs-12" placeholder="1234-67891-12-3">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first">Nombre <span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first" name="first"  required="required" class="form-control col-md-7 col-xs-12" placeholder="Nombre de la Persona">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last">Apellido <span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="last" name="last" required="required" class="form-control col-md-7 col-xs-12"  placeholder="Apellido de la Persona">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="di">Direccion <span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="di-name" name="di" required="required" class="form-control col-md-7 col-xs-12" placeholder="Direccion de la Persona">
                        </div>
                      </div>

                     <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Estado Civil</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control" id="estado" name="estado">
                          <option selected="selected" value="">Seleccione Estado Civil...</option>
                            <option value="Soltero">Soltero/a</option>
                            <option value="Casado">Casado/a</option>
                            <option value="Viudo/a">Viudo/a</option>
                            <option value="Divorciado">Divorciado/a</option>
                            <option value="Separado">Separado/a</option>
                            <option value="Conviviente">Conviviente</option>
                          </select>
                          <span class="help-block" id="error"></span>
                        </div>
                        </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Especialidad</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control" id="especialidad" name="especialidad">
                            <?php
                              $consulta1  = "SELECT * FROM especialidad_empleado ORDER BY nombre_es";
                              $result1 = $con->query($consulta1);
                              if ($result1) {
                                while ($fila1 = $result1->fetch_object()) {
                                  echo "<option value='".$fila1->id_es_em."'>".strtoupper($fila1->nombre_es)."</option>";
                                }//fin while
                              }
                            ?>  
                          </select>
                        </div>
                        <span class="help-block" id="error"></span>
                      </div>

                     
                      <div class="form-group">
                     
                     <div class="form-group">
                      <label class="control-label col-md-3 col-sm-4 col-xs-12">Genero</label>
                     <div class="col-md-6 col-sm-6 col-xs-12">
                      <div class="radio">
                            <label>
                              <input type="radio" checked="" value="Masculino" id="optionsRadios1" name="genero"> Masculino
                            </label>
                          </div>

                          <div class="radio">
                            <label>
                              <input type="radio" value="Femenino" id="optionsRadios2" name="genero"> Femenino
                            </label>
                            </label>
                          </div>
                        </div>
                      </div>
                     <!-- Monty:Monty: identificador de bloque para agregar el imput text, 
                    revisar el tutor.js, se encuentra en la direccion dentro del 
                    proyecto siguiente public/js/personal/ -->
                    <div id="idTelefonos">
                <div class="row">
                    <div class="form-group">
                        <label class="col-lg-3 control-label">Teléfono </label>

                        <div class="col-lg-1">
                            <button class="btn btn-round btn-default" type="button" id="AddTelefono" name="AddTelefono"><i class=" fa fa-phone"> Añadir Telefono </i></button>
                        </div>
                    </div>
                    <br>
                </div>
            </div>

                      <div id="idCorreos">
                        <div class="row">
                <div class="form-group">
                    <label class="col-lg-3 control-label">Correo Electronico</label>
                    <div class="col-lg-1">
                    <button class="btn btn-round btn-default" type="button" id="AddCorreo"  name="AddCorreo"><i class=" fa fa-envelope-o"> Añadir Correo </i></button>
                    </div>
                </div>
            </div>
            </div>
            <br>
            <!-- Monty:fin bloque -->
                      
                    <div class="ln_solid"></div>
                      <div class="form-group" align="right">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                        <button class="btn btn-round btn-primary" type="submit" ><i class=" fa fa-save" > Guardar</i></button>
						  <button class="btn btn-round btn-default" type="reset"><i class=" fa fa-ban"> Cancelar</i></button>
                        </div>
                      </div>
                      </form>
                    </form>
                  </div>
                </div>
              </div>
            </div>
        </div>
        </div>
        <!-- Monty:/page content -->
        <!-- Monty:llamado al pie de pagina a la direccion carpeta global -->
        <?php include '../../global/footer.php'?>

        
      </div>
    </div>
     
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


 <script>
 function filePreview(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('#uploadForm + img').remove();
            $('#uploadForm').after('<img src="'+e.target.result+'" width="450" height="300"/>');
        }
        reader.readAsDataURL(input.files[0]);
    }
}
$('#uploadForm + embed').remove();
$('#uploadForm').after('<embed src="'+e.target.result+'" width="450" height="300">');

$("#file").change(function () {
    filePreview(this);
});

 </script>


<script type="text/javascript">
 $(document).ready(function(){
   $('#guardarmodal').click(function(){
     cargo=$("#ca").val();
    agregardatos(cargo);

   });
  });
 </script>


