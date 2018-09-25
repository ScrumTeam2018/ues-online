<!--Alertas -->
<script src="../../../../vendors/alertas/dist/sweetalert-dev.js"></script>
<link rel="stylesheet" type="text/css" href="../../../../vendors/alertas/dist/sweetalert.css"/>
<?php
require "../../conexion.php";

if(isset($_POST["bandera"])){

    $bandera=$_POST["bandera"];
 
    $con = conectarMysql();
    
        $nombre = $_POST["nombre"];
        $ubicacion = $_POST["ubicacion"];
        $capacidad = $_POST["capacidad"];
        $estado = "1";
        
        
        
        //$telefono= $_POST['telefono'];
        
        //$correo = $_POST['correo'];

       
        $result = $con->query("select max(idaula)+1 as 'id' from aula");
        if ($result) {
            while ($fila = $result->fetch_object()) {
            $id=$fila->id;
            }
        }
        if($id==null){
            $id=$id+1;
        }

        echo "id ".$id;

        $consulta1 = "INSERT INTO aula(idaula,nombre_au,ubicacion_au,cantidad_au,estado_au) 
        VALUES('$id','$nombre',' $ubicacion','$capacidad','$estado')";

       
        $result1 = mysqli_query($con,$consulta1);

        
        if (!$result1) {
         # code...
            echo "<script type='text/javascript'>";
            echo   "alert('Código o nombre ya existen');";
            echo "</script>"; 
        }else {
         
        echo "exito";  

        if($_POST['checkbox']!=""){

            if(is_array($_POST['checkbox'])){

                while(list($key,$value)=each($_POST['checkbox'])){
                    $consulta2 = "INSERT INTO complemento_aula(pertenece_a_aula,nombre_co_au) VALUES ('$nombre','$value')";
                    echo "</br>";
                    $result2 =mysqli_query($con,$consulta2);
                }
            }
        }
        
        echo "<script type='text/javascript'>";
        echo "location.href='../../../../produccion/Administracion/aula/listaraula.php'";
        echo "</script>"; 
     }if($bandera=="modificar"){
        $baccion=$_REQUEST["baccion"];
        $nombre = $_POST['nombre'];
        $ubicacion = $_POST['ubicacion'];
        $capacidad = $_POST['capacidad'];
        $consulta2  = "UPDATE aula SET nombre_au='$nombre', ubicacion_au='$ubicacion', cantidad_au='$capacidad' WHERE idaula=".$baccion."";
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
                          location.href='../../../../produccion/Administracion/aula/listaraula.php';
                      });";
                echo "</script>";
          } else {
                echo "<script type='text/javascript'>";
                echo   "swal('Error','Sin Conexión Dase Datos','error');";
                echo "</script>"; 
          }
      }}
      /*else if($bandera=="darbaja"){
        $baccion=$_REQUEST["baccion"];
  
        $consulta3  = "UPDATE empleado set estado_em='0' where idempleado=".$baccion."";
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
                          location.href='../../../../produccion/Administracion/Empleado/listaEmpleado.php';
                      });";
                echo "</script>";
          } else {
                echo "<script type='text/javascript'>";
                echo   "swal('Error','Sin Conexión Dase Datos','error');";
                echo "</script>"; 
          }
      }else if($bandera=="daralta"){
        $baccion=$_REQUEST["baccion"];
  
        $consulta4  = "UPDATE empleado set estado_em='1' where idempleado=".$baccion."";
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
                          location.href='../../../../produccion/Administracion/Empleado/listaEmpleadoDarAlta.php';
                      });";
                echo "</script>";
          } else {
                echo "<script type='text/javascript'>";
                echo   "swal('Error','Sin Conexión Dase Datos','error');";
                echo "</script>"; 
          }
      }

}*/

?>