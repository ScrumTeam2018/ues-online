<?php
    require '../../../build/config/conexion.php';
    if(isset($_POST['id'])){
    $facultad = $_POST['id'];
    $con=conectarMysql();
    $consulta  = "SELECT fa.nombre_fa, fa.telefono_fa, fa.correo_fa, fa.estado_fa, rf.nombre_rf, rf.apellido_rf FROM facultad as fa, representante_facultad as rf WHERE fa.id_re_fafk=rf.id_re_fa AND fa.idfacultad=".$facultad;
    $result = $con->query($consulta);
      if ($result) {
        while ($fila = $result->fetch_object()) {
            $nombre=$fila->nombre_fa;
            $telefono=$fila->telefono_fa;
            $correo=$fila->correo_fa;
            $estado=$fila->estado_fa;
            $nombrerf=$fila->nombre_rf;
            $apellidorf=$fila->apellido_rf;

            if($estado==1){
              $estado_fa="Activa";
            }else{
              $estado_fa="Inactiva";
            }
        }//fin while
      }
    }
?>
                    <h5 style="color:RGB(205, 92, 92);">Estado Facultad:</h5>
                    <br>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Estado: <span style="color:	#000080;"> '</span>
                      </label>
                      <div class="col-md-4 col-sm-4 col-xs-12">
                        <input type="text" class="form-control col-md-7 col-xs-12" value="<?php echo $estado_fa; ?>" disabled>
                      </div>
                    </div>
                    <br><br>
                    <h5 style="color:RGB(205, 92, 92);">Datos Facultad:</h5>
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
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Tel&eacute;fono: <span style="color:	#000080;"> '</span>
                      </label>
                      <div class="col-md-4 col-sm-4 col-xs-12">
                        <input type="text" class="form-control col-md-7 col-xs-12" value="<?php echo $telefono; ?>" disabled>
                      </div>
                    </div>
                    <br><br>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Correo Electr&oacute;nico: <span style="color:	#000080;"> '</span>
                      </label>
                      <div class="col-md-9 col-sm-9 col-xs-12">
                        <input type="text" class="form-control col-md-7 col-xs-12" value="<?php echo $correo; ?>" disabled>
                      </div>
                    </div>
                    <br><br>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Representante: <span style="color:	#000080;"> '</span>
                      </label>
                      <div class="col-md-9 col-sm-9 col-xs-12">
                        <input type="text" class="form-control col-md-7 col-xs-12" value="<?php echo $nombrerf." ".$apellidorf; ?>" disabled>
                      </div>
                    </div>
                    <br><br>
                   
                    

                    

                   
