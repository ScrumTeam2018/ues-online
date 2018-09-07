
$(document).ready(function(){
$.ajax({
type:'POST',
url: 'Selec_Dinamico/cargar_listas.php',
data: {'peticion':'cargar_listas'}
})
.done(function(listas_rep){
$('#cargo').html(listas_rep)
})
.fail(function(){
alert('Hubo un error al cargar las listas')
})

})