<?php
    require "../../conexion.php"; 
    
    if(isset($_POST["bandera"])){
  
    $bandera=$_POST["bandera"];

    if($bandera=="darbaja"){
        $msj="Error";
      
        function obtenerResultado(){
        $result = 0;
        $baccion=$_REQUEST["baccion"];
        $observacion=$_REQUEST["observacion"];
        $con = conectarMysql();
  
        $consulta  = "UPDATE estudiante set estado_es='0', observacion_es='$observacion' where idestudiante=".$baccion;
        $result = $con->query($consulta);
          if ($result) {
            $msj = "Exito";
          } else {
            $msj = "Error";
          }
          return $msj;
        }
      }else if($bandera=="daralta"){
        $msj="Error";
      
        function obtenerResultado(){
        $result = 0;
        $baccion=$_REQUEST["baccion"];
        $observacion=$_REQUEST["observacion"];
        $con = conectarMysql();
  
        $consulta  = "UPDATE estudiante set estado_es='1', observacion_es='$observacion' where idestudiante=".$baccion;
        $result = $con->query($consulta);
          if ($result) {
            $msj = "Exito";
          } else {
            $msj = "Error";
          }
          return $msj;
        }
      }
    
    }
  
    echo obtenerResultado();
?>