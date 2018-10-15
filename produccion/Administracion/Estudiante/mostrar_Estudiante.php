<?php
    require '../../../build/config/conexion.php';
    if(isset($_POST['id'])){
    $estudiante = $_POST['id'];
    $con=conectarMysql();
    $consulta  = "SELECT es.idestudiante, es.carnet_es, es.nombre_es, es.apellido_es, es.genero_es, es.NIT_es, es.DUI_es, es.direccion_es, es.telefono_es, es.correo_es, es.procedencia_es, es.estado_es, fa.nombre_fa, ca.nombre_ca, es.observacion_es FROM estudiante as es,facultad as fa, carrera as ca WHERE es.idcarrera=ca.idcarrera AND es.idfacultad=fa.idfacultad AND es.idestudiante=".$estudiante;
    $result = $con->query($consulta);
      if ($result) {
        while ($fila = $result->fetch_object()) {
          $carnet=$fila->carnet_es;
          $nombre=$fila->nombre_es;
          $apellido=$fila->apellido_es;
          $genero=$fila->genero_es;
          $nit=$fila->NIT_es;
          $dui=$fila->DUI_es;
          $telefono=$fila->telefono_es;
          $correo=$fila->correo_es;
          $direccion=$fila->direccion_es;
          $procedencia=$fila->procedencia_es;
          $observacion=$fila->observacion_es;
          $facultad=$fila->nombre_fa;
          $carrera=$fila->nombre_ca;
          $estado=$fila->estado_es;
          if($estado==1){
            $estado_es="Activo";
          }else{
            $estado_es="Inactivo";
          }
        }//fin while
      }

    } 
?>

                   <h5 style="color:RGB(205, 92, 92);">Estado Estudiante:</h5>
                   <br>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Estado: <span style="color:	#000080;"> '</span>
                      </label>
                      <div class="col-md-4 col-sm-4 col-xs-12">
                        <input type="text" class="form-control col-md-7 col-xs-12" value="<?php echo $estado_es; ?>" disabled>
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
                    <h5 style="color:RGB(205, 92, 92);">Educación Superior:</h5>
                   <br>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Facultad: <span style="color:	#000080;"> ' </span>
                      </label>
                      <div class="col-md-9 col-sm-9 col-xs-12">
                        <input type="text" class="form-control col-md-7 col-xs-12" value="<?php echo $facultad; ?>" disabled>
                      </div>
                    </div><br><br>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Carrera: <span style="color:	#000080;"> ' </span>
                      </label>
                      <div class="col-md-9 col-sm-9 col-xs-12">
                        <input type="text" class="form-control col-md-7 col-xs-12" value="<?php echo $carrera; ?>" disabled>
                      </div>
                    </div>
                    <br><br>
                    <h5 style="color:RGB(205, 92, 92);">Educación Media:</h5>
                    <br>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Procedencia: <span style="color:	#000080;"> ' </span>
                      </label>
                      <div class="col-md-4 col-sm-4 col-xs-12">
                        <input type="text" class="form-control col-md-7 col-xs-12" value="<?php echo $procedencia; ?>" disabled>
                      </div>
                    </div><br><br>
                    <h5 style="color:RGB(205, 92, 92);">Datos Personales:</h5>
                    <br>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Carné: <span style="color:	#000080;"> '</span>
                      </label>
                      <div class="col-md-4 col-sm-4 col-xs-12">
                        <input type="text" class="form-control col-md-7 col-xs-12" value="<?php echo $carnet; ?>" disabled>
                      </div>
                    </div>
                    <br><br>
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
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">NIT: <span style="color:	#000080;"> '</span>
                      </label>
                      <div class="col-md-4 col-sm-4 col-xs-12">
                        <input type="text" class="form-control col-md-7 col-xs-12" value="<?php echo $nit; ?>" disabled>
                      </div>
                    </div>
                    <br><br>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">DUI: <span style="color:	#000080;"> '</span>
                      </label>
                      <div class="col-md-4 col-sm-4 col-xs-12">
                        <input type="text" class="form-control col-md-7 col-xs-12" value="<?php echo $dui; ?>" disabled>
                      </div>
                    </div>
                    <br><br>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Teléfono: <span style="color:	#000080;"> '</span>
                      </label>
                      <div class="col-md-4 col-sm-4 col-xs-12">
                        <input type="text" class="form-control col-md-7 col-xs-12" value="<?php echo $telefono; ?>" disabled>
                      </div>
                    </div><br><br>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Correo Electrónico: <span style="color:	#000080;"> ' </span>
                      </label>
                      <div class="col-md-9 col-sm-9 col-xs-12">
                        <input type="text" class="form-control col-md-7 col-xs-12" value="<?php echo $correo; ?>" disabled>
                      </div>
                    </div><br><br>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Dirección: <span style="color:	#000080;"> ' </span>
                      </label>
                      <div class="col-md-9 col-sm-9 col-xs-12">
                        <input type="text" class="form-control col-md-7 col-xs-12" value="<?php echo $direccion; ?>" disabled>
                      </div>
                    </div><br><br>
                    
                    
                    