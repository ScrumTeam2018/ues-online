<?php
     require '../../../build/config/conexion.php';
     $con=conectarMysql();
     $id=$_REQUEST['id'];
     $result = $con->query("SELECT * FROM empleado WHERE idempleado=".$id);
     if ($result) {
       while ($fila = $result->fetch_object()) {
         $idempleado=$fila->idempleado;
         $nombre=$fila->nombre_em;
         $apellido=$fila->apellido_em;
         $dui=$fila->DUI_em;
         $nit=$fila->NIT_em;
         $direccion=$fila->direccion_em;
         $cargo=$fila->cargo_em;
         $especialidad=$fila->especialidad_em;
         $genero=$fila->genero_em;
         $estado=$fila->estado_ci;
    
       }
     }

?>
<!DOCTYPE html>
<html lang="es">
<!-- abrir head  -->
<head>
<?php include '../../global/head.php' ?>

<script type="text/javascript">
        $('#nombre').blur(funcion(e){
            alert($('#estadoff').val)
        });
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
              location.href='listaEmpleado.php';
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

        <!--Magda titulo -->
        <div class="page-title">
              <div class="col-sm-12 col-sm-offset-2 col-md-8 col-md-offset-2 ">
                <h3 style="color: RGB(0, 0, 128);"><strong>RECURSOS HUMANOS.</strong></h3>
              </div> 
        </div>
        <div class="clearfix"></div>

        <div class="row" >
              <div class="col-sm-12 col-sm-offset-2 col-md-8 col-md-offset-2 ">
                <div class="x_panel" >
                  <div class="x_title">
                    <h3 style="color:RGB(205, 92, 92);">Editar.</h3>
                    <ul class="nav navbar-right panel_toolbox">
                    <li><a href="listaEmpleado.php">Lista Tutor</a>
                    </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form id="formempleado" action="../../../build/config/sql/empleado/crudEmpleado.php" method="POST" data-parsley-validate class="form-horizontal form-label-left">
                    <input type="hidden" name="bandera" id="bandera">
                    <input type="hidden" name="baccion" id="baccion" value="<?php echo $idempleado; ?>">

                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Cargo: <span style="color:	#000080;"> '</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control" id="cargo" name="cargo" disabled>
                          <option selected="selected" value="">Seleccione Cargo...</option>
                          <?php
                              $consulta  = "SELECT * FROM cargo ORDER BY nombre_ca";
                              $result = $con->query($consulta);
                              if ($result) {
                                while ($fila = $result->fetch_object()) {
                                  echo "<option value='".$fila->id_ca_em."'>".strtoupper($fila->nombre_ca)."</option>";
                                }//fin while
                              }
                            ?>  
                          </select>
                        </div>
                        <span class="help-block" id="error"></span>
                        <script language="javascript">
                            document.forms['formempleado']['cargo'].value=<?php echo $cargo; ?>;
                        </script>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="dui">DUI: <span style="color:	#000080;"> '</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="dui" name="dui" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $dui; ?>" disabled >
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nit">NIT: <span style="color:	#000080;"> '</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="nit" name="nit" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $nit; ?>" disabled>
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nombre">Nombre: <span class="required" style="color: #CD5C5C;"> *</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="nombre" name="nombre" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $nombre; ?>" tabindex="1">
                        </div>
                        <span class="help-block" id="error"></span>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="apellido">Apellido: <span class="required" style="color: #CD5C5C;"> *</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="apellido" name="apellido" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $apellido; ?>" tabindex="2">
                        </div>
                        <span class="help-block" id="error"></span>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="direccion">Direccion: <span class="required" style="color: #CD5C5C;"> *</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="direccion" name="direccion" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $direccion; ?>" tabindex="3">
                        </div>
                        <span class="help-block" id="error"></span>
                      </div>

                      <div class='form-group'>
                      <label class='col-md-3 col-sm-3 col-xs-12 control-label'>Genero: <span class="required" style="color: #CD5C5C;"> *</span></label>
                        <div class='radio col-md-6 col-sm-6 col-xs-12'>
                        <label>
                        <input type='radio' class='flat' id="genero" value="Masculino" name='genero' <?php if($genero=="Masculino") echo "checked"; ?>> Masculino </label>
                        <label>
                        <input type='radio' class='flat' id="genero" value="Femenino" name='genero'<?php if($genero=="Femenino") echo "checked"; ?>> Femenino </label>
                        </div>
                      </div>


                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Estado Civil <span class="required" style="color: #CD5C5C;"> *</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control" id="estadoff" name="estadoff">
                          <option selected="selected" value="">Seleccione Estado Civil...</option>
                            <option value="Soltero(a)">Soltero(a)</option>
                            <option value="Casado(a)">Casado(a)</option>
                            <option value="Viudo(a)">Viudo(a)</option>
                            <option value="Divorciado(a)">Divorciado(a)</option>
                            <option value="Separado(a)">Separado(a)</option>
                            <option value="Conviviente">Conviviente</option>
                          </select>
                          </div>
                          <span class="help-block" id="error"></span>
                          </div>
                        <script language="javascript">
                            document.forms['formempleado']['estadoff'].value=<?php echo $estado; ?>;
                        </script>



                        

                     

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Especialidad: <span class="required" style="color: #CD5C5C;"> *</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control" id="especialidad" name="especialidad">
                          <option selected="selected" value="">Seleccione Especialidad...</option>
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
                      <script language="javascript">
                            document.forms['formempleado']['especialidad'].value=<?php echo $especialidad; ?>;
                        </script>

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
        
        </div>
        <!-- /page content -->    
        <?php include '../../global/footer.php' ?>
      </div>
    </div>
    
    <?php include '../../global/script.php' ?>
    <script src="../../../build/config/validaciones/empleado/validarmod.js"></script>
    <script src="../../../public/js/personales/data-mask.js"></script> 

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
function Modal_Nuevo(){
$("#Modal_Nueva_Especialidad").modal("show");
}

function Modal_Nuevo(){
$("#Modal_Nuevo_Cargo").modal("show");
}

 </script>
</body>
</html>
