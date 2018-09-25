<!DOCTYPE html>
<html lang="es">
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
  document.location.href='editarasignatura.php?id='+id;
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
              $("#formplan").submit();
            
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
                <h3 style="color: RGB(0, 0, 128);"><strong>ASIGNATURAS.</strong></h3>
                
              </div> 
        </div>
        <div class="clearfix"></div>

        <div class="row" >
          <!--    <div class="col-sm-12 col-sm-offset-1 col-md-10 col-md-offset-1 ">-->
                
                   
                    
                <div class="col-sm-12 col-sm-offset-1 col-md-10 col-md-offset-1">
                <div class="x_panel">
                  <div class="x_title">
                    <h3 style="color:RGB(205, 92, 92);">Lista de Asignaturas Activas.</h3>
                    <ul class="nav navbar-right panel_toolbox">
                    <li><a href="registroplan.php">Registrar Asignatura</a>
                    </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Plan de Estudio: <span class="required" style="color: #CD5C5C;"> *</span></label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                      <?php
                            require '../../../build/config/conexion.php';
                            $con=conectarMysql();
                            
                            $consulta1  = "SELECT * FROM plan_estudio WHERE estado_pe='1' ORDER BY nombre_pe";          
                            $result1 = $con->query($consulta1);
                        echo "<select class='form-control' onChange='generar(this.value)' id='facultad' name='facultad' tabindex='4'>";
                          echo "<option selected='selected'   value=''>Seleccione Plan Estudio...</option>";
                            if ($result1) {
                              while ($fila2 = $result1->fetch_object()) {
                                echo "<option value='".$fila->duracion_ca.'-'.$fila2->idplanestudio."'>".strtoupper($fila2->nombre_pe)."</option>";
                              }//fin while
                            }
                          ?>  
                        </select>
                      </div>
                      <span class="help-block" id="error"></span>
                    </div>
                  <div class="x_content">
                    <p class="text-muted font-13 m-b-30">
                      Lista de todas las Asignaturas Activas. 
                    </p>
                    <form id="formplan" action="../../../build/config/sql/asignaturas/guardarasignatura.php" method="POST" data-parsley-validate class="form-horizontal form-label-left">
                    <input type="hidden" name="bandera" id="bandera">
                    <input type="hidden" name="baccion" id="baccion">

					
                    <div class="responsive-table">
                      <table id="datatables-example" class="table table-striped table-bordered" width="100%" cellspacing="0">
                      <thead>
                        <tr>
                          <th>No.</th>
                          <th>Nombre de la Asignatura</th>
                          <th>Tipo</th>
                          <th>Ciclo</th>
                          <th>Pre-Requisito</th>
                          <th>Post-Requisito</th>
                          <th>Acciones&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                        </tr>
                      </thead>
                      <tbody>
                        
                      <?php
                      $result = $con->query("SELECT a.idasignatura,a.codigo_as, a.nombre_as, a.tipo_as,a.uv_as,a.ciclo_as,a.estado_as,a.prerequisito,a.postrequisito FROM asignatura as a WHERE a.tipo_as=2 and a.estado_as=0 
                      ORDER BY a.nombre_as  ASC");
                      $contador=1;
                      if ($result) {
                        while ($fila = $result->fetch_object()) {
                         
                          echo "<tr>";
                          echo "<td>" .$contador. "</td>";
                          echo "<td>" . $fila->nombre_as . "</td>";
                          echo "<td> Electiva </td>";
                          echo "<td>" . $fila->ciclo_as . "</td>";
                          echo "<td>" . $fila->prerequisito . "</td>";
                          echo "<td>" . $fila->postrequisito . "</td>";
                          echo "<td> <a class='btn btn-success btn-lg' onclick='confirmar(".$fila->idasignatura.")' ><i class='fa fa-long-arrow-up'></i></a>
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
