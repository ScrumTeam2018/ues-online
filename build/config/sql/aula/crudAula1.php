<?php
 require "../../conexion.php"; 
    
  if(isset($_POST["bandera"])){

    $bandera=$_POST["bandera"];
    
    if($bandera=="add"){

      $msj="Error";
      
    
      function obtenerResultado(){
      $result = 0;
      $result1 = 0;
      $result2 = 0;
      $result3 = 0;
      $datos=null;
      $nombre=$_POST["nombre"];
      $ubicacion=$_POST["ubicacion"];
      $capacidad=$_POST["capacidad"];
      $complecheck=$_POST["complecheck"];
   
      $con=conectarMysql();

   $consulta = "SELECT * FROM aula WHERE nombre_au='$nombre'";
   $result = $con->query($consulta);
    if ($result) {
      while ($fila = $result->fetch_object()) {
        $datos=$fila->nombre_ca;
      }//fin while
    }
 //echo "datos ".$datos;
   if($datos==null){
        $result1 = $con->query("select max(idaula)+1 as 'id' from aula");
        if ($result1) {
            while ($fila1 = $result1->fetch_object()) {
            $id=$fila1->id;
            }
        }
        if($id==null){
            $id=$id+1;
        }

        echo "id ".$id;

        $consulta2  = "INSERT INTO carrera(codigo_ca,nombre_ca,duracion_ca,estado_ca,idfacultadfk)  VALUES('$codigo','$nombre','$duracion','1','$facultad')";
       // $result = $con->query($consulta);
       $result2 =mysqli_query($con,$consulta2);
    }
  
    if ($result2) {
      $msj = "Exito";
    } else {
      $msj = "Error";
    }
    return $msj;
  }
   
            
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
      $msj="Error";
    
      function obtenerResultado(){
      $result = 0;
      $baccion=$_REQUEST["baccion"];
      $observacion=$_REQUEST["observacion"];
      $con = conectarMysql();

      $consulta  = "UPDATE aula set estado_au='0', observacion_au='$observacion' where idaula=".$baccion;
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

      $consulta  = "UPDATE aula set estado_au='1', observacion_au='$observacion' where idaula=".$baccion;
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