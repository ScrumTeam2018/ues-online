<?php
 // if(isset($_POST["bandera"])){
    $bandera=$_POST["bandera"];
    $codigo=$_POST["codigo"];
    $nombre=$_POST["nombre"];
    $duracion=$_POST["duracion"];
    //$facul=$_POST["facul"];
    $facultad=$_POST["facultad"];

   echo $bandera;
   echo $codigo;
   echo $nombre;
   echo $duracion;
   echo $facultad;

    require "../../build/config/conexion.php"; 
    $con=conectarMysql();

    if($bandera=="add"){

      $result1 = $con->query("select max(idcarrera)+1 from carrera");
      if ($result1) {
        while ($fila = $result1->fetch_object()) {
          $id=$fila->id;
        }
      }
      if($id==null){
        $id=$id+1;
      }
      echo "n ".$id;
      
        
        $consulta  = "insert into carrera values('$id',trim('$codigo'),trim('$nombre'),'$duracion','1','$facultad');";
        $result = $con->query($consulta);

        mysqli_query("BEGIN");

        if(!$result){
          mysqli_query("rollback");
          echo "<script type='text/javascript'>";
          echo   "alert('Sin Conexión Dase Datos');";
          echo "</script>"; 
        }else{
          mysqli_query("commit");
          echo "<script language='javascript'>";
          echo "alert('Datos Almacenados');";
          echo "</script>";
         
        }//fin else
                
    }
  //}

/*
  function dameFecha($fecha){
    list($day,$mon,$year)=explode('-',$fecha);
    return date('d-m-Y', mktime(0,0,0,$mon,$day,$year));
  }//fin de la función dameFecha*/

/*
  function msg1($texto){
    echo "<script type='text/javascript'>";
    echo "alert('$texto');";
    echo "</script>";
  }


  function msg($texto){
    echo "<script type='text/javascript'>";
      echo $texto;
    echo "</script>";
  }*/

?>