$(document).ready(function(){
      
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
          }
        },
        messages: {
          nombre: {
            required: "Por favor, ingrese nombre.",
            maxlength: "Debe ingresar m&aacute;ximo 200 dígitos.",
            minlength: "Debe ingresar m&iacute;nimo 3 dígitos."
          }
        }
      });
      
  });

  
    $("#btnguardar").click(function(){
      if($("#formed").valid()){
       
        var nombre = $('#nombre').val();
        var bandera = "criterio";
        $.ajax({
          type: 'POST',
          url: '../../../build/config/sql/evaluacion_desempenio/crudevaluaciond.php',
          data: {'nombre': nombre, 'bandera' : bandera}
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
                  location.href='../../../produccion/Administracion/Evaluacion_Desempenio/registrar_criterio.php';
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


    $("#btnmodificar").click(function(){
      if($("#formed").valid()){
       
        var nombre = $('#nombre').val();
        var bandera = "modificar";
        var baccion = $('#baccion').val();
        $.ajax({
          type: 'POST',
          url: '../../../build/config/sql/evaluacion_desempenio/crudevaluaciond.php',
          data: {'nombre': nombre, 'bandera' : bandera, 'baccion' : baccion}
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
                  location.href='../../../produccion/Administracion/Evaluacion_Desempenio/listar_criterio.php';
                })
              }
                if(listas_rep === "Error"){
                  $("#nombre").val("");
                  swal({ 
                    title:'Advertencia',
                    text: 'Sin Conexión Dase Datos',
                    type: 'warning'
                  },
                    function(){
                      //event to perform on click of ok button of sweetalert
                      location.href='../../../produccion/Administracion/Evaluacion_Desempenio/listar_criterio.php';
                    })
                
                }                
                })
            .fail(function(){
              alert('Hubo un errror al cargar la Pagina')
            })
      }
      
    });

