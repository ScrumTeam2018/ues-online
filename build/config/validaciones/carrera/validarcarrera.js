$(document).ready(function(){
  var codinvalid=0;
    
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
        codigo: {
          alfanumOespacio: true,
          required: true,
          minlength: 6,
          maxlength: 8
        },
        nombre: {
          letrasOespacio: true,
          required: true,
          minlength: 3,
          maxlength: 200
        },
        
        duracion: {
          required: true,
          number: true
        },
        facultad:{
            required: true,
            number: true
        }
      },
      messages: {
        codigo: {
          required: "Por favor, ingrese c&oacute;digo.",
          maxlength: "Debe ingresar m&aacute;ximo 8 dígitos.",
          minlength: "Debe ingresar m&iacute;nimo 6 dígitos."
        },
        nombre: {
          required: "Por favor, ingrese nombre.",
          maxlength: "Debe ingresar m&aacute;ximo 200 dígitos.",
          minlength: "Debe ingresar m&iacute;nimo 3 dígitos."
        },
        duracion: {
          required: "Por favor, seleccione duraci&oacute;n."
        },
        facultad: {
            required: "Por favor, seleccione facultad."
          }
      }
    });
/*
    $("#codigo").blur(function(e) {
      e.preventDefault();
      var data = $(this).serializeArray();

      data.push({name: 'tag', value: 'cod'});

                $.ajax({            
                    type : 'POST',
                    url  : '../../../build/config/sql/carrera/crudCarrera.php',
                    dataType : 'json',
                    data : data
                })
                .done(function(){
                  console.log("success");
                  $('#msjcod').html('<span class="help-block" id="error"></span>').validate;
                  codinvalid = 0;
                })
                .fail(function(){
                  console.log("error");
                  $('#msjcod').html('<span class="help-block" id="error">C&oacute;digo ya existe</span>');
                  codinvalid = 1;
                });
alert(codinvalid);

   });*/

});

  $("#facultad").keypress(function(e) {
       if(e.which == 13) {
          $('#btnguardar').click();
       }
    });

  $("#btnguardar").click(function(){
    if($("#formcarrera").valid()){
     document.getElementById('bandera').value="add";
      $("#formcarrera").submit();
    }
    
  });
