
!--Alertas -->
<script src="../../../../vendors/alertas/dist/sweetalert-dev.js"></script>
<link rel="stylesheet" type="text/css" href="../../../../vendors/alertas/dist/sweetalert.css"/>




<?php
require "../../conexion.php"; 


if(isset($_POST["bandera"])){

  $bandera=$_POST["bandera"];
  

 $con=conectarMysql();

 if($bandera=="add"){

  $nombre=$_POST["nombre_f"];
  $telefono=$_POST["telefono_f"];
  $correo=$_POST["correo_f"];
  $represent=$_POST["representante"];

 $sql_fa_re= "SELECT * FROM facultad where nombre_fa='$nombre' OR telefono_fa='$telefono' OR correo_fa='$correo'";
  $result=$con->query($sql_fa_re);
  if ($result){
        while($fila=$result->fetch_object()){
          $datos=$fila->nombre_f;
        }
        if($datos=null){

          $sql  = "INSERT INTO facultad (nombre_fa,telefono_fa,correo_fa,estado_fa,id_re_fafk)  
          VALUES('$nombre','$telefono','$correo','1','$represent')";
         
         $result =mysqli_query($con,$sql);
          
        }

        if(!$result1){
          echo "<script language='javascript'>";
          echo "swal({ 
                  title:'Error',
                  text: 'Sin Conexión Dase Datos',
                  type: 'error'
                },
                 function(){
                    //event to perform on click of ok button of sweetalert
                    location.href='../../../../produccion/Administracion/carrera/registroCarrera.php';
                });";
          echo "</script>";
        }else{
          echo "<script language='javascript'>";
          echo "swal({ 
                  title:'Éxito',
                  text: 'Datos Almacenados',
                  type: 'success'
                },
                 function(){
                    //event to perform on click of ok button of sweetalert
                    location.href='../../../../produccion/Administracion/carrera/registroCarrera.php';
                });";
          echo "</script>";
         
        }

  }else if($bandera=="modificar"){
    $baccion=$_REQUEST["baccion"];
      $telefono=$_POST["telefono_f"];
      $correo=$_POST["correo_f"];


      $consulta2  = "UPDATE facultad set nombre_fa='$nombre', telefono_fa='$telefono', correo_fa='$correo' where idfacultad=".$baccion."";
      $result2 = $con->query($consulta2);
      if (result2) {
        echo "<script language='javascript'>";
            echo "swal({ 
                    title:'Éxito',
                    text: 'Datos Almacenados',
                    type: 'success'
                  },
                   function(){
                      //event to perform on click of ok button of sweetalert
                      location.href='../../../../produccion/Administracion/carrera/listarCarrera.php';
                  });";
            echo "</script>";
      } else {
            echo "<script type='text/javascript'>";
            echo   "swal('Error','Sin Conexión Dase Datos','error');";
            echo "</script>"; 
      }
  }

   ?>