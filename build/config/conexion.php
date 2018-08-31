<?php
//adentro estara el codigo php.
function conectarMysql(){
    $user = "root";
    $pass= "";
    //$port ="3210";
    $server="localhost";
    $db = "";
    $con = mysqli_connect($server, $user, $pass) or die("Error a Conectar en la base: ".mysqli_connect_error());
    mysqli_select_db($con, $db)or die("Error a Conectar en la base: ".mysqli_connect_error());

    return $con;

}
?>