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
  document.location.href='mantenimiento_representante.php?id='+id;
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
                <h4 style="color: RGB(0, 0, 128);"><strong>REPRESENTANTES.</strong></h4>
                
              </div> 
        </div>
        <div class="clearfix"></div>

        <div class="row" >
                    
                <div class="col-sm-12 col-sm-offset-1 col-md-10 col-md-offset-1">
                <div class="x_panel">
                  <div class="x_title">
                    <h4 style="color:RGB(205, 92, 92);">Lista de Representantes Activos.</h4>
                    <ul class="nav navbar-right panel_toolbox">
                    <li><a href="registro_representante.php">Registrar Representante</a>
                    </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <p class="text-muted font-13 m-b-30">
                      Lista de todos los Representantes Activos 
                    </p>
                    
                    <input type="hidden" name="bandera" id="bandera">
                    <input type="hidden" name="baccion" id="baccion">

					
                    <div class="responsive-table">
                      <table id="datatables-example" class="table table-striped table-bordered" width="100%" cellspacing="0">
                      <thead>
                        <tr>
                          <th>No.</th>
                          <th>Nombres</th>
                          <th>Apellidos</th>
                          <th>Tel&eacute;fono</th>
                          <th>Correo Electr&oacute;nico</th>
                          <th>Acciones&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                        </tr>
                      </thead>
                      <tbody>
                        
                      <?php
                      require '../../../build/config/conexion.php';
                      $con=conectarMysql();
                      $result = $con->query("SELECT * FROM representante_facultad WHERE estado_rf=1 ORDER By nombre_rf ASC");
                      $contador=1;
                      if ($result) {
                        while ($fila = $result->fetch_object()) {
                         
                          echo "<tr>";
                          echo "<td>" .$contador. "</td>";
                          echo "<td>" . $fila->nombre_rf . "</td>";
                          echo "<td>" . $fila->apellido_rf . "</td>";
                          echo "<td>" . $fila->telefono_rf . "</td>";
                          echo "<td>" . $fila->correo_rf. "</td>";
                          echo "<td><a class='btn btn-success openBtn' type='button' onclick='ver(".$fila->id_re_fa.")'><i class='fa fa-eye'></i></a>
                                    <a class='btn btn-info' onclick='modify(".$fila->id_re_fa.")' ><i class='fa fa-edit'></i></a>
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

            <!-- Modal -->
            <div class="modal fade" id="datosRepresentante" name="datosRepresentante" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">

                        <div class="modal-header">
                          <h4 class="modal-title" id="myModalLabel" style="color: RGB(0, 0, 128);">Informaci&oacute;n Representante</h4>
                        </div>
                        <div class="modal-body">
                          
                        </div>
                        <div class="modal-footer">
                          <p align="left"" style="color: RGB(0, 0, 128);">( ' ) Campos no Editables.</p>
                          <button type="button" class="btn btn-round btn-default" data-dismiss="modal"><i class="fa fa-ban">  Cancelar</i></button>
                          
                        </div>

                      </div>
                    </div>
                  </div>
                  <!-- Fin Modal -->

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