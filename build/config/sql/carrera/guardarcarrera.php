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
/*
      $result1 = $con->query("select max(idcarrera) from carrera");
      if ($result1) {
        while ($fila = $result1->fetch_object()) {
          $id=$fila->id;
        }
      }
      $id=$id+1;
      if($id==null){
        
      }*/
   // echo $id;
   //$consulta = "INSERT INTO carrera ('codigo_ca') VALUES (trim('$codigo'),trim('$nombre'),'$duracion','1','$facultad')";

   $con=conectarMysql();

   
        
        $consulta  = "INSERT INTO carrera(codigo_ca,nombre_ca,duracion_ca,estado_ca,idfacultadfk)  VALUES('$codigo','$nombre','$duracion','1','$facultad')";
       // $result = $con->query($consulta);
       $result =mysqli_query($con,$consulta);
        
       if ($result) {
        # code...
        echo "exitp";
      }else {
        
       echo "no1";
      }
   //     mysqli_query("BEGIN");
        

        if(!$result){
   //       mysqli_query("rollback");
          echo "<script type='text/javascript'>";
          echo   "alert('Sin Conexión Dase Datos');";
          echo "</script>"; 
        }else{
     //     mysqli_query("commit");
          echo "<script language='javascript'>";
          //echo "location.href='../../../produccion/Administracion/carrera/registrocarrera.php';";
          echo "alert('Datos Almacenados');";
          echo "</script>";
         
        }//fin else
       //$con->close();      
    }
  }
?>