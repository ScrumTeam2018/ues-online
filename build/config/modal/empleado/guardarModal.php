<?php
  $mysqli = new mysqli('localhost', 'root', '', 'ues');
?>

<?php


$c=$_POST['car'];

$sql = "INSERT INTO cargo(nombre_ca) VALUES('$c')";

$ejecutar=mysqli_query($mysqli,$sql);

if($ejecutar){
    echo 'exito';
    
    }else{
        echo 'no';
    }

?>