<!DOCTYPE html>
<html lang="es">
<!-- abrir head el cierre esta dentro del archivo que se incluye -->
<head>
<!-- estilo vertical para las ventanas -->
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

        <div>

        <div class="form-group">
          <label class="control-label col-md-1 col-sm-1 col-xs-2">Carrera: </label>
          <div class="col-md-5 col-sm-5 col-xs-10">
            <select class="form-control">
              <option>Ingenieria en Sistemas Codigo: 175</option>
              <option>Administracion Codigo: 185</option>
            </select>
          </div>
        </div>

        
        <div class="clearfix"></div>
        </br>


        <div class="tab">
  <button class="tablinks" onmouseover="openCiclo(event, '1')">ciclo 1</button>
  <button class="tablinks" onmouseover="openCiclo(event, '2')">ciclo 2</button>
  <button class="tablinks" onmouseover="openCiclo(event, '3')">ciclo 3</button>
  <button class="tablinks" onmouseover="openCiclo(event, '3')">ciclo 4</button>
  <button class="tablinks" onmouseover="openCiclo(event, '3')">ciclo 5</button>
</div>


<div id="1" class="tabcontent">
              <div class="x_title">
                    <h4>Registro Asignatura Ciclo 1</h4>                
                  </div>
 
  <!-- Magda inicio del formulario 1 -->
  
                      <div class="form-group" align="right">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button class="btn btn-round btn-success" type="button"  value="add" onclick="Agregaitems()"><i class="fa fa-plus">  Agregar Nuevo</i></button>
						              <button class="btn btn-round btn-default" type="reset"><i class="fa fa-ban"> Guardar Temporal</i></button>
                        </div>
                      </div>
                      <div class="clearfix"></div>
                      <br><br>
                    <!-- Monty: comienzo del form -->
                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                      <!-- Monty: donde se agregaran los nuevos formularios -->
                      
                    <div id="addFormulario" class="addFormulario"></div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Codigo: <span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Nombre: <span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="last-name" name="last-name" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                    
                      <div class="form-group">
                        <label class="col-md-3 col-sm-3 col-xs-12 control-label">Tipo:</label>
                        <div class="radio">
                            <label>
                              <input type="radio" class="flat" name="iCheck"> Obligatoria
                            </label>
                         
                            <label>
                              <input type="radio" class="flat" name="iCheck"> Electiva
                            </label>
                          </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Unidades Valorativas: </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control">
                            <option>2 </option>
                            <option>4 </option>
                          </select>
                        </div>
                      </div>
                    <!-- fin de formulario -->
                    </form>
                  </div>
                  

        <!-- Magda fin del formulario 1-->

</div>

<!-- agregar la parte derecha por cada panel -->
<div id="2" class="tabcontent">
  <h3>ciclo 2</h3>
  <p>formulario 2</p> 
</div>

<div id="3" class="tabcontent">
  <h3>ciclo 3</h3>
  <p>formulario 3</p>
</div>
<!-- Monty: formulario pa el resguardar la informacion -->
<form action="">
<!-- Monty: agregara todos los tabcontent dinamicamente aqui se insertaran para el llamado -->
<div id= "addtabcontent" class="addtabcontent" >
</div>
</form>

        </div>
        <!-- /page content -->    
        <?php include '../../global/footer.php' ?>
      </div>
    </div>
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


/*Monty: codigo que genera los nuevo formularios en el plan de estudio usando JQuery */
function Agregaitems(){
  /* llamo al div donde deseo inserta el formulario*/
var dir = $('#addFormulario');
/* hago el string que deseo insertar en el div que he llamado */
 var formulario= "<div class='form-group'>"+
 "<label class='control-label col-md-3 col-sm-3 col-xs-12' for='first-name'>"+
 "Codigo: <span class='required'></span>"+
 "</label><div class='col-md-6 col-sm-6 col-xs-12'>"+
 "<input type='text' id='first-name' required='required' class='form-control col-md-7 col-xs-12'>"+
 "</div>"+
 "</div>"+
 "<div class='form-group'>"+
 "<label class='control-label col-md-3 col-sm-3 col-xs-12' for='last-name'>Nombre: <span class='required'></span>"+
 "</label>"+
 "<div class='col-md-6 col-sm-6 col-xs-12'>"+
 "<input type='text' id='last-name' name='last-name' required='required' class='form-control col-md-7 col-xs-12'>"+
 "</div>"+
 "</div>"+
 "<div class='form-group'>"+
 "<label class='col-md-3 col-sm-3 col-xs-12 control-label'>Tipo:</label>"+
 "<div class='radio'>"+
 "<label>"+
 "<input type='radio' class='flat' name='iCheck'> Obligatoria"+
 "</label>"+
 "<label>"+
 "<input type='radio' class='flat' name='iCheck'> Electiva"+
 "</label>"+
 "</div>"+
 "</div>"+
 "<div class='form-group'>"+
 "<label class='control-label col-md-3 col-sm-3 col-xs-12'>Unidades Valorativas: </label>"+
 "<div class='col-md-6 col-sm-6 col-xs-12'>"+
 "<select class='form-control'>"+
 "<option>2 </option>"+
 "<option>4 </option>"+
 "</select>"+
 "</div>"+
 "</div>";
 /* llamo al div y le digo con el metodo append que ahi dentro debe agregarlo todo que es
 escribi en la variable formulario*/
 dir.append(formulario);
	}
</script>
</body>
</html>