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
        nombre_f: {
          
          letrasOespacio: true,
          required: true,
          minlength: 10,
          maxlength: 150
        },
        telefon_f: {
          numero:true,
          required: true,
          minlength: 9,
          maxlength: 9
        },
        
        correo_f: {
          required: true,
          correo: true
        
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
          minlength: "Debe ingresar m&iacute;nimo 150 dígitos.",
          maxlength: "Debe ingresar m&aacute;ximo 10 dígitos."
          
        },
        telefon_f: {
          required: "Por favor, ingrese teléfono.",
          maxlength: "Debe ingresar m&aacute;ximo 9 dígitos.",
          minlength: "Debe ingresar m&iacute;nimo 9 dígitos."
        },
        correo_f: {
          required: "Por favor, ingrese una direcciocón de correo válida."
        },
        representante: {
            required: "Por favor, seleccione un representante."
          }
      }
    });

 

  $('.select2').select2()

 

    //iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass   : 'iradio_minimal-blue'
    })
    //Red color scheme for iCheck
    $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
      checkboxClass: 'icheckbox_minimal-red',
      radioClass   : 'iradio_minimal-red'
    })
    //Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass   : 'iradio_flat-green'
    })

   


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