<?php
require "../../conexion.php";

if(isset($_POST["bandera"])){
    $msj="Error";
    
    function obtenerComlement(){
        $result = 0;
        $result1 = 0;
        $datos = null;

    $bandera=$_POST["bandera"];
 
    $con = conectarMysql();
    
        $complemento = $_POST["id"];

        $consulta = "SELECT * FROM complemento_aula WHERE nombre_co_au='$complemento'";
        $result = $con->query($consulta);
            if ($result) {
            while ($fila = $result->fetch_object()) {
                $datos=$fila->nombre_co_au;
            }//fin while
            }
        //echo "datos ".$datos;
            if($datos==null){
                $consulta1  = "INSERT INTO complemento_aula(nombre_co_au)  VALUES('$complemento')";
                $result1 =mysqli_query($con,$consulta1);
            }
        
            if($result1){
                $msj = "Exito";
            }else{
                $msj = "Sin Coneccion a la base";
                if($datos!=null){
                    $msj = "Nombre ya Existe";
                }
            }
        
        

        return $msj;
    }
}

  echo obtenerComlement();
?>