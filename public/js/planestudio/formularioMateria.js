/*Monty: codigo que genera los nuevo formularios en el plan de estudio usando JQuery */
var contadorciclo1=0;
function agregar(x){
  /* llamo al div donde deseo inserta el formulario*/
var dir = $('#addFormulario'+x);
/* hago el string que deseo insertar en el div que he llamado */
 var formulario= "<div class='row' id='r"+contadorciclo1+"'>"+
 "<div class='form-group'>"+
 "<button class='btn btn-default  dim' type='button' onclick='deleteciclo1("+contadorciclo1+")' ><i class='fa fa-minus'></i></button>"+
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
 "</div>"+
 "<div class='ln_solid'></div>"+
 "</div>";
 /* llamo al div y le digo con el metodo append que ahi dentro debe agregarlo todo que es
 escribi en la variable formulario*/
 contadorciclo1=contadorciclo1+1;
 dir.append(formulario);
}

/* Metodo de eliminar por si lo necesitara*/
  function deleteciclo1(contador){
	console.log(contador);
	$("#r"+contador).remove();

}