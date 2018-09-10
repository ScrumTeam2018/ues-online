<?php

require "../../conexion.php"; 
    $nombre=$_POST["nombres_r"];
    $apellido=$_POST["apellidos_r"];
    $telefono=$_POST["telefono_r"];
    $correo=$_POST["correo_r"];

    echo $nombre;
    echo $apellido;  
    echo $telefono;
    echo $correo;
   
    $con=conectarMysql();

          
    $sql="INSERT INTO representante_facultad (nombre_rf,apellido_rf,telefono_rf,correo_rf,estado_rf,idfacultadrefk)  
    VALUES('$nombre','$apellido','$telefono','$correo','1','1')";
   
   $result =mysqli_query($con,$sql);
    
   if ($result) {
    # code...
    echo "exitp";
  }else {
    
   echo "NO";
  }
 
    
 
    if(!$result){
 //       mysqli_query("rollback");
      echo "<script type='text/javascript'>";
      echo   "alert('Sin Conexión a la Dase Datos');";
      echo "</script>"; 
    }else{
 //     mysqli_query("commit");
      echo "<script language='javascript'>";
      //echo "location.href='../../../produccion/Administracion/carrera/registrocarrera.php';";
      echo "alert('Datos Almacenados');";
      echo "</script>";
     
    }//fin else
 
    ?>

   ?>