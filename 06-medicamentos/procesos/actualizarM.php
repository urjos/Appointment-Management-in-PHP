<?php
    require_once '../../conexion.php';
    require_once '../metodosMedicamentos.php';

    $id=$_POST['id'];
    $nombre=$_POST['txtnombre'];
    $dosis=$_POST['txtdosis'];
    $frecuencia=$_POST['txtfre'];
    $duracion=$_POST['txtduracion'];
    $tratamiento=$_POST['txttratamiento'];
    $proveedor=$_POST['txtproveedor'];
    $efec=$_POST['txtefec'];
    

    // guardando las variables en un arreglo(matrices,array)
    $datos=array(
        $nombre,
        $dosis,
        $frecuencia,
        $duracion,
        $tratamiento,
        $proveedor,
        $efec,
        $id
    );
    $obj = new metodos();
        // validacion si se inserto el registro correctamente
    if($obj->actualizarDatos($datos)==1){
        // faltaba añadir los dos puntos al final del location
        header("location:../medicamentos.php");
    }else{
        echo "Error Revisar...";
    }
?>