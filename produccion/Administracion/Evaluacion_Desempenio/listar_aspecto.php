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

function modify(id){
  document.location.href='editar_aspecto.php?id='+id;
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
        alert('Hubo un errror al cargar los Representantes')
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
            <div class="col-sm-12 col-sm-offset-2 col-md-8 col-md-offset-2 ">
              <div class="x_panel" >
                <div class="x_title">
                  <h4 style="color:RGB(205, 92, 92);">Registro de Aspectos a Evaluar</h4>
                  <ul class="nav navbar-right panel_toolbox">
                  
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  
                  <form id="formed" data-parsley-validate class="form-horizontal form-label-left">
                  <input type="hidden" name="bandera" id="bandera">
                  <input type="hidden" name="canmax" id="canmax">

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

                    <div id="info">
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Nombre: <span style="color:	#000080;"> '</span>
                      </label>
                      <div class="col-md-9 col-sm-9 col-xs-12">
                        <input type="text" id="nombre_ed" name ="nombre_ed"  class="form-control col-md-7 col-xs-12"  disabled>
                      </div>
                    </div>

                   <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Criterio: <span style="color:	#000080;"> '</span>
                      </label>
                      <div class="col-md-9 col-sm-9 col-xs-12">
                        <input type="text" id ="criterio_ed" name ="criterio_ed" class="form-control col-md-7 col-xs-12"  disabled>
                      </div>
                    </div>
                    <div id="insertaraspecto">
                     
                    </div>

                    </div>
                    

                    <div class="ln_solid"></div>
                    <p style="color: RGB(0, 0, 128);">( ' ) Campos no Editables.</p>
                    <p style="color:RGB(205, 92, 92);">( * ) Campos Obligatorios Editables.</p> 
                    <div class="form-group" align="right">
                      <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                        <button class="btn btn-round btn-primary" type="button"  id="btnguardar" value="guardar"><i class="fa fa-save">  Guardar</i></button>
                        <button class="btn btn-round btn-default" type="reset" onclick="cancelar()"><i class="fa fa-ban">  Cancelar</i></button>
                      </div>
                    </div>
                  </form>

                  
                </div>
              </div>
            </div>
          </div>


        <div class="row" >
                    
                <div class="col-sm-12 col-sm-offset-1 col-md-10 col-md-offset-1">
                <div class="x_panel">
                  <div class="x_title">
                    <h4 style="color:RGB(205, 92, 92);">Lista de Criterios de Evaluación Activos.</h4>
                    <ul class="nav navbar-right panel_toolbox">
                    <li><a href="registrar_criterio.php">Registrar Criterios de Evaluación</a>
                    </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <p class="text-muted font-13 m-b-30">
                      Lista de todos los Criterios de Evaluación Activos 
                    </p>
                    
                    <input type="hidden" name="bandera" id="bandera">
                    <input type="hidden" name="baccion" id="baccion">

					
                    <div class="responsive-table">
                      <table id="datatables-example" class="table table-striped table-bordered" width="100%" cellspacing="0">
                      <thead>
                        <tr>
                          <th>No.</th>
                          <th>Evaluaci&oacute;n</th>
                          <th></th>
                          <th>Acciones</th>
                        </tr>
                      </thead>
                      <tbody>
                        
                      <?php
                     // require '../../../build/config/conexion.php';
                     // $con=conectarMysql();
                      $result = $con->query("SELECT ae.ed_idaspectos, c.ed_ncriterio, ae.ed_naspecto FROM ed_aspectos_evaluar as ae, ed_criterio as c WHERE ae.ed_idcriteriofk=c.ed_idcriterio ORDER BY c.ed_ncriterio ASC");
                      $contador=1;
                      if ($result) {
                        while ($fila = $result->fetch_object()) {
                         
                          echo "<tr>";
                          echo "<td>" .$contador. "</td>";
                          echo "<td>" . $fila->ed_ncriterio . "</td>";
                          echo "<td>" . $fila->ed_naspecto . "</td>";
                          echo "<td>  <a class='btn btn-info' onclick='modify(".$fila->ed_idaspectos.")' ><i class='fa fa-edit'></i></a>
                                      </td>";
                          echo "</tr>";
                          $contador++;

                        }
                       }
                      ?>
                      </tbody>
                    </table>
                    </div>
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
    <script type="text/javascript">
      $(document).ready(function(){
        $('#datatables-example').DataTable();
      });
    </script>
  </body>
</html>