<?php
include('../../conexion.php');

//function guardar(){
$cargo = '1';
$dui = $_POST['dui'];
$nit = $_POST['nit'];
$nombre = $_POST['first'];
$apellido = $_POST['last'];
$direccion = $_POST['di'];
$genero = $_POST['genero'];
//$foto = $_POST['foto'];
$estado = '1';
$especialidad = '1';
$foto = '12344';
//$genero = $_POST['genero'];
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

//require "../../build/config/conexion.php"; 
//$con=conectarMysql();


    
        
$sql = "INSERT INTO empleado (nombre_em,apellido_em,DUI_em,NIT_em,direccion_em,cargo_em,especialidad_em,foto_em,genero_em,estado_em) 
VALUES ('$nombre','$apellido','$dui','$nit','$direccion','$cargo','$especialidad','$foto','$genero','$estado') ";

//$telefono = $_POST[''];
//$sql = "INSERT INTO empleado_telefono (telefono_em) VALUES ('$AddTelefono')  ";

//$correo = $_POST[''];
//$sql = "INSERT INTO empleado_correo (correo_em) VALUES ('$AddCorreo') ";

$conexion = conectarMysql();
$ejecutar=mysqli_query($conexion,$sql);
if($ejecutar){
echo 'exito';
}else{
    echo 'no';
}
//$nombre.val(" ");
//return $ejecutar;


?>