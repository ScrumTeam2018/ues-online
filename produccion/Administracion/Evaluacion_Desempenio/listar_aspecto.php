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
  document.location.href='editarCarrera.php?id='+id;
}

function ver(id){
  $.ajax({
        type: 'POST',
        url: '../../../produccion/Administracion/carrera/mostrarCarrera.php',
        data: {'id': id}
      })
      .done(function(listas_rep){
        $('.modal-body').html(listas_rep)
        $('#datosCarrera').modal({show:true});
      })
      .fail(function(){
        alert('Hubo un errror al cargar las Carreras')
      })
}

function confirmar(id){
          swal({ 
            title: "Advertencia",
            text: "¿Desea Dar Baja a Este Registro?",
            type: "warning",
            showCancelButton: true,
            cancelButtonText: "No",
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Si",
            closeOnConfirm: false },

            function(){ 
              //event to perform on click of ok button of sweetalert
              document.getElementById('bandera').value='darbaja';
              document.getElementById('baccion').value=id;
              $("#formcarrera").submit();
            
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
              <div class="col-sm-12 col-sm-offset-1 col-md-10 col-md-offset-1 ">
                <h4 style="color: RGB(0, 0, 128);"><strong>CARRERA.</strong></h4>
                
              </div> 
        </div>
        <div class="clearfix"></div>
       
        <div class="row" >
          <!--    <div class="col-sm-12 col-sm-offset-1 col-md-10 col-md-offset-1 ">-->
                  
                    
                <div class="col-sm-12 col-sm-offset-1 col-md-10 col-md-offset-1">
                <div class="x_panel">
                  <div class="x_title">
                    <h4 style="color:RGB(205, 92, 92);">Lista de Carreras Activas.</h4>
                    <ul class="nav navbar-right panel_toolbox">
                    <li><a href="registroCarrera.php">Registrar Carrera</a>
                    </li>
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
