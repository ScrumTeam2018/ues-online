<!DOCTYPE html>
<html lang="es">
<!-- abrir head el cierre esta dentro del archivo que se incluye -->
<head>
<!-- estilo vertical para las ventanas -->
<script>
function guardarTemporal(x){

document.planestudio.submit()

}
</script>
<?php include 'style/estiloTab.php' ?>
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
            <?php include '../../global/menu.php' ?>
          </div>
        </div>
       <?php include '../../global/navigation.php' ?>
        <!-- page content Panel de Trabajo -->
        <div class="right_col" role="main">
        <!--Monty: Aqui dentro iria todo lo necesario para el panel de trabajo -->

        <!--Magda titulo de plan -->
        <div class="page-title">
              <div class="title_left">
                <h3>Plan de Estudio</h3>
                
              </div> 
        </div>
        <div class="clearfix"></div>
<!-- Este Div es clave para que no aparesca la franja azul en la parte inferior -->
        <div >
          
        <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Carrera: <span class="required" style="color: #CD5C5C;"> *</span></label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                      <?php
                            require '../../../build/config/conexion.php';
                            $con=conectarMysql();
                            
                            $consulta1  = "SELECT * FROM plan_estudio WHERE estado_pe='1' ORDER BY nombre_pe";          
                            $result1 = $con->query($consulta1);
                        echo "<select class='form-control' onChange='generar(this.value)' id='facultad' name='facultad' tabindex='4'>";
                          echo "<option selected='selected'   value=''>Seleccione Carrera...</option>";
                            if ($result1) {
                              while ($fila2 = $result1->fetch_object()) {
                                $consulta  = "SELECT * FROM carrera WHERE idcarrera='5' ORDER BY nombre_ca";
                                $result = $con->query($consulta);
                                $fila = $result->fetch_object();
                                echo "<option value='".$fila->duracion_ca.'-'.$fila2->idplanestudio."'>".strtoupper($fila2->nombre_pe)."</option>";
                              }//fin while
                            }
                          ?>  
                        </select>
                      </div>
                      <span class="help-block" id="error"></span>
                    </div>
        <div class="clearfix"></div>
        </br>

<!-- Monty: dentro de este div agrego los tab o botones de la izquierda usando jquery -->
        <div id = "addtab" class="tab"></div>

<!-- Monty: formulario pa el resguardar la informacion -->
<form action="../../../build/config/sql/planestudio/guardar.php" name="planestudio" id="planestudio" method="POST">
<!-- Monty: agregara todos los tabcontent el contenido usando jquery -->
<div id= "addtabcontent" class="addtabcontent" >
</div>
</form>

        </div>
        <!-- /page content -->    
        
      </div>
    </div>
    <?php include '../../global/footer.php' ?>
    <!-- llamado de los script a importar -->
    <?php include '../../global/script.php' ?>

    <script>
      /*Monty: metodo que hace el paso entre los ciclos en el tab.. */
function openCiclo(evt, id) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(id).style.display = "block";
    evt.currentTarget.className += " active";
}

</script>
<!-- Monty: llamado al archivo asi el metodo jquery funcione -->
<script src="../../../public/js/planestudio/formularioMateria.js"></script>
<script src="../../../public/js/planestudio/ciclosgenerar.js"></script>
</body>
</html>