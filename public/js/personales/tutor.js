var contadorTelefono=0;
var contadorCorreo=0;
$('#AddTelefono').click(function(){

    var telCliente ='';
    var telefono = $("#idTelefonos");
    var cadena="<div class='row' id='r"+contadorTelefono+"'><div class='form-group'><label class='control-label col-md-3 col-sm-3 col-xs-12'></label><div class='col-md-5 col-sm-5 col-xs-12' ><input type='text' class='form-control col-md-7 col-xs-12'  placeholder='(999) 9999-9999' name='telefono[]' id='telefono[]' value='"+telCliente+"'/></div><div class='col-lg-1'><button class='btn btn-default  dim' type='button' onclick='deleteTelefono("+contadorTelefono+")' ><i class='fa fa-minus'></i></button></div></div></div>";
    contadorTelefono=contadorTelefono+1;
    telefono.append(cadena);

});

$('#AddCorreo').click(function(){

    var correoCliente='';
    var correo = $("#idCorreos");
    var cadena1="<div class='row' id='t"+contadorCorreo+"'><div class='form-group'><label class='control-label col-md-3 col-sm-3 col-xs-12'></label><div class='col-md-5 col-sm-5 col-xs-12' ><input type='email' class='form-control col-md-7 col-xs-12' placeholder='JuanPerez@ejemplo.com' name='correo[]' id='Correo[]' value='"+correoCliente+"'/></div><div class='col-lg-1'><button class='btn btn-default  dim' type='button' onclick='deleteCorreo("+contadorCorreo+")' ><i class='fa fa-minus'></i></button></div></div></div>";
    contadorCorreo=contadorCorreo+1;
    correo.append(cadena1);

});

function deleteTelefono(contador){
	console.log(contador);
	$("#r"+contador).remove();

}

function deleteCorreo(contador){
	console.log(contador);
	$("#t"+contador).remove();
}