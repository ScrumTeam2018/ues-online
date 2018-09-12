<?php
require "../../conexion.php";

if(isset($_POST["bandera"])){

    $bandera=$_POST["bandera"];
    $cargo = $_POST['cargo'];
    $dui = $_POST['dui'];
    $nit = $_POST['nit'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $direccion = $_POST['direccion'];
    $genero = $_POST['genero'];
    $estado = '1';
    $especialidad = $_POST['especialidad'];

    $telefono= $_POST['telefono'];
    
    
    $correo = $_POST['correo'];

    
        
    

    echo "cargo ".$cargo;
    echo "dui ".$dui;
    echo "nit ".$nit;
    echo "nombre ".$nombre;
    echo "apellido ".$apellido;
    echo "direccion ".$direccion;
    echo "genero ".$genero;

    //echo $estado;
    echo "especialidad ".$especialidad;
    //echo $telefono;
    /**/

    /*$funcion=$_POST['funcion'];
    $cod=$_POST['cod'];
    echo $funcion;



    if($funcion=="modificar"){

    $sql="UPDATE empleado SET nombre_em='$nombre',apellido_em='$apellido',DUI_em='$dui',NIT_em='$nit',
    direccion_em='$direccion',cargo_em='$cargo',especialidad_es_em='$especialidad',genero_em='$genero',
    estado_em='$estado' where idempleado=$cod";
        

    }else{*/

        
    //}
    /*  

        

        
            



    //$sql1 = "INSERT INTO empleado_telefono (telefono_em) VALUES ('$telefono')";


    //$sql2 = "INSERT INTO empleado_correo (correo_em) VALUES ('$correo') ";


    //$conexion1 = conectarMysql();
    //$conexion2 = conectarMysql();
    $ejecutar=mysqli_query($conexion,$sql);
    //$ejecutar1=mysqli_query($conexion1,$sql1);
    //$ejecutar2=mysqli_query($conexion2,$sql2);
    if($ejecutar){
    echo 'exito';
    echo "<script type='text/javascript'>";
    echo "location.href='../../../../produccion/Administracion/Tutor/VistaTutor.php'";
    echo "</script>"; 


    }else{
        echo 'no';
    }
    /*if($ejecutar1){
        echo 'exito';
        }else{
            echo 'no';
        }
        if($ejecutar2){
            echo 'exito';
            }else{
                echo 'no';
            }*/
    //$nombre.val(" ");
    //return $ejecutar;


    if($bandera=="add"){
        $con = conectarMysql();
        $result = $con->query("select max(idempleado)+1 as 'id' from empleado");
        if ($result) {
            while ($fila = $result->fetch_object()) {
            $id=$fila->id;
            }
        }
        if($id==null){
            $id=$id+1;
        }

        echo "id ".$id;

        $consulta1 = "INSERT INTO empleado(idempleado,nombre_em,apellido_em,DUI_em,NIT_em,direccion_em,cargo_em,especialidad_em,genero_em,estado_em) 
        VALUES('$id','$nombre','$apellido','$dui','$nit','$direccion','$cargo','$especialidad','$genero','$estado')";

       
        $result1 = mysqli_query($con,$consulta1);
        
        if (!$result1) {
         # code...
            echo "<script type='text/javascript'>";
            echo   "alert('Código o nombre ya existen');";
            echo "</script>"; 
       }else {
         
        echo "exito";
        for($i=0 ; $i <count($telefono); $i++ ){
            $consulta2 = "INSERT INTO empleado_telefono(telefono_em, idempleadotefk) VALUES ('$telefono[$i]','$id')";
            echo $consulta2;
            echo "</br>";
            $result2 =mysqli_query($con,$consulta2);
        }

        for($j=0 ; $j <count($correo); $j++ ){
            $consulta3 = "INSERT INTO empleado_correo(correo_em, idempleadocofk) VALUES ('$correo[$j]','$id')";
            echo $consulta3;
            echo "</br>";
            $result3 =mysqli_query($con,$consulta3);
        }

       }
     
       
         
 
      /*   if(!$result1 || !$result2){
           mysqli_query("rollback");
           echo "<script type='text/javascript'>";
           echo   "alert('Código o nombre ya existen');";
           echo "</script>"; 
         }else{
           mysqli_query("commit");
           echo "<script language='javascript'>";
           //echo "location.href='../../../../produccion/Administracion/carrera/registrocarrera.php';";
           echo "alert('Datos Almacenados');";
           echo "</script>";
          
         }//fin else*/
        

    }
}

?>