<?php
 require "../../conexion.php"; 
    
  if(isset($_POST["bandera"])){

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

    

    if($bandera=="add"){

   $con=conectarMysql();

   $consulta = "SELECT * FROM carrera WHERE codigo_ca='$codigo' OR nombre_ca='$nombre'";
   $result = $con->query($consulta);
    if ($result) {
      while ($fila = $result->fetch_object()) {
        $datos=$fila->nombre_ca;
      }//fin while
    }
 echo "datos ".$datos;
   if($datos==null){

        
        $consulta1  = "INSERT INTO carrera(codigo_ca,nombre_ca,duracion_ca,estado_ca,idfacultadfk)  VALUES('$codigo','$nombre','$duracion','1','$facultad')";
       // $result = $con->query($consulta);
       $result1 =mysqli_query($con,$consulta1);
        
       if ($result) {
        # code...
        echo "exitp";
      }else {
        
       echo "no1";
      }
    }
   //     mysqli_query("BEGIN");
        

        if(!$result1){
   //       mysqli_query("rollback");
          echo "<script type='text/javascript'>";
          echo   "alert('Código o nombre ya existen');";
          echo "</script>"; 
        }else{
     //     mysqli_query("commit");
          echo "<script language='javascript'>";
          //echo "location.href='../../../../produccion/Administracion/carrera/registrocarrera.php';";
          echo "alert('Datos Almacenados');";
          echo "</script>";
         
        }//fin else
       //$con->close();      
    }
  }
?>