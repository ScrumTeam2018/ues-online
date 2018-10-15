<?php
    require '../../../build/config/conexion.php';
    if(isset($_POST['idfa']) && isset($_POST['idca'])){
    function obtenerEstudiante(){
    $facultad = $_POST['idfa'];
    $carrera = $_POST['idca'];
    $con=conectarMysql();
    $consulta  = "SELECT idestudiante, carnet_es, nombre_es, apellido_es, NIT_es  FROM estudiante WHERE idfacultad=".$facultad." AND idcarrera=".$carrera." AND estado_es=1";
    $result = $con->query($consulta);
    $estudiantes = "<option value=''>Seleccione Estudiante...</option>";
      if ($result) {
        while ($fila = $result->fetch_object()) {
          $estudiantes .= "<option value='".$fila->idestudiante."'>".$fila->nombre_es." ".$fila->apellido_es."</option>";
        }//fin while
        return $estudiantes;
      }
    }
  }

    echo obtenerEstudiante();
?>  