<?php
    require '../../../build/config/conexion.php';
    if(isset($_POST['id'])){
    $facultad = $_POST['id'];
    $con=conectarMysql();
    $consulta  = "SELECT * FROM representante_facultad WHERE id_re_fa=".$facultad;
    $result = $con->query($consulta);
      if ($result) {
        while ($fila = $result->fetch_object()) {
            $nombre=$fila->nombre_rf;
            $apellido=$fila->apellido_rf;
            $genero=$fila->genero_rf;
            $telefono=$fila->telefono_rf;
            $correo=$fila->correo_rf;
            $estado=$fila->estado_rf;
           

            if($estado==1){
              $estado_fa="Activo";
            }else{
              $estado_fa="Inactivo";
            }
        }//fin while
      }
    }
?>
                    <h5 style="color:RGB(205, 92, 92);">Estado Representante Facultad:</h5>
                    <br>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Estado: <span style="color:	#000080;"> '</span>
                      </label>
                      <div class="col-md-4 col-sm-4 col-xs-12">
                        <input type="text" class="form-control col-md-7 col-xs-12" value="<?php echo $estado_fa; ?>" disabled>
                      </div>
                    </div>
                    <br><br>
                    
                    <h5 style="color:RGB(205, 92, 92);">Datos Representante Facultad:</h5>
                    <br>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Nombres: <span style="color:	#000080;"> '</span>
                      </label>
                      <div class="col-md-9 col-sm-9 col-xs-12">
                        <input type="text" class="form-control col-md-7 col-xs-12" value="<?php echo $nombre; ?>" disabled>
                      </div>
                    </div>
                    <br><br> 
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Apellidos: <span style="color:	#000080;"> '</span>
                      </label>
                      <div class="col-md-9 col-sm-9 col-xs-12">
                        <input type="text" class="form-control col-md-7 col-xs-12" value="<?php echo $apellido; ?>" disabled>
                      </div>
                    </div>
                    <br><br> 
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Genero: <span style="color:	#000080;"> '</span>
                      </label>
                      <div class="col-md-4 col-sm-4 col-xs-12">
                        <input type="text" class="form-control col-md-7 col-xs-12" value="<?php echo $genero; ?>" disabled>
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
                    
                    

                    

                   
