$(document).ready(function(){

    $('#info').hide();
      
    $.validator.addMethod("letrasOespacio", function(value, element) {
        return /^[ a-záéíóúüñ]*$/i.test(value);
    }, "Ingrese sólo letras o espacios.");

    $.validator.addMethod("alfanumOespacio", function(value, element) {
        return /^[ a-z0-9-()áéíóúüñ.,]*$/i.test(value);
    }, "Ingrese sólo letras, números o espacios.");

    $.validator.addMethod("numero", function(value, element) {
        return /^[ 0-9-()]*$/i.test(value);
    }, "Ingrese sólo números");


    $("#formed").validate({
      errorPlacement: function (error, element) {
            $(element).closest('.form-group').find('.help-block').html(error.html());
        },
        highlight: function (element) {
            $(element).closest('.form-group').removeClass('has-success').addClass('has-error');
        },
        unhighlight: function (element, errorClass, validClass) {
            $(element).closest('.form-group').removeClass('has-error').addClass('has-success');
            $(element).closest('.form-group').find('.help-block').html('');
        },
      rules: {
        nombre: {
          alfanumOespacio: true,
          required: true,
          minlength: 3,
          maxlength: 200
        },
        criterio:{
            required: true,
            number: true
        }
      },
      messages: {
        nombre: {
          required: "Por favor, ingrese nombre.",
          maxlength: "Debe ingresar m&aacute;ximo 200 dígitos.",
          minlength: "Debe ingresar m&iacute;nimo 3 dígitos."
        },
        criterio: {
          required: "Por favor, seleccione un criterio."
        }
      }
    });
    
});

$("#evaluacion").blur(function(){
  
  var evaluacion = $("#evaluacion").val();
  //alert("aqui" + evaluacion);

  $.ajax({
    type: 'POST',
    url: '../../../build/config/sql/evaluacion_desempenio/obtenerDatos.php',
    data: {'evaluacion': evaluacion}
  })
  .done(function(obtenerDatos){
     // alert(obtenerDatos);
      var datos = eval(obtenerDatos);
      $('#nombre_ed').val(datos[0]);
      $('#criterio_ed').val(datos[1]);
      $('#canmax').val(datos[2]);
      var cant = datos[2]
      for(i=0; i<= $('#canmax').val(datos[2]); )
      $('#ed').hide();
      $('#info').show();                      
  })
  .fail(function(){
    alert('Hubo un error al cargar la Pagina')
  })
});


  $("#btnguardar").click(function(){
    if($("#formed").valid()){
     
      var nombre = $('#nombre').val();
      var criterio = $('#criterio').val();
      var bandera = "aspecto";
      $.ajax({
        type: 'POST',
        url: '../../../build/config/sql/evaluacion_desempenio/crud_evaluaciond.php',
        data: {'nombre': nombre, 'criterio': criterio, 'bandera' : bandera}
      })
        .done(function(listas_rep){
          if(listas_rep === "Exito"){
            
            $("#nombre").val("");
            swal({ 
              title:'Éxito',
              text: 'Datos Almacenados',
              type: 'success'
            },
              function(){
                //event to perform on click of ok button of sweetalert
                location.href='../../../produccion/Administracion/Evaluacion_Desempenio/registrar_aspectos_a_evaluar.php';
              })
            }
              if(listas_rep === "Error"){
                $("#nombre").val("");
                swal("Advertencia", "Sin Conexión Dase Datos", "warning")
              }                
              })
          .fail(function(){
            alert('Hubo un errror al cargar la Pagina')
          })
    }
    
  });


  