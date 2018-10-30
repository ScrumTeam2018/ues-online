$(document).ready(function(){
      
    $('#datatables-example').DataTable();
      
});

$("#evaluacion").blur(function(){
  
    var evaluacion = $("#evaluacion").val();

    alert(evaluacion);
  
    $.ajax({
      type: 'POST',
      url: '../../../produccion/Administracion/Evaluacion_Desempenio/llenar_t_evaluaciond.php',
      data: {'evaluacion': evaluacion}
    })
    .done(function(obtenerDatos){
        $('#agregar_t').html(obtenerDatos);
                       
    })
    .fail(function(){
      alert('Hubo un error al cargar la Pagina')
    })
  });