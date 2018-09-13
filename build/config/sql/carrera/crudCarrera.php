<?php
    require "../../conexion.php"; 
    $tag = $_POST['tag'];

    if(isset($tag) && $tag !==''){
        if($tag == 'cod'){
            $codigo = $_POST['codigo'];
            $con=conectarMysql();
           
            $consulta = "SELECT * FROM carrera WHERE codigo_ca='$codigo'";
            $result = $con->query($consulta);
                if ($result) {
                while ($fila = $result->fetch_object()) {
                    $datos=$fila->nombre_ca;
                }//fin while
                }
               
            if(isset($datos)){
                echo false;
            }else{
            echo true;}
        }
    }

?>