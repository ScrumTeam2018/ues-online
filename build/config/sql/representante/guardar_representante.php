<!--Alertas -->
<script src="../../../../vendors/alertas/dist/sweetalert-dev.js"></script>
<link rel="stylesheet" type="text/css" href="../../../../vendors/alertas/dist/sweetalert.css"/>

<?php
require "../../conexion.php"; 


if(isset($_POST["bandera"])){

  $bandera=$_POST["bandera"];
  

 $con=conectarMysql();
  
      if($bandera=="add"){
        $nombre=$_POST["nombres_r"];
        $apellido=$_POST["apellidos_r"];
        $genero=$_POST["genero"];
        $telefono=$_POST["telefono_r"];
        $correo=$_POST["correo_r"];
     
  
     $consulta = "SELECT * FROM representante_facultad WHERE telefono_rf='$telefono' OR correo_rf='$correo'";
     $result = $con->query($consulta);
      if ($result) {
        while ($fila = $result->fetch_object()) {
          $datos=$fila->nombre_rf;
        }//fin while
      }
   //echo "datos ".$datos;
     if($datos==null){
          $consulta1  = "INSERT INTO representante_facultad(nombre_rf,apellido_rf,genero_rf,telefono_rf,correo_rf,estado_rf) VALUES ('$nombre','$apellido','$genero','$telefono','$correo', '1')";
         // $result = $con->query($consulta);
         $result1 =mysqli_query($con,$consulta1);
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
                location.href='../../../../produccion/Administracion/Representante/registro_representante.php';
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
                location.href='../../../../produccion/Administracion/Representante/registro_representante.php';
            });";
      echo "</script>";
     
    }//fin else
              
      }else if($bandera=="modificar"){
        $baccion=$_REQUEST["baccion"];
        $telefono=$_POST["telefono_r"];
        $correo=$_POST["correo_r"];
        

    
          $consulta2  = "UPDATE representante_facultad SET telefono_rf='$telefono', correo_rf='$correo' WHERE id_re_fa=".$baccion."";
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
                          location.href='../../../../produccion/Administracion/Representante/listarRepresentante.php';
                      });";
                echo "</script>";
          } else {
                echo "<script type='text/javascript'>";
                echo   "swal('Error','Sin Conexión Dase Datos','error');";
                echo "</script>"; 
          }
      }
    }
 
   ?>