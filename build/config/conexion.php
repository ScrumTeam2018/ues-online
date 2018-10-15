<?php
//adentro estara el codigo php.
function conectarMysql(){
   /* $user = "root";
    $pass= "";
    //$port ="3210";
    $port ="3306";
    $server="localhost";
    $db = "ues";
    $con = mysqli_connect($server, $user, $pass) or die("Error a Conectar en la base: ".mysqli_connect_error());
    mysql_select_db($con, $db)or die("Error a Conectar en la base: ".mysqli_connect_error());

    return $con;*/

    $conexion=new mysqli("localhost","root","","ues"); //servidor, usuario de base de datos, contraseña del usuario, nombre de base de datos
	
	if(mysqli_connect_errno()){
		echo 'Conexion Fallida : ', mysqli_connect_error();
		exit();
    }

   // $conexion
    
    return $conexion;

}

?>