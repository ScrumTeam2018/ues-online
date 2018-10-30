<?php
    require '../../../build/config/conexion.php';
    if(isset($_POST['evaluacion'])){
    $evaluacion = $_POST['evaluacion'];
    $con=conectarMysql();
    $consulta  = "SELECT * FROM evaulaciond WHERE id_ed=".$evaluacion;
    $result = $con->query($consulta);
     /* if ($result) {
        while ($fila = $result->fetch_object()) {
            $nombre=$fila->nombre_ed;
          

            
        }//fin while
      }*/
    }
?>

<input type="hidden" name="bandera" id="bandera">
                    <input type="hidden" name="baccion" id="baccion">

					
                    <div class="responsive-table">
                      <table id="datatables-example" class="table table-striped table-bordered" width="100%" cellspacing="0">
                      <thead>
                        <tr>
                          <th>No.</th>
                          <th>Evaluaci&oacute;n</th>
                          <th></th>
                          <th>Acciones</th>
                        </tr>
                      </thead>
                      <tbody>
                        
                      <?php
                      //require '../../../build/config/conexion.php';
                      //$con=conectarMysql();
                     // $consulta  = "SELECT * FROM evaulaciond WHERE id_ed=".$evaluacion;
                     // $result = $con->query($consulta);
                      $contador=1;
                      if ($result) {
                        while ($fila = $result->fetch_object()) {
                         
                          echo "<tr>";
                          echo "<td>" .$contador. "</td>";
                          echo "<td>" . $fila->nombre_ed . "</td>";
                          echo "<td>" . $fila-> id_ed. "</td>";
                          echo "<td>  <a class='btn btn-info' onclick='modify(".$fila->id_ed.")' ><i class='fa fa-edit'></i></a>
                                      </td>";
                          echo "</tr>";
                          $contador++;

                        }
                       }
                      ?>
                      </tbody>
                      <thead>
                        <tr>
                          <th>No.</th>
                          <th>Aspectos</th>
                          <th></th>
                          <th>Acciones</th>
                        </tr>
                      </thead>
                      <tbody>
                        
                      <?php
                      //require '../../../build/config/conexion.php';
                      //$con=conectarMysql();
                      $consulta  = "SELECT * FROM ed_aspectos WHERE id_edfk=".$evaluacion;
                      $result = $con->query($consulta);
                      $contador=1;
                      if ($result) {
                        while ($fila = $result->fetch_object()) {
                         
                          echo "<tr>";
                          echo "<td>" .$contador. "</td>";
                          echo "<td>" . $fila->ed_nomasp . "</td>";
                          echo "<td>" . $fila-> ed_idaspectos. "</td>";
                          echo "<td>  <a class='btn btn-info' onclick='modify(".$fila->ed_idaspectos.")' ><i class='fa fa-edit'></i></a>
                                      </td>";
                          echo "</tr>";
                          $contador++;

                        }
                       }
                      ?>
                      </tbody>
                    </table>
                    </div>