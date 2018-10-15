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
          return /^[ a-z0-9-()áéíóúüñ.,]*$/i.test(value);
      }, "Ingrese sólo letras, números o espacios.");
  
      $.validator.addMethod("numero", function(value, element) {
          return /^[ 0-9-()]*$/i.test(value);
      }, "Ingrese sólo números");
  
  
      $("#formaula").validate({
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
          
          alfanumOespacio: {
            letrasOespacio: true,
            required: true,
            minlength: 3,
            maxlength: 200
          },
          capacidad: {
            numero: true,
            required: true,
            maxlength: 2
          }
        },
        messages: {
          nombre: {
            required: "Por favor, ingrese nombre.",
            maxlength: "Debe ingresar m&aacute;ximo 200 dígitos.",
            minlength: "Debe ingresar m&iacute;nimo 3 dígitos."
          },
          ubicacion: {
            required: "Por favor, ingrese ubicaci&oacute;n.",
            maxlength: "Debe ingresar m&aacute;ximo 200 dígitos.",
            minlength: "Debe ingresar m&iacute;nimo 3 dígitos."
          },
          capacidad: {
            required: "Por favor, ingrese capacidad.",
            maxlength: "Debe ingresar m&aacute;ximo 2 dígitos.",
            }
        }
      });


      $("#fromcomplemento").validate({
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
          complemento: {
            alfanumOespacio: true,
            required: true,
            minlength: 3,
            maxlength: 200
          }
        },
        messages: {
          complemento: {
            required: "Por favor, ingrese complemento.",
            maxlength: "Debe ingresar m&aacute;ximo 200 dígitos.",
            minlength: "Debe ingresar m&iacute;nimo 3 dígitos."
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

     $.ajax({
      type: 'POST',
      url: '../../../produccion/Administracion/aula/obtenerComplemento.php'
    })
    .done(function(listas_rep){
      $('#getComplemento').html(listas_rep)
    })
    .fail(function(){
      alert('Hubo un errror al cargar los Checkbox')
    })

    
     $("#otro").click(function(){
        $('#agregarComplementoAula').modal({show:true});
     });

     

   /*  $("input[id='otro']").click(function(){
      if($("input[id='otro']").is(":checked")){
        $('#agregarComplementoAula').modal({show:true});
      }
   });*/
     
      
  });


    $("#modalguardar").click(function(){
        if($("#fromcomplemento").valid()){
          var id = $('#complemento').val();
          var bandera = "add2";
               
          $.ajax({
            type: 'POST',
            url: '../../../build/config/sql/aula/guardarComplemento.php',
            data: {'id': id, 'bandera' : bandera}
          })
          .done(function(listas_rep){
            
              if(listas_rep === "Exito"){
               
                $.ajax({
                    type: 'POST',
                    url: '../../../produccion/Administracion/aula/obtenerComplemento.php'
                  })
                  .done(function(listas_rep){
                    $('#getComplemento').html(listas_rep)
                  })
                  .fail(function(){
                    alert('Hubo un errror al cargar los Checkbox')
                  })
                  $("#complemento").val("");
                  $('#agregarComplementoAula').modal('hide'); 
                  swal("Exito", "Almacenado", "success")

              }

              if(listas_rep === "Nombre ya Existe"){
                $("#complemento").val("");
                $('#agregarComplementoAula').modal('hide'); 
                swal("Advertencia", "Nombre ya existe", "warning")
                

              }

  
              })
              .fail(function(){
                alert('Hubo un errror al cargar la Pagina')
              })
        }
    });
  
    $("#btnguardar").click(function(){
      if($("#formaula").valid()){
       document.getElementById('bandera').value="add";
        $("#formaula").submit();
      }
      
    });

