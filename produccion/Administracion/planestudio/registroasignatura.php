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
          <label class="control-label col-md-1 col-sm-1 col-xs-2">Carrera: </label>
          <div class="col-md-5 col-sm-5 col-xs-10">
            <select class="form-control">
              <option>Ingenieria en Sistemas Codigo: 175</option>
              <option>Administracion Codigo: 185</option>
            </select>
          </div>
        </div>
        <input type="text" name="ciclos" id="ciclos" placeholder="escribe un numero a generar">
        <label for="">ingrese el valor y das clic en cualquier otro lugar(este valor depende depende de los años) se quitara.</label>

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