<?php 
 require "../../conexion.php"; 
$ciclos =$_POST['val'];
for ($i=1; $i <= $ciclos ; $i++) { 
    # code...
    $codigo=$_POST['codigo-1'];
    echo $codigo;
}

?>