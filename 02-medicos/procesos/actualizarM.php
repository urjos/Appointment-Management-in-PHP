<?php
    require_once '../../conexion.php';
    require_once '../metodosMedicos.php';

    $id=$_POST['id'];
    $nombre=$_POST['txtnombre'];
    $apellido=$_POST['txtapellido'];
    $especialidad=$_POST['txtespecialidad'];
    $telefono=$_POST['txttelefono'];
    $email=$_POST['txtemail'];
    $licencia=$_POST['txtlicencia'];
    $añosDeExperiencia=$_POST['txtexperiencia'];

    $datos=array(
        $nombre,
        $apellido,
        $especialidad, 
        $telefono, 
        $email, 
        $licencia,
        $añosDeExperiencia,
        $id
    );

    $obj=new metodos();
        // validacion si se actualizo el registro correctamente
        if($obj->actualizarDatos($datos)==1){
            // faltaba añadir los dos puntos al final del location
            header("location:../medicos.php");
        }else{
            echo "Error en la actualizacion......";
        }
?>