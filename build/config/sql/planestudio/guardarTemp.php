<?php 
 require "../../conexion.php"; 
 $ciclos =$_POST['ciclos'];
 $con=conectarMysql();
     # code...
     $codigo=$_POST['codigo-'.$ciclos];
     $nombre = $_POST['nombre-'.$ciclos];
     $tipo = $_POST['tipo-'.$ciclos];
     $uv = $_POST['uv-'.$ciclos];
     $prerequisito =$_POST['prerequisito-'.$ciclos];
     $postrequisito=$_POST['postrequisito-'.$ciclos];
     $cant_ciclos =$_POST['cant_ciclos'];

     if($uv == 'Obligatoria'){
         $uvr= '1';
     }else{
         $uvr ='2';
     }

     if(!empty($codigo) && !empty($nombre) && !empty($tipo) && !empty($uv)){
         echo $codigo;
         echo $nombre;
         echo $tipo;
         echo $uv;
        if($ciclos < $cant_ciclos){
            $consulta = "INSERT INTO asignatura(codigo_as,nombre_as,tipo_as,uv_as,ciclo_as,estado_as,prerequisito,postrequisito,idplanestudiofk)
        values ('$codigo','$nombre','$uvr','$uv','$ciclos','1','$prerequisito','$postrequisito','1')";
        $result = mysqli_query($con,$consulta);
        }else{
            $consulta = "INSERT INTO asignatura(codigo_as,nombre_as,tipo_as,uv_as,ciclo_as,estado_as,prerequisito,postrequisito,idplanestudiofk)
        values ('$codigo','$nombre','$uvr','$uv','$ciclos','1','$prerequisito','$postrequisito','1')";
        $result = mysqli_query($con,$consulta);
        }

        if(!$result){
            echo "<script type='text/javascript'>";
            echo   "alert('Informacion ya existen en la base de datos');";
            echo "</script>"; 
          }else{
            echo "<script language='javascript'>";
            echo "alert('Datos Almacenados');";
            echo "location.href='../../../../produccion/Administracion/planestudio/registroasignatura.php';";
            echo "</script>";
           
          }//fin else
     }
?>