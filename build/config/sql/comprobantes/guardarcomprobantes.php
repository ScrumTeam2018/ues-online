<?php
 require "../../conexion.php"; 
    
  if(isset($_POST["bandera"])){

    $bandera=$_POST["bandera"];
   
    if($bandera=="add"){
      $msj="Error";
    
    //  function obtenerResultado(){
      $result = 0;
      $carpeta=$_REQUEST["carpeta"];

      echo $carpeta;
        $ruta = "../../../../Archivos";
        $ruta2 = "../../../../Archivos/".$carpeta;

        


     
     function llenarArchivos($ruta3){
        $dbmatricula = null;
        $dbpcuota = null;
        $dbdui = null;
        $dbnit = null;
        $dbpartida = null;
    
        function validarTipoDoc($doc){
            $tipo=null;
            if($doc=="application/pdf"){
                $tipo=".pdf";
            }else if ($doc=="image/jpg") {
                $tipo=".jpg";
            }else if ($doc=="image/jpeg") {
                $tipo=".jpeg";
            }else if ($doc=="image/png") {
                $tipo=".png";
            }
            return $tipo;
        }

        $mtype = $_FILES['matricula']['type'];
        $matricula_guardada = $_FILES['matricula']['tmp_name'];
        $mtipo=validarTipoDoc($mtype);
        
        if(move_uploaded_file($matricula_guardada, $ruta3."/matricula".$mtipo)){
            //echo "Archivo Guardado Matricula";
            $dbmatricula  = $ruta3."/matricula".$mtipo;
        }else{
            //echo "Archivo Noo Matricula";
            echo "Archivo Guardado Matricula";
            $dbmatricula  = $ruta3."/matricula".$mtipo;
        }else{
            echo "Archivo Noo Matricula";
        }

        $ctype = $_FILES['pcuota']['type'];
        $pcuota_guardada = $_FILES['pcuota']['tmp_name'];
        $ctipo=validarTipoDoc($ctype);

        if(move_uploaded_file($pcuota_guardada, $ruta3."/primera_cuota".$ctipo)){
           // echo "Archivo Guardado Primera Cuota";
            $dbpcuota = $ruta3."/primera_cuota".$ctipo;
        }else{
           // echo "Archivo Noo Primera Cuota";
            echo "Archivo Guardado Primera Cuota";
            $dbpcuota = $ruta3."/primera_cuota".$ctipo;
        }else{
            echo "Archivo Noo Primera Cuota";
        }

        $dtype = $_FILES['dui']['type'];
        $dui_guardado = $_FILES['dui']['tmp_name'];
        $dtipo=validarTipoDoc($dtype);

        if(move_uploaded_file($dui_guardado, $ruta3."/dui".$dtipo)){
           // echo "Archivo Guardado Dui";
            $dbdui = $ruta3."/dui".$dtipo;
        }else{
           // echo "Archivo Noo Dui";
            echo "Archivo Guardado Dui";
            $dbdui = $ruta3."/dui".$dtipo;
        }else{
            echo "Archivo Noo Dui";
        }

        $ntype = $_FILES['nit']['type'];
        $nit_guardado = $_FILES['nit']['tmp_name'];
        $ntipo=validarTipoDoc($ntype);

        if(move_uploaded_file($nit_guardado, $ruta3."/nit".$ntipo)){
            //echo "Archivo Guardado Nit";
            $dbnit = $ruta3."/nit".$ntipo;
        }else{
           // echo "Archivo Noo Nit";
            echo "Archivo Guardado Nit";
            $dbnit = $ruta3."/nit".$ntipo;
        }else{
            echo "Archivo Noo Nit";
        }

        $ptype = $_FILES['partida']['type'];
        $partida_guardada = $_FILES['partida']['tmp_name'];
        $ptipo=validarTipoDoc($ptype);

        if(move_uploaded_file($partida_guardada, $ruta3."/paes".$ptipo)){
           // echo "Archivo Guardado Partida";
            $dbpartida = $ruta3."/partida_nacimiento".$ptipo;
        }else{
           // echo "Archivo Noo Partida";
        }

        /*echo $dbmatricula ;
        echo $dbpcuota;
        echo $dbdui;
        echo $dbnit;
        echo $dbpartida;*/
        if(move_uploaded_file($partida_guardada, $ruta3."/partida_nacimiento".$ptipo)){
            echo "Archivo Guardado Partida";
            $dbpartida = $ruta3."/partida_nacimiento".$ptipo;
        }else{
            echo "Archivo Noo Partida";
        }

        echo $dbmatricula ;
        echo $dbpcuota;
        echo $dbdui;
        echo $dbnit;
        echo $dbpartida;
     }

     if(!file_exists($ruta)){
         mkdir($ruta, 0777,true);
            if(!file_exists($ruta2)){
                mkdir($ruta2, 0777,true);
                if(file_exists($ruta2)){
        
                    llenarArchivos($ruta2);
                }
            }else{
                
                llenarArchivos($ruta2);
                

            }
     }else{
        if(!file_exists($ruta2)){
            mkdir($ruta2, 0777,true);
            if(file_exists($ruta2)){
    
                llenarArchivos($ruta2);
            }
        }else{
            
            llenarArchivos($ruta2);
        }
     }

     

   


      //$observacion=$_REQUEST["observacion"];
      //$con = conectarMysql();

      //$consulta  = "UPDATE aula set estado_au='0', observacion_au='$observacion' where idaula=".$baccion;
      //$result = $con->query($consulta);
        if ($result) {
          $msj = "Exito";
        } else {
          $msj = "Error";
        }
        return $msj;
     // }
    }
  }

  //echo obtenerResultado();
?>