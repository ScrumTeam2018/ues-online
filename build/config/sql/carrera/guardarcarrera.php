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
      $facultad=$_POST["facultad"];
      $result = 0;
      $result1 = 0;
      $datos = null;
   

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
              location.href='../../../../produccion/Administracion/carrera/registroCarrera.php';
          });";
    echo "</script>";
   
  }//fin else
            
    }else if($bandera=="modificar"){
      $baccion=$_REQUEST["baccion"];
      $nombre=$_POST["nombre"];

      $consulta2  = "UPDATE carrera set nombre_ca='$nombre' where idcarrera=".$baccion."";
     // $result2 =mysqli_query($con,$consulta2);
      $result2 = $con->query($consulta2);
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
    else if($bandera=="darbaja"){
      $baccion=$_REQUEST["baccion"];

      $consulta3  = "UPDATE carrera set estado_ca='0' where idcarrera=".$baccion."";
     // $result2 =mysqli_query($con,$consulta2);
      $result3 = $con->query($consulta3);
        if (result3) {
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
    }else if($bandera=="daralta"){
      $baccion=$_REQUEST["baccion"];

      $consulta4  = "UPDATE carrera set estado_ca='1' where idcarrera=".$baccion."";
      $result34= $con->query($consulta4);
      //$result3 =mysqli_query($con,$consulta3);
        if(result4) {
          echo "<script language='javascript'>";
              echo "swal({ 
                      title:'Éxito',
                      text: 'Datos Almacenados',
                      type: 'success'
                    },
                     function(){
                        //event to perform on click of ok button of sweetalert
                        location.href='../../../../produccion/Administracion/carrera/listarCarreraDarAlta.php';
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