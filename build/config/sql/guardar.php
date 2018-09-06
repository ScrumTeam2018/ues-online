<?php
include('../build/config/conexion.php');

function guardar(){
$cargo = $_POST['cargo'];
$codigo = $_POST['code'];
$dui = $_POST['dui'];
$nit = $_POST['nit'];
$nombre = $_POST['first'];
$apellido = $_POST['last'];
$direccion = $_POST['di'];
$estado = $_POST['estado'];
$especialidad = $_POST['especialidad'];
$genero = $_POST['genero'];


echo $cargo;
echo $codigo;
echo $dui;
echo $nit;
echo $nombre;
echo $apellido;
echo $direccion;

//require "../../build/config/conexion.php"; 
//$con=conectarMysql();


    
        

$sql = "INSERT INTO empleado (cargo_em,codigo_em,DUI_em,NIT_em,nombre_em,apellido_em,direccion_em,estado_em,especialidad_em,genero_em) 
VALUES ('$cargo','$code','$dui','$nit','$first','$last','$di','$estado','$especialidad','$genero') ";

//$telefono = $_POST[''];
//$sql = "INSERT INTO empleado_telefono (telefono_em) VALUES ('$AddTelefono')  ";

//$correo = $_POST[''];
//$sql = "INSERT INTO empleado_correo (correo_em) VALUES ('$AddCorreo') ";

$conexion = conectarMysql();
$ejecutar=mysqli_query($conexion,$sql);
return $ejecutar;

}
?>