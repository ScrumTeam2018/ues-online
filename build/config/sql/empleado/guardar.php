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
<<<<<<< HEAD
$especialidad = '1';
=======
$especialidad = $_POST['especialidad'];
$foto = '12344';
>>>>>>> 7ad72d35f67e6b2b0dbfec73915647cd80948a93
/*$telefono= $_POST['telefono'];
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

<<<<<<< HEAD
    $sql = "INSERT INTO empleado (nombre_em,apellido_em,DUI_em,NIT_em,direccion_em,cargo_em,especialidad_es_em,genero_em,estado_em) 
    VALUES ('$nombre','$apellido','$dui','$nit','$direccion','$cargo','$especialidad','$genero','$estado') ";
}
=======
    
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
>>>>>>> 7ad72d35f67e6b2b0dbfec73915647cd80948a93



    
        



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


?>