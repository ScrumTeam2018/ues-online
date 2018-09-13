<!--Alertas -->
<script src="../../../../vendors/alertas/dist/sweetalert-dev.js"></script>
<link rel="stylesheet" type="text/css" href="../../../../vendors/alertas/dist/sweetalert.css"/>


<?php
 require "../../conexion.php"; 
    
  if(isset($_POST["bandera"])){

    $bandera=$_POST["bandera"];
    

   $con=conectarMysql();

    if($bandera=="add"){
      $codigo=$_POST["codigo"];
      $nombre=$_POST["nombre"];
      $duracion=$_POST["duracion"];
      //$facul=$_POST["facul"];
      $facultad=$_POST["facultad"];
   

   $consulta = "SELECT * FROM carrera WHERE codigo_ca='$codigo' OR nombre_ca='$nombre'";
   $result = $con->query($consulta);
    if ($result) {
      while ($fila = $result->fetch_object()) {
        $datos=$fila->nombre_ca;
      }//fin while
    }
 //echo "datos ".$datos;
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
  
   if(!$result1){
    echo "<script language='javascript'>";
    echo "swal({ 
            title:'Error',
            text: 'Sin Conexión Dase Datos',
            type: 'error'
          },
           function(){
              //event to perform on click of ok button of sweetalert
              location.href='../../../../produccion/Administracion/carrera/registroCarrera.php';
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
              location.href='registroCarrera.php';
          });";
    echo "</script>";
   
  }//fin else
            
    }
    
    if($bandera=="darbaja"){
      $baccion=$_REQUEST["baccion"];

      $consulta2  = "UPDATE carrera set estado_ca='0' where idcarrera=".$baccion."";
      $result2 =mysqli_query($con,$consulta2);
        if (result2) {
          echo "<script language='javascript'>";
              echo "swal({ 
                      title:'Éxito',
                      text: 'Datos Almacenados',
                      type: 'success'
                    },
                     function(){
                        //event to perform on click of ok button of sweetalert
                        location.href='../../../../produccion/Administracion/carrera/listarCarrera.php';
                    });";
              echo "</script>";
        } else {
              echo "<script type='text/javascript'>";
              echo   "swal('Error','Sin Conexión Dase Datos','error');";
              echo "</script>"; 
        }
    }
  }
?>