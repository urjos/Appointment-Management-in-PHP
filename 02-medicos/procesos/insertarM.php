<?php
    require_once '../../conexion.php';
    require_once '../metodosMedicos.php';

    $nombre=$_POST['txtnombre'];
    $apellido=$_POST['txtapellidos'];
    $especialidad=$_POST['txtespecialidad'];
    $telefono=$_POST['txttelefono'];
    $email=$_POST['txtemail'];
    $licencia=$_POST['txtlicencia'];
    $añosDeExperiencia=$_POST['txtexperiencia'];
    

    // guardando las variables en un arreglo(matrices,array)
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
    $obj = new metodos();
        // validacion si se inserto el registro correctamente
    if($obj->insertarDatos($datos)==1){
        // faltaba añadir los dos puntos al final del location
        header("location:../medicos.php");
    }else{
        echo "Error Revisar...";
    }
?>