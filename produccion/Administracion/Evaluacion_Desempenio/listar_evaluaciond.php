<!DOCTYPE html>
<html lang="es">
<!-- abrir head el cierre esta dentro del archivo que se incluye -->
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

function agregar(id){
  document.location.href='registrar_aspectos.php?id='+id;
 /* $.ajax({
        type: 'POST',
        url: '../../../produccion/Administracion/Evaluacion_Desempenio/registrar_aspectos.php',
        data: {'id': id}
      })
      .done(function(listas_rep){
        document.location.href='registrar_aspectos.php';
      })
      .fail(function(){
        alert('Hubo un error al cargar los Representantes')
      })*/
      
}

function edited(id_ed, nombre, criterio){
         $('#baccion').val(id_ed);
         $('#nombre').val(nombre);
         $('#criterio').val(criterio);
         $('#moded').modal({show:true});
}

function additem(id){
  document.location.href='registrar_item.php?id='+id;
 /* $.ajax({
        type: 'POST',
        url: '../../../produccion/Administracion/Evaluacion_Desempenio/registrar_aspectos.php',
        data: {'id': id}
      })
      .done(function(listas_rep){
        document.location.href='registrar_aspectos.php';
      })
      .fail(function(){
        alert('Hubo un error al cargar los Representantes')
      })*/
      
}



