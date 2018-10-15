<?php
require "../../conexion.php";

if(isset($_POST["bandera"])){

    $bandera=$_POST["bandera"];
 
    $con = conectarMysql();

    echo $bandera;
}

?>