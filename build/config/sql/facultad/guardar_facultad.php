<?php
require "../../conexion.php"; 


    $codigo=$_POST["codigo_f"];
    $nombre=$_POST["nombre_f"];
    $telefono=$_POST["telefono_f"];
    $correo=$_POST["correo_f"];
    //$estado='1';

   
   echo $codigo;
   echo $nombre;
   echo $telefono;
   echo $correo;
   //echo $estado;

  
   $con=conectarMysql();

   
        
   $sql  = "INSERT INTO facultad (codigo_fa,nombre_fa,telefono_fa,correo_fa,estado_fa)  
   VALUES('$codigo','$nombre','$telefono','$correo','1')";
  
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