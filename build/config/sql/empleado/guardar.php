<?php
require "../../conexion.php";

//function guardar(){
    /*if(isset($_POST["dui"])){
        echo "la variable se imprimira";
    }*/
$cargo = $_POST['cargo'];
$dui = $_POST['dui'];
$nit = $_POST['nit'];
$nombre = $_POST['first'];
$apellido = $_POST['last'];
$direccion = $_POST['di'];
$genero = $_POST['genero'];
$estado = '1';

$especialidad = '1';

$especialidad = $_POST['especialidad'];
$foto = '12344';
$telefono= $_POST['telefono'];
for($i=0 ; $i <count($telefono); $i++ ){
    echo $telefono[$i];
 }

$correo = $_POST['correo'];

for($j=0 ; $j <count($correo); $j++ ){
    echo $correo[$j];
 }*/

echo "cargo ".$cargo;
echo "dui ".$dui;
echo "nit ".$nit;
echo "nombre ".$nombre;
echo "apellido ".$apellido;
echo "direccion ".$direccion;
echo "genero ".$genero;
echo "foto".$foto;
//echo $estado;
echo "especialidad ".$especialidad;
//echo $telefono;
/*echo $correo;*/

/*$funcion=$_POST['funcion'];
$cod=$_POST['cod'];
echo $funcion;



if($funcion=="modificar"){

   $sql="UPDATE empleado SET nombre_em='$nombre',apellido_em='$apellido',DUI_em='$dui',NIT_em='$nit',
   direccion_em='$direccion',cargo_em='$cargo',especialidad_es_em='$especialidad',genero_em='$genero',
   estado_em='$estado' where idempleado=$cod";
    

}else{*/

    
//}
$conexion = conectarMysql();
    $result = $conexion->query("select max(idempleado)+1 as 'id' from empleado");
      if ($result) {
        while ($fila = $result->fetch_object()) {
          $id=$fila->id;
        }
      }
      if($id==null){
        $id=$id+1;
      }

      echo "id ".$id;

      $sql = "INSERT INTO empleado(idempleado,nombre_em,apellido_em,DUI_em,NIT_em,direccion_em,cargo_em,especialidad_em,foto_em,genero_em,estado_em) 
    VALUES('$id','$nombre','$apellido','$dui','$nit','$direccion','$cargo','$especialidad','$foto','$genero','$estado') ";



    
        



//$sql1 = "INSERT INTO empleado_telefono (telefono_em) VALUES ('$telefono')";


//$sql2 = "INSERT INTO empleado_correo (correo_em) VALUES ('$correo') ";


//$conexion1 = conectarMysql();
//$conexion2 = conectarMysql();
$ejecutar=mysqli_query($conexion,$sql);
//$ejecutar1=mysqli_query($conexion1,$sql1);
//$ejecutar2=mysqli_query($conexion2,$sql2);
if($ejecutar){
echo 'exito';
echo "<script type='text/javascript'>";
echo "location.href='../../../../produccion/Administracion/Tutor/VistaTutor.php'";
echo "</script>"; 


}else{
    echo 'no';
}
/*if($ejecutar1){
    echo 'exito';
    }else{
        echo 'no';
    }
    if($ejecutar2){
        echo 'exito';
        }else{
            echo 'no';
        }*/
//$nombre.val(" ");
//return $ejecutar;

/*

        $consulta  = "insert into cliente values('$id',trim('$nombre'),trim('$apellido'),trim('$direccion'),'$fecha','$estadofam',trim('$ocupacion'),trim('$dui'),trim('$nit'),'$genero',trim('$correo'),trim('$ruta'),'1');";
        $result = $mysqli->query($consulta);

        $consulta1  = "insert into telefono_cliente values('null',trim('$telefono1'),'$id');";
        $result1 = $mysqli->query($consulta1);

        mysqli_query("BEGIN");

        if(!$result || !$result1){
          mysqli_query("rollback");
          echo "<script type='text/javascript'>";
          echo   "swal('Error','Sin Conexión Dase Datos','error');";
          echo "</script>"; 
        }else{
          if((strcmp($telefono2,$tel)!==0) || $telefono2!=""){
            $consulta2  = "insert into telefono_cliente values('null',trim('$telefono2'),'$id');";
            $result2 = $mysqli->query($consulta2);
          }
          mysqli_query("commit");
          echo "<script language='javascript'>";
          echo "alert(exito)";
          echo "</script>";
         
        }//fin else*/
                
        


?>