<!DOCTYPE html>
<html lang="en">
<!-- abrir head el cierre esta dentro del archivo que se incluye -->
<head>
<!-- estilo vertical para las ventanas -->
<style>
* {box-sizing: border-box}
body {font-family: "Lato", sans-serif;}

/* Style the tab */
.tab {
    float: left;
    border: 1px solid #ccc;
    background-color: #f1f1f1;
    width: 10%;
    height: 300px;
}

/* Style the buttons inside the tab */
.tab button {
    display: block;
    background-color: inherit;
    color: black;
    padding: 22px 16px;
    width: 100%;
    border: none;
    outline: none;
    text-align: left;
    cursor: pointer;
    font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
    background-color: #ccc;
}

/* Create an active/current "tab button" class */
.tab button.active {
    background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
    float: left;
    padding: 0px 12px;
    border: 1px solid #ccc;
    width: 90%;
    border-left: none;
    height: 300px;
    display: none;
}

/* Clear floats after the tab */
.clearfix::after {
    content: "";
    clear: both;
    display: table;
}
</style>
<?php include '../../global/head.php' ?>

    <script type="text/javascript">

      function modify(id){
        document.location.href='editarEmpleado.php?id='+id;
      }

      function confirmar(id){
          swal({ 
            title: "Advertencia",
            text: "¿Desea Dar Alta a Este Registro?",
            type: "warning",
            showCancelButton: true,
            cancelButtonText: "No",
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Si",
            closeOnConfirm: false },

            function(){ 
              //event to perform on click of ok button of sweetalert
              document.getElementById('bandera').value='daralta';
              document.getElementById('baccion').value=id;
              $("#formempleado").submit();
            
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
                <h3 style="color: RGB(0, 0, 128);"><strong>RECURSOS HUMANOS.</strong></h3>
                
              </div> 
        </div>
        <div class="clearfix"></div>

        <div class="row" >
              <div class="col-sm-12 col-sm-offset-1 col-md-10 col-md-offset-1 ">
                <div class="x_panel">
                  <div class="x_title">
                    <h3 style="color:RGB(205, 92, 92);">Lista de Tutores Inactivos.</h3>
                    <ul class="nav navbar-right panel_toolbox">
                    <li><a href="registroEmpleado.php">Registrar Tutor</a>
                    </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <p class="text-muted font-13 m-b-30">
                      Lista de Tutores Inactivos.
                    </p>

                    <form id="formempleado" action="../../../build/config/sql/empleado/crudEmpleado.php" method="POST" data-parsley-validate class="form-horizontal form-label-left">
                    <input type="hidden" name="bandera" id="bandera">
                    <input type="hidden" name="baccion" id="baccion">
					
                    <div class="responsive-table">
                      <table id="datatables-example" class="table table-striped table-bordered" width="100%" cellspacing="0">
                      <thead>
                        <tr>
                          <th>No.</th>
                          <th>Nombres</th>
                          <th>Apellidos</th>
                          <th>Especialidad</th>
                          <th>Acciones</th>
                        </tr>
                      </thead>
                      <tbody>
                        
                      <?php
                      require '../../../build/config/conexion.php';
                      $con=conectarMysql();
                      $result = $con->query("SELECT * FROM empleado as e,especialidad_empleado as esm where e.especialidad_em=esm.id_es_em AND e.estado_em='0'");
                      $contador=1;
                      if ($result) {
                        while ($fila = $result->fetch_object()) {
                         
                          echo "<tr>";
                          echo "<td>" .$contador. "</td>";
                          echo "<td>" . $fila->nombre_em . "</td>";
                          echo "<td>" . $fila->apellido_em . "</td>";
                          echo "<td>" . $fila->nombre_es . "</td>";
                          echo "<td> 
                                     <a class='btn btn-success btn-lg' onclick='confirmar(".$fila->idempleado.")' ><i class='fa fa-long-arrow-up'></i></a>
                                      </td>";
                          echo "</tr>";
                          $contador++;

                        }
                       }
                      ?>
                      </tbody>
                    </table>
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
    <script type="text/javascript">
      $(document).ready(function(){
        $('#datatables-example').DataTable();
      });
    </script>
    
  </body>
</html>
