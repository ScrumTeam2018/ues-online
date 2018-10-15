<?php
    require '../../../build/config/conexion.php';

    $con=conectarMysql();
    $consulta  = "SELECT * FROM complemento_aula";
    $result = $con->query($consulta);
    $cont=1;
      if ($result) {
        while ($fila = $result->fetch_object()) {
          echo "<div class='checkbox'><label>
          <input type='checkbox' id='complecheck[]' name='complecheck[]'class='flat' value='".$fila->id_co_au."'> ".$fila->nombre_co_au."</label>
          </div>";
          $cont++;
        }//fin while
        
      }
?>  