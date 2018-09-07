<?php 
//require_once 'conexion.php';
include('../../conexion.php');

function getListasRep(){
$mysqli = conectarMysql();
$query = 'SELECT * FROM `cargo`';
$result=$mysqli -> query($query);
$listas='<option value="0">Elige una Opcion</option>';
while($row=$result->fetch_array(MYSQLI_ASSOC)){
$listas="<option value='$row[id_ca_em]'>$row[nombre_ca]</option>";
}
return $listas;
}
echo getListasRep();

?>