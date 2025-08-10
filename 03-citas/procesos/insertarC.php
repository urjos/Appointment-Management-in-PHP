<?php
    require_once '../../conexion.php';
    require_once '../metodosCitas.php';

    $fecha=$_POST['txtfecha'];
    $motivo=$_POST['txtmotivo'];
    $paciente=$_POST['txtpaciente'];
    $medico=$_POST['txtmedico'];
    $estado=$_POST['txtestado'];
    $observacion=$_POST['txtobservacion'];
    $sala=$_POST['txtsala'];
    

    // guardando las variables en un arreglo(matrices,array)
    $datos=array(
        $fecha,
        $motivo,
        $paciente,
        $medico,
        $estado,
        $observacion,
        $sala
    );
    $obj = new metodos();
        // validacion si se inserto el registro correctamente
    if($obj->insertarDatos($datos)==1){
        // faltaba añadir los dos puntos al final del location
        header("location:../citas.php");
    }else{
        echo "Error Revisar...";
    }
?>