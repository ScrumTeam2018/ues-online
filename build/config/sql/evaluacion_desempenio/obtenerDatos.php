<?php
  if(isset($_POST["evaluacion"])){

      $result=0;

        require "../../conexion.php"; 
        $con = conectarMysql();
        $evaluacion=$_POST["evaluacion"];

        $consulta = $con->query("SELECT * FROM evaulaciond WHERE id_ed='$evaluacion'");
        $result = mysqli_fetch_array($consulta);

        $datos = array(
          0 => $result["nombre_ed"],
          1 => $result["criterio_ed"],
          2 => $result["can_asp_ed"],  
        );

        echo json_encode($datos);
        
}        
?>