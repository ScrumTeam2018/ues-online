<!--Alertas -->
<script src="../../../../vendors/alertas/dist/sweetalert-dev.js"></script>
<link rel="stylesheet" type="text/css" href="../../../../vendors/alertas/dist/sweetalert.css"/>


<?php
 require "../../conexion.php"; 
    
  if(isset($_POST["bandera"])){

    $bandera=$_POST["bandera"];
    $carrera=$_POST["carrera"];
    $anio=$_POST["anio"];
    $nombre = $carrera." ".$anio;

   /*echo $bandera;
   echo $carrera;
   
   echo $anio;
   echo "</br>";
   echo "nombre".$nombre;*/

    

    if($bandera=="add"){

   $con=conectarMysql();

   $consulta = "SELECT idcarrera FROM carrera WHERE nombre_ca='$carrera'";
   $result = $con->query($consulta);
    if ($result) {
      while ($fila = $result->fetch_object()) {
        $id=$fila->idcarrera;
      }//fin while
    }
// echo "datos ".$id;

 $consulta1 = "SELECT * FROM plan_estudio WHERE anio_pe='$anio' AND idcarrerafk='$id'";
   $result1 = $con->query($consulta1);
    if ($result1) {
      while ($fila1 = $result1->fetch_object()) {
        $datos=$fila1->nombre_pe;
      }//fin while
    }
 //echo "datos ".$datos;
   if($datos==null){
    $consulta2  = "INSERT INTO plan_estudio(nombre_pe,anio_pe,estado_pe,estadolleno_pe,idcarrerafk) VALUES ('$nombre','$anio','1','0','$id')";
    $result2 = mysqli_query($con,$consulta2);
   }

   if(!$result2){
    echo "<script language='javascript'>";
    echo "swal({ 
            title:'Error',
            text: 'Sin Conexión Dase Datos',
            type: 'error'
          },
           function(){
              //event to perform on click of ok button of sweetalert
              location.href='../../../../produccion/Administracion/Facultad/registro_facultad.php';
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
              location.href='../../../../produccion/Administracion/planestudio/registroplan.php';
          });";
    echo "</script>";  
    }
  }
  }
?>