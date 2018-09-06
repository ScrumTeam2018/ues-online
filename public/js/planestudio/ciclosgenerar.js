$('#ciclos').focusout(function() {
  var x = $(this).val();
  var tabcontent = $('#addtabcontent');
  var tab = $('#addtab');
  tab.empty();
  tabcontent.empty();
  
  for(var i=1; i<=x ; i++){
    var agregarTab ="<button class='tablinks' onmouseover='openCiclo(event,"+i+")'>ciclo"+i+"</button>" ;
    var agregartabcontent =  "<div id="+i+" class='tabcontent'>"+
  "<div class='x_title'>"+
  "<h4>Registro Asignatura Ciclo "+i+"</h4>"+
  "</div>"+
  "<div class='form-group' align='right'>"+
  "<div class='col-md-6 col-sm-6 col-xs-12 col-md-offset-3'>"+
  "<!-- Monty: coloque una id para usar jquery y asi hacer el llamado al metodo"+
  "que se encuentra dentro de public y un archivo js, llamado planestudio.js -->"+
  "<button class='btn btn-round btn-success' type='button'  value='add' id="+i+" onClick='agregar("+i+");'><i class='fa fa-plus'>  Agregar Nuevo</i></button>"+
  "<button class='btn btn-round btn-default' type='reset'><i class='fa fa-ban'> Guardar Temporal</i></button>"+
  "</div>"+
  "</div>"+
  "<div class='clearfix'></div>"+
  "<br><br>"+
  "<!-- Monty: comienzo del form -->"+
  "<form id='demo-form2' data-parsley-validate class='form-horizontal form-label-left'>"+
  "<!-- Monty: donde se agregaran los nuevos formularios -->"+
  "<div id='addFormulario"+i+"' class='addFormulario'></div>"+
  "<div class='form-group'>"+
  "<label class='control-label col-md-3 col-sm-3 col-xs-12' for='first-name'>Codigo: <span class='required'></span>"+
  "</label>"+
  "<div class='col-md-6 col-sm-6 col-xs-12'>"+
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
  "</div>"+
  "<div class='ln_solid'></div>"+
  "<!-- fin de formulario -->"+
  "</form>"+
  "</div>"+
  "</div>";

  tab.append(agregarTab);
  tabcontent.append(agregartabcontent);
 
  }
 
  // Recomiendo usar la consola en lugar de alerts
  console.log(x);
 });

