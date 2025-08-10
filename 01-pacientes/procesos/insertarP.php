<?php
    require_once '../../conexion.php';
    require_once '../metodosPacientes.php';

    $nombre=$_POST['txtnombre'];
    $apellido=$_POST['txtapellidos'];
    $fecha=$_POST['txtfecha'];
    $genero=$_POST['txtgenero'];
    $telefono=$_POST['txttelefono'];
    $direccion=$_POST['txtdireccion'];
    $sangre=$_POST['txtsangre'];
    

    // guardando las variables en un arreglo(matrices,array)
    $datos=array(
        $nombre,
        $apellido,
        $fecha,
        $genero,
        $telefono,
        $direccion,
        $sangre,
        $id
    );
    $obj = new metodos();
        // validacion si se inserto el registro correctamente
    if($obj->insertarDatos($datos)==1){
        // faltaba añadir los dos puntos al final del location
        header("location:../pacientes.php");
    }else{
        echo "Error Revisar...";
    }
?>