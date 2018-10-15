<?php
    require '../../../build/config/conexion.php';
    if(isset($_POST['id'])){
    $aula = $_POST['id'];
    $con=conectarMysql();
    $consulta  = "SELECT * FROM aula WHERE idaula=".$aula;
    $result = $con->query($consulta);
      if ($result) {
        while ($fila = $result->fetch_object()) {
            $nombre=$fila->nombre_au;
            $ubicacion=$fila->ubicacion_au;
            $cantidad=$fila->cantidad_au;
            $observacion=$fila->observacion_au;
            $estado=$fila->estado_au;
            if($estado==1){
              $estado_ca="Activa";
            }else{
              $estado_ca="Inactiva";
            }
        }//fin while
      }
    }
?>
                    <h5 style="color:RGB(205, 92, 92);">Estado Aula:</h5>
                    <br>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Estado: <span style="color:	#000080;"> '</span>
                      </label>
                      <div class="col-md-4 col-sm-4 col-xs-12">
                        <input type="text" class="form-control col-md-7 col-xs-12" value="<?php echo $estado_ca; ?>" disabled>
                      </div>
                    </div>
                    <br><br>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Observaci&oacute;n: <span style="color:	#000080;"> '</span>
                      </label>
                      <div class="col-md-9 col-sm-9 col-xs-12">
                        <input type="text" class="form-control col-md-7 col-xs-12" value="<?php echo $observacion; ?>" disabled>
                      </div>
                    </div>
                    <br><br>
                    <h5 style="color:RGB(205, 92, 92);">Datos Aula:</h5>
                    <br>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Nombre: <span style="color:	#000080;"> '</span>
                      </label>
                      <div class="col-md-9 col-sm-9 col-xs-12">
                        <input type="text" class="form-control col-md-7 col-xs-12" value="<?php echo $nombre; ?>" disabled>
                      </div>
                    </div>
                    <br><br> 
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Ubicaci&oacute;n: <span style="color:	#000080;"> '</span>
                      </label>
                      <div class="col-md-9 col-sm-9 col-xs-12">
                        <input type="text" class="form-control col-md-7 col-xs-12" value="<?php echo $ubicacion; ?>" disabled>
                      </div>
                    </div>
                    <br><br>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Capacidad: <span style="color:	#000080;"> '</span>
                      </label>
                      <div class="col-md-4 col-sm-4 col-xs-12">
                        <input type="text" class="form-control col-md-7 col-xs-12" value="<?php echo $cantidad; ?>" disabled>
                      </div>
                    </div>
                    <br><br>
                    <h5 style="color:RGB(205, 92, 92);">Complemento Aula:</h5>
                    <br>
                    <?php 
                        $consulta1  = "SELECT * FROM aula_ca as a, complemento_aula as ca WHERE a.id_co_au=ca.id_co_au AND idaula=".$aula;
                        $result1 = $con->query($consulta1);
                          if ($result1) {
                            while ($fila1 = $result1->fetch_object()) {
                              echo "<div class='col-sm-12 col-sm-offset-2 col-md-8 col-md-offset-2'><div class='checkbox'><label>
                              <input type='checkbox' id='complecheck[]' name='complecheck[]'class='flat' value='".$fila1->id_co_au."' checked> ".$fila1->nombre_co_au."</label>
                              </div></div><br><br>";
                              
                            }//fin while
                          }
                    
                    ?>

                    

                   
