<?php
    require '../../../build/config/conexion.php';
    if(isset($_POST['id'])){
    $carrera = $_POST['id'];
    $con=conectarMysql();
    $consulta  = "SELECT ca.codigo_ca, ca.nombre_ca, ca.duracion_ca, ca.estado_ca, fa.nombre_fa FROM carrera as ca, facultad as fa WHERE ca.idfacultadfk=fa.idfacultad AND ca.idcarrera=".$carrera;
    $result = $con->query($consulta);
      if ($result) {
        while ($fila = $result->fetch_object()) {
            $codigo=$fila->codigo_ca;
            $nombre=$fila->nombre_ca;
            $duracion=$fila->duracion_ca." A&ntilde;os";
            $estado=$fila->estado_ca;
            if($estado==1){
              $estado_ca="Activa";
            }else{
              $estado_ca="Inactiva";
            }
            $facultad=$fila->nombre_fa;
        }//fin while
      }
    } 
?>

                    <div class="form-group">
                      <label class="control-label col-md-2 col-sm-2 col-xs-12">Estado: <span style="color:	#000080;"> '</span>
                      </label>
                      <div class="col-md-4 col-sm-4 col-xs-12">
                        <input type="text" class="form-control col-md-7 col-xs-12" value="<?php echo $estado_ca; ?>" disabled>
                      </div>
                    </div>
                    <br><br>

                    <div class="form-group">
                      <label class="control-label col-md-2 col-sm-2 col-xs-12">C&oacute;digo: <span style="color:	#000080;"> '</span>
                      </label>
                      <div class="col-md-4 col-sm-4 col-xs-12">
                        <input type="text" class="form-control col-md-7 col-xs-12" value="<?php echo $codigo; ?>" disabled>
                      </div>
                    </div>
                    <br><br>
                    <div class="form-group">
                      <label class="control-label col-md-2 col-sm-2 col-xs-12">Nombre: <span style="color:	#000080;"> '</span>
                      </label>
                      <div class="col-md-10 col-sm-10 col-xs-12">
                        <input type="text" class="form-control col-md-7 col-xs-12" value="<?php echo $nombre; ?>" disabled>
                      </div>
                    </div>
                    <br><br>
                    <div class="form-group">
                      <label class="control-label col-md-2 col-sm-2 col-xs-12">Duraci&oacute;n: <span style="color:	#000080;"> '</span>
                      </label>
                      <div class="col-md-4 col-sm-4 col-xs-12">
                        <input type="text" class="form-control col-md-7 col-xs-12" value="<?php echo $duracion; ?>" disabled>
                      </div>
                    </div>
                    <br><br>
                    <div class="form-group">
                      <label class="control-label col-md-2 col-sm-2 col-xs-12">Facultad: <span style="color:	#000080;"> '</span>
                      </label>
                      <div class="col-md-10 col-sm-10 col-xs-12">
                        <input type="text" class="form-control col-md-7 col-xs-12" value="<?php echo $facultad; ?>" disabled>
                      </div>
                    </div>
                    <br><br>

                   
