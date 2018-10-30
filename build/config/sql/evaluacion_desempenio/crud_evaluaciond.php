<?php
    require "../../conexion.php"; 
    
    if(isset($_POST["bandera"])){
  
    $bandera=$_POST["bandera"];

    if($bandera=="add"){
        $msj="Error";
      
        function obtenerResultado(){
        $result = 0;
        $nombre=$_REQUEST["nombre"];
        $criterio=$_REQUEST["criterio"];
        $aspectos=$_REQUEST["aspectos"];
        $con = conectarMysql();
  
        $consulta  = "INSERT INTO evaulaciond(nombre_ed, criterio_ed, can_asp_ed, estado_ed) VALUES('$nombre','$criterio','$aspectos','0')";
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
    
      $aspecto= $_POST['aspecto'];
      $id_ed=$_POST['evaluacion'];
      $con = conectarMysql();

        for($i=0 ; $i <count($aspecto); $i++ ){
          if($aspecto[$i] !=""){
          $consulta = "INSERT INTO ed_aspectos(ed_nomasp, ed_porasp, estado_asp, id_edfk) VALUES ('$aspecto[$i]','0','0','$id_ed')";
          $result = $con->query($consulta);
          }
        }
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