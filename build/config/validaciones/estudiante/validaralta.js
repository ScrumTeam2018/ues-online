$(document).ready(function(){
      
    $('#datatables-example').DataTable();
  
      $.validator.addMethod("alfanumOespacio", function(value, element) {
          return /^[ a-z0-9-()áéíóúüñ.,]*$/i.test(value);
      }, "Ingrese sólo letras, números o espacios.");
  
      $("#fromdaralta").validate({
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
            observacion: {
            alfanumOespacio: true,
            required: true,
            minlength: 3,
            maxlength: 200
          }
        },
        messages: {
            observacion: {
            required: "Por favor, ingrese observacion.",
            maxlength: "Debe ingresar m&aacute;ximo 200 dígitos.",
            minlength: "Debe ingresar m&iacute;nimo 3 dígitos."
          }
        }
      });

      

      
  });


    $("#modalguardar").click(function(){
        if($("#fromdaralta").valid()){

            swal({
                title: "Advertencia",
                text: "¿Desea Dar Alta a Este Registro?",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Si",
                cancelButtonText: "No",
                closeOnConfirm: false,
                closeOnCancel: false },
                
                function(isConfirm){
                if (isConfirm) {
                    //Si
                    var observacion = $('#observacion').val();
                    var bandera = "daralta";
                    var baccion = $('#baccion').val();
                    $.ajax({
                      type: 'POST',
                      url: '../../../build/config/sql/estudiante/crud_estudiante.php',
                      data: {'observacion': observacion, 'bandera' : bandera, 'baccion' : baccion}
                    })
                    .done(function(listas_rep){
                        if(listas_rep === "Exito"){
                            $("#observacion").val("");
                            $('#darAlta').modal('hide'); 
                            swal({ 
                              title:'Éxito',
                              text: 'Datos Almacenados',
                              type: 'success'
                            },
                             function(){
                                //event to perform on click of ok button of sweetalert
                                location.href='../../../produccion/Administracion/Estudiante/listar_Estudiante_Alta.php';
                            })
        
                        }
                        if(listas_rep === "Error"){
                          $("#observacion").val("");
                          $('#darAlta').modal('hide'); 
                          swal("Advertencia", "Sin Conexión Dase Datos", "warning")
                        }                
                        })
                        .fail(function(){
                          alert('Hubo un errror al cargar la Pagina')
                        })
                } else {
                     //No
                    $("#observacion").val("");
                    $('#darAlta').modal('hide'); 
                   
                swal("Éxito",
                "Actualización Cancelada",
                "success");
                }
                });
              
        }
    });
  
    