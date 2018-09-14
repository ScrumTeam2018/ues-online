function generar(y) {

  y.split('-');
  var x = y['0'] * 2;
  var tabcontent = $('#addtabcontent');
  var tab = $('#addtab');
  tab.empty();
  tabcontent.empty();
  
  for(var i=1; i<=x ; i++){
    if(i==x){
      var agregarTab ="<button class='tablinks' onmouseover='openCiclo(event,"+i+")'>ciclo"+"&nbsp"+i+"</button>" ;
      var agregartabcontent ="<div id="+i+" class='tabcontent'>"+
      "<div class='x_title'>"+
      "<h4>Registro Asignatura Ciclo "+i+"</h4>"+
      "</div>"+
      "<div class='form-group' align='right'>"+
      "<div class='col-md-6 col-sm-6 col-xs-12 col-md-offset-3'>"+
      "<!-- Monty: coloque una id para usar jquery y asi hacer el llamado al metodo"+
      "que se encuentra dentro de public y un archivo js, llamado planestudio.js -->"+
      "<input type='hidden' value='"+i+"' id='val' name='val'>"+
      "<button class='btn btn-round btn-success' type='button'  value='add' id="+i+" onClick='agregar("+i+");'><i class='fa fa-plus'>  Agregar Nuevo</i></button>"+
      "</div>"+
      "</div>"+
      "<div class='clearfix'></div>"+
      "<br><br>"+
      "<!-- Monty: comienzo del form -->"+
      "<form id='"+i+"' method='POST' name='"+i+"' action='../../../build/config/sql/planestudio/guardarTemp.php' data-parsley-validate class='form-horizontal form-label-left'>"+
      "<input type='hidden' value='"+y['2']+"' id='idcarrera' name='idcarrera'>"+
      "<div class='form-group' align='right'>"+
      "<div class='col-md-6 col-sm-6 col-xs-12 col-md-offset-3'>"+
      "<!-- Monty: coloque una id para usar jquery y asi hacer el llamado al metodo"+
      "que se encuentra dentro de public y un archivo js, llamado planestudio.js -->"+
      "<input type='hidden' value='"+x+"' id='cant_ciclos' name='cant_ciclos'>"+
      "<button class='btn btn-round btn-primary' type='submit'><i class='fa fa-save'> Finalizar</i></button>"+
      "</div>"+
      "</div>"+
      "<!-- Monty: donde se agregaran los nuevos formularios -->"+
      "<div id='addFormulario"+i+"' class='addFormulario'></div>"+
      "<input type='hidden' id='ciclos' name='ciclos' value='"+i+"'>"+
      "<div class='form-group'>"+
      "<label class='control-label col-md-3 col-sm-3 col-xs-12' for='first-name'>Codigo: <span class='required'></span>"+
      "</label>"+
      "<div class='col-md-6 col-sm-6 col-xs-12'>"+
      "<input type='text' id='codigo"+-+i+"' name='codigo"+-+i+"' required='required' class='form-control col-md-7 col-xs-12'>"+
      "</div>"+
      "</div>"+
      "<div class='form-group'>"+
      "<label class='control-label col-md-3 col-sm-3 col-xs-12' for='last-name'>Nombre: <span class='required'></span>"+
      "</label>"+
      "<div class='col-md-6 col-sm-6 col-xs-12'>"+
      "<input type='text' id='nombre"+-+i+"' name='nombre"+-+i+"' required='required' class='form-control col-md-7 col-xs-12'>"+
      "</div>"+
      "</div>"+
      "<div class='form-group'>"+
      "<label class='col-md-3 col-sm-3 col-xs-12 control-label'>Tipo:</label>"+
      "<div class='radio'>"+
      "<label>"+
      "<input type='radio' class='flat' name='tipo"+-+i+"' id='tipo"+-+i+"' value='Obligatoria'> Obligatoria"+
      "</label>"+
      "<label>"+
      "<input type='radio' class='flat' name='tipo"+-+i+"' id='tipo"+-+i+"' value='Electiva'> Electiva"+
      "</label>"+
      "</div>"+
      "</div>"+
      "<div class='form-group'>"+
      "<label class='control-label col-md-3 col-sm-3 col-xs-12'>Unidades Valorativas: </label>"+
      "<div class='col-md-6 col-sm-6 col-xs-12'>"+
      "<select name='uv"+-+i+"' id='uv"+-+i+"' class='form-control'>"+
      "<option>Seleccione. </option>"+
      "<option>2 </option>"+
      "<option>3 </option>"+
      "<option>4 </option>"+
      "<option>5 </option>"+
      "<option>6 </option>"+
      "<option>7 </option>"+
      "</select>"+
      "</div>"+
      "</div>"+
      "<div class='form-group'>"+
      "<label class='control-label col-md-3 col-sm-3 col-xs-12' for='last-name'>Pre-Requisito: <span class='required'></span>"+
      "</label>"+
      "<div class='col-md-6 col-sm-6 col-xs-12'>"+
      "<input type='text' id='prerequisito"+-+i+"' name='prerequisito"+-+i+"' required='required' class='form-control col-md-7 col-xs-12'>"+
      "</div>"+
      "</div>"+
      "<input type='hidden' name='postrequisito' id='postrequisito' value='Ninguna'> "
      "<div class='ln_solid'></div>"+
      "<!-- fin de formulario -->"+
      "</form>"+
      "</div>"+
      "</div>";
    
    }else{
    var agregarTab ="<button class='tablinks' onmouseover='openCiclo(event,"+i+")'>ciclo"+"&nbsp"+i+"</button>" ;
    var agregartabcontent =  "<div id="+i+" class='tabcontent'>"+
  "<div class='x_title'>"+
  "<h4>Registro Asignatura Ciclo "+i+"</h4>"+
  "</div>"+
  "<div class='form-group' align='right'>"+
  "<div class='col-md-6 col-sm-6 col-xs-12 col-md-offset-3'>"+
  "<!-- Monty: coloque una id para usar jquery y asi hacer el llamado al metodo"+
  "que se encuentra dentro de public y un archivo js, llamado planestudio.js -->"+
  "<input type='hidden' value='temporal' id='val' name='val'>"+
  "<input type='hidden' value='"+y['2']+"' id='idcarrera' name='idcarrera'>"+
  "<button class='btn btn-round btn-success' type='button'  value='add' id="+i+" onClick='agregar("+i+");'><i class='fa fa-plus'>  Agregar Nuevo</i></button>"+
  "</div>"+
  "</div>"+
  "<div class='clearfix'></div>"+
  "<br><br>"+
  "<!-- Monty: comienzo del form -->"+

  "<form id='"+i+"' name='"+i+"' method='POST' action='../../../build/config/sql/planestudio/guardarTemp.php' data-parsley-validate class='form-horizontal form-label-left'>"+
  "<input type='hidden' value='"+y['2']+"' id='idcarrera' name='idcarrera'>"+
      "<div class='form-group' align='right'>"+
      "<div class='col-md-6 col-sm-6 col-xs-12 col-md-offset-3'>"+
      "<!-- Monty: coloque una id para usar jquery y asi hacer el llamado al metodo"+
      "que se encuentra dentro de public y un archivo js, llamado planestudio.js -->"+
      "<input type='hidden' value='"+i+"' id='ciclos' name='ciclos'>"+
      "<button class='btn btn-round btn-default' type='submit'><i class='fa fa-save'> Guardar Temporal</i></button>"+
      "</div>"+
      "</div>"+
  "<!-- Monty: donde se agregaran los nuevos formularios -->"+
  "<div id='addFormulario"+i+"' class='addFormulario'></div>"+
  "<div class='form-group'>"+
  "<label class='control-label col-md-3 col-sm-3 col-xs-12' for='first-name'>Codigo: <span class='required'></span>"+
  "</label>"+
  "<div class='col-md-6 col-sm-6 col-xs-12'>"+
  "<input type='text' id='codigo"+-+i+"' name='codigo"+-+i+"' required='required' class='form-control col-md-7 col-xs-12'>"+
  "</div>"+
  "</div>"+
  "<div class='form-group'>"+
  "<label class='control-label col-md-3 col-sm-3 col-xs-12' for='last-name'>Nombre: <span class='required'></span>"+
  "</label>"+
  "<div class='col-md-6 col-sm-6 col-xs-12'>"+
  "<input type='text' id='nombre"+-+i+"' name='nombre"+-+i+"' required='required' class='form-control col-md-7 col-xs-12'>"+
  "</div>"+
  "</div>"+
  "<div class='form-group'>"+
  "<label class='col-md-3 col-sm-3 col-xs-12 control-label'>Tipo:</label>"+
  "<div class='radio'>"+
  "<label>"+
  "<input type='radio' class='flat' name='tipo"+-+i+"' id='tipo"+-+i+"' value='Obligatoria'> Obligatoria"+
  "</label>"+
  "<label>"+
  "<input type='radio' class='flat' name='tipo"+-+i+"' id='tipo"+-+i+"' value='Electiva'> Electiva"+
  "</label>"+
  "</div>"+
  "</div>"+
  "<div class='form-group'>"+
  "<label class='control-label col-md-3 col-sm-3 col-xs-12'>Unidades Valorativas: </label>"+
  "<div class='col-md-6 col-sm-6 col-xs-12'>"+
  "<select name='uv"+-+i+"' id='uv"+-+i+"' class='form-control'>"+
  "<option>Seleccione. </option>"+
  "<option>2 </option>"+
  "<option>3 </option>"+
  "<option>4 </option>"+
  "<option>5 </option>"+
  "<option>6 </option>"+
  "<option>7 </option>"+
  "</select>"+
  "</div>"+
  "</div>"+
  "<div class='form-group'>"+
  "<label class='control-label col-md-3 col-sm-3 col-xs-12' for='last-name'>Pre-Requisito: <span class='required'></span>"+
  "</label>"+
  "<div class='col-md-6 col-sm-6 col-xs-12'>"+
  "<input type='text' id='prerequisito"+-+i+"' name='prerequisito"+-+i+"' required='required' class='form-control col-md-7 col-xs-12'>"+
  "</div>"+
  "</div>"+
  "<div class='form-group'>"+
  "<label class='control-label col-md-3 col-sm-3 col-xs-12' for='last-name'>Post-Requisito <span class='required'></span>"+
  "</label>"+
  "<div class='col-md-6 col-sm-6 col-xs-12'>"+
  "<input type='text' id='postrequisito"+-+i+"' name='postrequisito"+-+i+"' required='required' class='form-control col-md-7 col-xs-12'>"+
  "</div>"+
  "</div>"+
  "<div class='ln_solid'></div>"+
  "<!-- fin de formulario -->"+
  "</form>"+
  "</div>"+
  "</div>";
    }
  tab.append(agregarTab);
  tabcontent.append(agregartabcontent);
 
  }
 
  // Recomiendo usar la consola en lugar de alerts
  console.log(x);
}

