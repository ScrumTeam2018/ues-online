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
              location.href='listaraula.php';
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
                <h3 style="color: RGB(0, 0, 128);"><strong>ADMINISTRACIÓN DE AULAS.</strong></h3>
              </div> 
        </div>
        <div class="clearfix"></div>

        <div class="row" >
              <div class="col-sm-12 col-sm-offset-2 col-md-8 col-md-offset-2 ">
                <div class="x_panel" >
                  <div class="x_title">
                    <h3 style="color:RGB(205, 92, 92);">Editar.</h3>
                    <ul class="nav navbar-right panel_toolbox">
                    <li><a href="listaraula.php">Lista Aula</a>
                    </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form id="formempleado" action="../../../build/config/sql/aula/crudaula.php" method="POST" data-parsley-validate class="form-horizontal form-label-left">
                    <input type="hidden" name="bandera" id="bandera">
                    <input type="hidden" name="baccion" id="baccion" value="<?php echo $idaula; ?>">
                      
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nombre">Nombre: <span class="required" style="color: #CD5C5C;"> *</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="nombre" name="nombre" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $nombre; ?>" tabindex="1">
                        </div>
                        <span class="help-block" id="error"></span>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="ubicacion">Ubicacion: <span class="required" style="color: #CD5C5C;"> *</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="ubicacion" name="ubicacion" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $ubicacion; ?>" tabindex="2">
                        </div>
                        <span class="help-block" id="error"></span>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="ubicacion">Capacidad: <span class="required" style="color: #CD5C5C;"> *</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="capacidad" name="capacidad" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $cantidad; ?>" tabindex="2">
                        </div>
                        <span class="help-block" id="error"></span>
                      </div>

                     
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
