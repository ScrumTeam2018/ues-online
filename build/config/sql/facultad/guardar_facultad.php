<?php
require "../../conexion.php"; 
<
    $nombre=$_POST["nombre_f"];
    $telefono=$_POST["telefono_f"];
    $correo=$_POST["correo_f"];

    $represent=$_POST["representante"];

    //$estado='1';

   
   echo $nombre;
   echo $telefono;
   echo $correo;
   echo $represent;
   //echo $estado;


   

   $con=conectarMysql();

    
        
   $sql  = "INSERT INTO facultad (nombre_fa,telefono_fa,correo_fa,estado_fa,id_re_fafk)  
   VALUES('$nombre','$telefono','$correo','1','$represent')";
  
  $result =mysqli_query($con,$sql);
   
  if ($result) {
   # code...
   echo "exitp";
 }else {
   
  echo "NO";
 }

   

 
 
   ?>