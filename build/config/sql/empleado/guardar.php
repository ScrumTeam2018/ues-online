<?php
require "../../conexion.php";

//function guardar(){
    /*if(isset($_POST["dui"])){
        echo "la variable se imprimira";
    }*/
$cargo = '1';
$dui = $_POST['dui'];
$nit = $_POST['nit'];
$nombre = $_POST['first'];
$apellido = $_POST['last'];
$direccion = $_POST['di'];
$genero = $_POST['genero'];
$estado = '1';
$especialidad = '1';
/*$telefono= $_POST['telefono'];
for($i=0 ; $i <count($telefono); $i++ ){
    echo $telefono[$i];
 }
 
$correo = $_POST['correo'];

for($j=0 ; $j <count($correo); $j++ ){
    echo $correo[$j];
 }*/

/*echo $cargo;
echo $dui;
echo $nit;
echo $nombre;
echo $apellido;
echo $direccion;
echo $genero;
//echo $foto;
echo $estado;
echo $especialidad;
//echo $telefono;
/*echo $correo;*/

$funcion=$_POST['funcion'];
$cod=$_POST['cod'];
echo $funcion;



if($funcion=="modificar"){

   $sql="UPDATE empleado SET nombre_em='$nombre',apellido_em='$apellido',DUI_em='$dui',NIT_em='$nit',
   direccion_em='$direccion',cargo_em='$cargo',especialidad_es_em='$especialidad',genero_em='$genero',
   estado_em='$estado' where idempleado=$cod";
    

}else{

    $sql = "INSERT INTO empleado (nombre_em,apellido_em,DUI_em,NIT_em,direccion_em,cargo_em,especialidad_es_em,genero_em,estado_em) 
    VALUES ('$nombre','$apellido','$dui','$nit','$direccion','$cargo','$especialidad','$genero','$estado') ";
}



    
        



//$sql1 = "INSERT INTO empleado_telefono (telefono_em) VALUES ('$telefono')";


//$sql2 = "INSERT INTO empleado_correo (correo_em) VALUES ('$correo') ";

$conexion = conectarMysql();
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