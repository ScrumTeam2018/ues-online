
<!--Alertas -->
<script src="../../../../vendors/alertas/dist/sweetalert-dev.js"></script>
<link rel="stylesheet" type="text/css" href="../../../../vendors/alertas/dist/sweetalert.css"/>

<?php
require "../../conexion.php"; 


if(isset($_POST["bandera"])){

$bandera=$_POST["bandera"];
  
 if($bandera=="add"){
   $datos=null;
   $result=0;
   $result1=0;
   $result2=0;
   $result3=0;

  $nombre=$_POST["nombre"];
  $ubicacion=$_POST["ubicacion"];
  $capacidad=$_POST["capacidad"];
 
  $observacion = "Registro"; 

  
  /*echo"add".$bandera;
  echo "nombre".$nombre;
  echo "ubicacion".$ubicacion;
  echo "capacidad".$capacidad;
  echo "genero_e".$genero;
  echo "nit_e".$nit;
  echo "dui_e".$dui;
  echo "direccion_e".$direccion;
  echo "telefono_e".$telefono;
  echo "correo_e".$correo;
  echo "institucion_e".$institucion;
  echo "facultad".$facultad;
  echo "carrera".$carrera;
  echo "Observacion".$observacion;*/

  $con=conectarMysql();

  $consulta = "SELECT * FROM aula WHERE nombre_au='$nombre'";
   $result = $con->query($consulta);
    if ($result) {
      while ($fila = $result->fetch_object()) {
        $datos=$fila->nombre_au;
      }//fin while
    }
//echo "datos ".$datos;
  if($datos==null){
    $complecheck= $_POST['complecheck'];
    $result1 = $con->query("select max(idaula)+1 as 'id' from aula");
        if ($result1) {
            while ($fila1 = $result1->fetch_object()) {
            $id=$fila1->id;
            }
        }
        if($id==null){
            $id=$id+1;
        }

     //   echo "id ".$id;

    $consulta2  = "INSERT INTO aula(idaula, nombre_au, ubicacion_au, cantidad_au, estado_au, observacion_au)  
    VALUES('$id','$nombre','$ubicacion', '$capacidad','1','$observacion')";
    $result2 =mysqli_query($con,$consulta2);

    for($i=0 ; $i <count($complecheck); $i++ ){
       // echo $complecheck[$i];
        
        $consulta3  = "INSERT INTO aula_ca(idaula, id_co_au) VALUES('$id','$complecheck[$i]')";
     //   echo $consulta3;
        $result3 =mysqli_query($con,$consulta3);
    }
    

    

    /* if($_POST['checkbox'] != ""){
        if(is_array($_POST['checkbox'])){
          //realizamos el ciclo
          while(list($key,$value) = each($_POST['checkbox'])){
            $consulta3  = "INSERT INTO aula_ca(idaula, id_co_au) VALUES('$id','$value')";
            $result3 =mysqli_query($con,$consulta3);
            }

        }

    }*/
   }

   if($result2){
      echo ".";
      echo "<script language='javascript'>";
      echo "swal({ 
              title:'Éxito',
              text: 'Datos Almacenados',
              type: 'success'
            },
            function(){
                //event to perform on click of ok button of sweetalert
                location.href='../../../../produccion/Administracion/aula/registroAula1.php';
            });";
      echo "</script>";
    }else{
      echo "<script language='javascript'>";
      echo "swal({ 
              title:'Error',
              text: 'Sin Conexión Dase Datos',
              type: 'error'
            },
            function(){
                //event to perform on click of ok button of sweetalert
                location.href='../../../../produccion/Administracion/aula/registroAula1.php';
            });";
      echo "</script>";

      echo ".";
        if($datos!=null){
          echo "<script language='javascript'>";
          echo "swal({ 
                  title:'Error',
                  text: 'Nombre ya Existe',
                  type: 'error'
                },
                 function(){
                    //event to perform on click of ok button of sweetalert
                    location.href='../../../../produccion/Administracion/aula/registroAula1.php';
                });";
          echo "</script>";
          echo ".";
        }
    }
    }
}
?>