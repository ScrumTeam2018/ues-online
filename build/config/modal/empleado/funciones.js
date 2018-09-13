
function agregardatos(cargo){

cadena="car="+cargo;

$.ajax({
type:"POST",
url:"empleado/guardarModal.php",
data:cadena,
success:function(r){
if(r==1){
    //$('#cargo').load('../../../../produccion/Administracion/Tutor/RegistroTutor.php');
alertify.success("Agregado con exito :)");
}else{
    alertify.error("Fallo el servidor :(");
}
}

});

}