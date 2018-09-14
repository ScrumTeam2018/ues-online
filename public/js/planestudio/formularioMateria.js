/*Monty: codigo que genera los nuevo formularios en el plan de estudio usando JQuery */
var contadorciclo1=0;
var contador=1;
function agregar(x){
    /* llamo al div donde deseo inserta el formulario*/
var dir = $('#addFormulario'+x);
if(contador==1){
  var formulario2 =  "<div id='contador"+x+"'></div>";
  dir.append(formulario2);
}
/* hago el string que deseo insertar en el div que he llamado */
 var formulario="<div class='row' id='r"+contadorciclo1+"'>"+
 "<div class='form-group'>"+
 "<button class='btn btn-default  dim' type='button' onclick='deleteciclo1("+contadorciclo1+","+x+")' ><i class='fa fa-minus'></i> Eliminar Formulario.</button>"+
 "<label class='control-label col-md-3 col-sm-3 col-xs-12' for='first-name'>"+
 "Codigo: <span class='required'></span>"+
 "</label><div class='col-md-6 col-sm-6 col-xs-12'>"+
 "<input type='text' id='codigo"+-+x+"' name='codigo"+-+x+"' required='required' class='form-control col-md-7 col-xs-12'>"+
 "</div>"+
 "</div>"+
 "<div class='form-group'>"+
 "<label class='control-label col-md-3 col-sm-3 col-xs-12' for='last-name'>Nombre: <span class='required'></span>"+
 "</label>"+
 "<div class='col-md-6 col-sm-6 col-xs-12'>"+
 "<input type='text' id='nombre"+-+x+"' name='nombre"+-+x+"' required='required' class='form-control col-md-7 col-xs-12'>"+
 "</div>"+
 "</div>"+
 "<div class='form-group'>"+
 "<label class='col-md-3 col-sm-3 col-xs-12 control-label'>Tipo:</label>"+
 "<div class='radio'>"+
 "<label>"+
 "<input type='radio' class='flat' name='tipo"+-+x+"' id='tipo"+-+x+"' value='Obligatoria'> Obligatoria "+
 "</label>"+
 "<label>"+
 "<input type='radio' class='flat' name='tipo"+-+x+"' id='tipo"+-+x+"' value='Electiva'> Electiva "+
 "</label>"+
 "</div>"+
 "</div>"+
 "<div class='form-group'>"+
 "<label class='control-label col-md-3 col-sm-3 col-xs-12'>Unidades Valorativas: </label>"+
 "<div class='col-md-6 col-sm-6 col-xs-12'>"+
 "<select name='uv"+-+x+"' id='uv"+-+x+"' class='form-control'>"+
 "<option> Selecione. </option>"+
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
 "</div>";
 /* llamo al div y le digo con el metodo append que ahi dentro debe agregarlo todo que es
 escribi en la variable formulario*/
 contadorciclo1=contadorciclo1+1;
 contador= contador+1;
 dir.prepend(formulario);

 var addcontador = "<input type='hidden' name='contador"+x+"' id='contador"+x+"' value='"+x+-+contador+"'>"
 var dir2 = $('#contador'+x);
  dir2.empty();
  dir2.append(addcontador);

}

/* Metodo de eliminar por si lo necesitara*/
  function deleteciclo1(contador,x){
  console.log(contador);
  var addcontador = "<input type='hidden' name='contador"+x+"' id='contador"+x+"' value='1'>"
  var dir2 = $('#contador'+x);
  dir2.empty();
  dir2.append(addcontador);
	$("#r"+contador).remove();

}

