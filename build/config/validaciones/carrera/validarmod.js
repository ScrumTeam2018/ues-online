$(document).ready(function(){
      
      $.validator.addMethod("letrasOespacio", function(value, element) {
          return /^[ a-záéíóúüñ]*$/i.test(value);
      }, "Ingrese sólo letras o espacios.");
   
  
      $("#formcarrera").validate({
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
            letrasOespacio: true,
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
  
    $("#nombre").keypress(function(e) {
         if(e.which == 13) {
            $('#btnmodificar').click();
         }
      });
  
    $("#btnmodificar").click(function(){
      if($("#formcarrera").valid()){
       document.getElementById('bandera').value="modificar";
        $("#formcarrera").submit();
      }
      
    });
  