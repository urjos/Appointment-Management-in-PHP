<?php
    require_once '../../conexion.php';
    require_once '../metodosTratamientos.php';

    $id=$_POST['id'];
    $nombre=$_POST['txtnombre'];
    $desc=$_POST['txtdesc'];
    $duracion=$_POST['txtduracion'];
    $diag=$_POST['txtdiagnostico'];
    $medico=$_POST['txtmedico'];
    $estado=$_POST['txtestado'];
    $fre=$_POST['txtfre'];
    

    // guardando las variables en un arreglo(matrices,array)
    $datos=array(
        $nombre,
        $desc,
        $duracion,
        $diag,
        $medico,
        $estado,
        $fre,
        $id
    );
    $obj = new metodos();
        // validacion si se inserto el registro correctamente
    if($obj->actualizarDatos($datos)==1){
        // faltaba añadir los dos puntos al final del location
        header("location:../tratamientos.php");
    }else{
        echo "Error Revisar...";
    }
?>