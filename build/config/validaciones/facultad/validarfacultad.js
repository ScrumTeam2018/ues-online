$(document).ready(function(){
    
    $('input').on('keypress', function(e){
      if (e.keyCode == 13) {
        // Obtenemos el número del atributo tabindex al que se le dio enter y le sumamos 1
        var TabIndexActual = $(this).attr('tabindex');
        var TabIndexSiguiente = parseInt(TabIndexActual) + 1;
        // Se determina si el tabindex existe en el formulario
        var CampoSiguiente = $('[tabindex='+TabIndexSiguiente+']');
        // Si se encuentra el campo entra al if
        if(CampoSiguiente.length > 0)
        {
        CampoSiguiente.focus(); //Hcemos focus al campo encontrado
        return false; // retornamos false para detener alguna otra ejecucion en el campo
        }else{// Si no se encontro ningún elemento, se retorna false
        return false;
        }
      }
    });
    
    $.validator.addMethod("letrasOespacio", function(value, element) {
        return /^[ a-záéíóúüñ]*$/i.test(value);
    }, "Ingrese sólo letras o espacios.");

    $.validator.addMethod("alfanumOespacio", function(value, element) {
        return /^[ a-z0-9áéíóúüñ.,]*$/i.test(value);
    }, "Ingrese sólo letras, números o espacios.");

    $.validator.addMethod("numero", function(value, element) {
        return /^[ 0-9-()]*$/i.test(value);
    }, "Ingrese sólo números");

    $.validator.addMethod("correo", function(value, element) {
        return /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/i.test(value);
    }, "Ingrese un correo v&aacute;lido.");

    $("#formfacultad").validate({
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
        nombre_f: {
          letrasOespacio: true,
          required: true,
          minlength: 10,
          maxlength: 150
        },
        telefono_f: {
          numero:true,
          required: true,
          minlength: 9,
          maxlength: 9
        },
        
        correo_f: {
          correo: true,
          required: true
        },
        facultad:{
            required: true
           
        },
        representante:{
            required: true,
            number: true
        }
      },
      messages: {
        nombre_f: {
          required: "Por favor, ingrese nombre.",
          minlength: "Debe ingresar m&iacute;nimo 10 dígitos.",
          maxlength: "Debe ingresar m&aacute;ximo 150 dígitos."
          
        },
        telefono_f: {
          required: "Por favor, ingrese teléfono.",
          maxlength: "Debe ingresar 9 dígitos.",
          minlength: "Debe ingresar 9 dígitos."
        },
        correo_f: {
          required: "Por favor, ingrese una dirección de correo válida."
        },
        representante: {
            required: "Por favor, seleccione un representante."
          }
      }
    });

});

  $("#representante").keypress(function(e) {
       if(e.which == 13) {
          $('#btnguardar').click();
       }
    });

  $("#btnguardar").click(function(){
    if($("#formfacultad").valid()){
     document.getElementById('bandera').value="add";
      $("#formfacultad").submit();
    }
    
  });