function ver(id){
  $.ajax({
        type: 'POST',
        url: '../../../produccion/Administracion/Representante/mostrarRepresentante.php',
        data: {'id': id}
      })
      .done(function(listas_rep){
        $('.modal-body').html(listas_rep)
        $('#datosRepresentante').modal({show:true});
      })
      .fail(function(){
        alert('Hubo un error al cargar los Representantes')
      })
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
              <div class="col-sm-12 col-sm-offset-1 col-md-10 col-md-offset-1 ">
                <h4 style="color: RGB(0, 0, 128);"><strong>ADMINISTRACI&Oacute;N DE EVALUACIÓN DE DESEMPEÑO.</strong></h4>
                
              </div> 
        </div>
        <div class="clearfix"></div>
      
        <div class="row" >
                    
                <div class="col-sm-12 col-sm-offset-1 col-md-10 col-md-offset-1">
                <div class="x_panel">
                
                  <div class="x_title">
                    

                    <h4 style="color:RGB(205, 92, 92);">Lista de Evaluaciones Inactivas.</h4>
                    <ul class="nav navbar-right panel_toolbox">
                    
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <div class="form-group" id="ed">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Evaluaci&oacute;n: <span class="required" style="color: #CD5C5C;"> *</span></label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <select class="form-control" id="evaluacion" name="evaluacion">
                          <option selected="selected" value="">Seleccione Evaluaci&oacute;n...</option>
                          <?php
                            require '../../../build/config/conexion.php';
                            $con=conectarMysql();
                            $sql_fa  = "SELECT id_ed, nombre_ed FROM evaulaciond WHERE estado_ed=0";
                            $result = $con->query($sql_fa);
                            if ($result) {
                              while ($fila = $result->fetch_object()) {
                                echo "<option value='".$fila->id_ed."'>".$fila->nombre_ed."</option>";
                              }//fin while
                            }
                          ?>  
                        </select>
                      </div>
                      <span class="help-block" id="error"></span>
                    </div>

                   <br><br><br>
                    <div id="agregar_t">
                    </div>
                    
                    <div class="ln_solid"></div>
                      <p style="color:RGB(205, 92, 92);">( * ) Campos Obligatorios Editables.</p> 
                    </div>
                  </div>
                </div>
                </div>
            </div>
             <!-- Modal modificar evaluacion-->
             <form id="frommod" name="frommod">
                    <div class="modal fade" id="moded" name="moded" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog ">
                      <div class="modal-content">

                        <div class="modal-header">
                          <strong><h4 class="modal-title" id="myModalLabel" style="color: RGB(0, 0, 128);">Editar Registro de Evaluación.</strong></h4>
                        </div>
                        

                        <div class="modal-body">
                        <br/>
                        
                        <div class="form-group">
                        <h4 class="modal-title" id="myModalLabel" style="color: RGB(205, 92, 92);">&nbsp;&nbsp;Datos de Evaluación.</h4>
                        <br>
                          <label class="control-label col-md-2 col-sm-2 col-xs-12" for="observacion">Nombre: <span class="required" style="color: #CD5C5C;"> *</span>
                          </label>
                          <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="text" id="nombre" name="nombre" class="form-control col-md-7 col-xs-12" tabindex="1">
                            <br>
                            <span class="help-block" id="error"></span>
                          </div>
                        </div>
                        <br><br>
                        <div class="form-group">
                        
                          <label class="control-label col-md-2 col-sm-2 col-xs-12" for="observacion">Criterio: <span class="required" style="color: #CD5C5C;"> *</span>
                          </label>
                          <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="text" id="criterio" name="criterio"  class="form-control col-md-7 col-xs-12" tabindex="1">
                            <br>
                            <span class="help-block" id="error"></span>
                          </div>
                        </div>
                        
                        <br><br>
                          
                        </div>
                        <div class="modal-footer">
                          <p align="left" style="color:RGB(205, 92, 92);">( * ) Campos Obligatorios.</p>
                          <button class="btn btn-round btn-primary" type="button"  id="modalguardar" name="modalguardar"><i class="fa fa-save">  Guardar</i></button>
                          <button type="button" class="btn btn-round btn-default" data-dismiss="modal"><i class="fa fa-ban">  Cancelar</i></button>
                        </div>

                       
                      </div>
                    </div>
                  </div>
                  </form>
                  <!-- Fin Modal -->

                    <!-- Modal Editar Aspecto-->
                    <form id="fromeditaspecto" name="fromeditaspecto">
                    <div class="modal fade" id="editaspecto" name="editaspecto" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog ">
                      <div class="modal-content">

                        <div class="modal-header">
                        <strong><h4 class="modal-title" id="myModalLabel" style="color: RGB(0, 0, 128);">Editar Aspecto de Evaluación.</strong></h4>
                        </div>
                        

                        <div class="modal-body">
                        <br/>
                        
                        <div class="form-group">
                          <label class="control-label col-md-2 col-sm-2 col-xs-12" for="aspecto">Aspecto: <span class="required" style="color: #CD5C5C;"> *</span>
                          </label>
                          <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="text" id="aspecto" name="aspecto" placeholder="Digite Nombre del Aspecto" class="form-control col-md-7 col-xs-12" tabindex="1">
                            <br>
                            <span class="help-block" id="error"></span>
                          </div>
                        </div>
                        <br><br><br><br>
                          
                        </div>
                        <div class="modal-footer">
                          <p align="left" style="color:RGB(205, 92, 92);">( * ) Campos Obligatorios.</p>
                          <button class="btn btn-round btn-primary" type="button"  id="btnEAspecto" name="btnEAspecto"><i class="fa fa-refresh">  Actualizar</i></button>
                          <button type="button" class="btn btn-round btn-default" data-dismiss="modal"><i class="fa fa-ban">  Cancelar</i></button>
                        </div>

                       
                      </div>
                    </div>
                  </div>
                  </form>
                  <!-- Fin Modal -->


                  <!-- Modal Editar Item-->
                  <form id="fromedititem" name="fromedititem">
                    <div class="modal fade" id="edititem" name="edititem" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog ">
                      <div class="modal-content">

                        <div class="modal-header">
                        <strong><h4 class="modal-title" id="myModalLabel" style="color: RGB(0, 0, 128);">Editar Item de Aspecto de Evaluación.</strong></h4>
                        </div>
                        

                        <div class="modal-body">
                        <br/>
                        
                        <div class="form-group">
                          <label class="control-label col-md-2 col-sm-2 col-xs-12" for="item">Item: <span class="required" style="color: #CD5C5C;"> *</span>
                          </label>
                          <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="text" id="item" name="item" placeholder="Digite Nombre del Item" class="form-control col-md-7 col-xs-12" tabindex="1">
                            <br>
                            <span class="help-block" id="error"></span>
                          </div>
                        </div>
                        <br><br><br><br>
                          
                        </div>
                        <div class="modal-footer">
                          <p align="left" style="color:RGB(205, 92, 92);">( * ) Campos Obligatorios.</p>
                          <button class="btn btn-round btn-primary" type="button"  id="btnEItem" name="btnEItem"><i class="fa fa-refresh">  Actualizar</i></button>
                          <button type="button" class="btn btn-round btn-default" data-dismiss="modal"><i class="fa fa-ban">  Cancelar</i></button>
                        </div>

                       
                      </div>
                    </div>
                  </div>
                  </form>
                  <!-- Fin Modal -->

            

        </div>
        <!-- /page content -->
        <?php include '../../global/footer.php' ?>    
      </div>
    </div>
    <?php include '../../global/script.php' ?>
     <script src="../../../build/config/validaciones/evaluacion_desempenio/validarled.js"></script>
  </body>
</html>