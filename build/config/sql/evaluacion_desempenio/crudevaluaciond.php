<?php
    require "../../conexion.php"; 
    
    if(isset($_POST["bandera"])){
  
    $bandera=$_POST["bandera"];

    if($bandera=="criterio"){
        $msj="Error";
      
        function obtenerResultado(){
        $result = 0;
        $nombre=$_REQUEST["nombre"];
        $con = conectarMysql();
  
        $consulta  = "INSERT INTO ed_criterio(ed_ncriterio) VALUES('$nombre')";
        $result = $con->query($consulta);
          if ($result) {
            $msj = "Exito";
          } else {
            $msj = "Error";
          }
          return $msj;
        }
    }else if($bandera=="modificar"){
      $msj="Error";
    
      function obtenerResultado(){
      $result = 0;
      $nombre=$_REQUEST["nombre"];
      $baccion=$_REQUEST["baccion"];

      $con = conectarMysql();

      $consulta  = "UPDATE ed_criterio SET ed_ncriterio='$nombre' WHERE ed_idcriterio=".$baccion;
      $result = $con->query($consulta);
        if ($result) {
          $msj = "Exito";
        } else {
          $msj = "Error";
        }
        return $msj;
      }
    }else if($bandera=="aspecto"){
      $msj="Error";
    
      function obtenerResultado(){
      $result = 0;
      $nombre=$_REQUEST["nombre"];
      $criterio=$_REQUEST["criterio"];
      $con = conectarMysql();

      $consulta  = "INSERT INTO ed_aspectos_evaluar(ed_naspecto,ed_idcriteriofk) VALUES('$nombre','$criterio')";
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