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
</div>

<div id="1" class="tabcontent">
 
  <!-- Magda inicio del formulario 1 -->
  
  <input type="button" value="add" onclick="Agregaitems()">
  <div id="add" class="add"></div>

  <div class="row" >
              <div class="col-sm-12 col-sm-offset-2 col-md-8 col-md-offset-2 ">
                <div class="x_panel" >
                  <div class="x_title">
                    <h4>Registro Asignatura Ciclo 1</h4>                
                  </div>
                  <div class="x_content">
                    <br />
                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

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
                      
                      <div class="ln_solid"></div>
                      <div class="form-group" align="right">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button class="btn btn-round btn-success" type="button"  value="add" onclick="Agregaitems()"><i class="fa fa-plus">  Agregar</i></button>
						              <button class="btn btn-round btn-default" type="reset"><i class="fa fa-ban">  Cancelar</i></button>
                        </div>
                      </div>

                    </form>
                  </div>
                </div>
              </div>
            </div>

        </div>
        <!-- Magda fin del formulario 1-->

</div>


<div id="2" class="tabcontent">
  <h3>ciclo 2</h3>
  <p>formulario 2</p> 
</div>

<div id="3" class="tabcontent">
  <h3>ciclo 3</h3>
  <p>formulario 3</p>
</div>

        </div>
        <!-- /page content -->    
        <?php include '../../global/footer.php' ?>
      </div>
    </div>
    
    <?php include '../../global/script.php' ?>
    <script>
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

function getInput(type, placeholder){
  var nodo = document.createElement("input");
  nodo.type = type;
  nodo.placeholder = placeholder;
  return nodo;
}

function append(className, nodoToAppend){
  var nodo = document.getElementsByClassName(className)[0];
  nodo.appendChild(nodoToAppend);
}

/*ESTE ES EL CODIGO Q SE SUPONE DEBERIA  AGREGAR LAS CAJAS DE TEXTO */
function Agregaitems(){

	var nodo1 = getInput("text", "Nombre del producto NUEVO");
    append("add", nodo1);

	}
</script>
  </body>
</html>
