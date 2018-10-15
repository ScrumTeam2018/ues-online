$(document).ready(function(){
    
    $.validator.addMethod("numero", function(value, element) {
        return /^[ 0-9-()]*$/i.test(value);
    }, "Ingrese sólo números");


    $("#formplanestudio").validate({
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
        anio: {
            numero: true,
            required: true,
            minlength: 4,
            maxlength: 4
          },
        carrera:{
            required: true,
        }
      },
      messages: {
        anio: {
            required: "Por favor, ingrese año.",
            maxlength: "Debe ingresar 4 dígitos.",
            minlength: "Debe ingresar 4 dígitos."
          },
        carrera: {
            required: "Por favor, seleccione carrera."
          }
      }
    });

});

  $("#carrera").blur(function(e) {
    document.getElementById('nombre').value=document.getElementById('carrera').value + " " +document.getElementById('anio').value;
 });

  $("#anio").blur(function(e) {
    document.getElementById('nombre').value=document.getElementById('carrera').value + " " +document.getElementById('anio').value;
  });

  $("#anio").keypress(function(e) {
       if(e.which == 13) {
          $('#btnguardar').click();
       }
    });

  $("#btnguardar").click(function(){
    if($("#formplanestudio").valid()){
     document.getElementById('bandera').value="add";
      $("#formplanestudio").submit();
    }
    
  });
