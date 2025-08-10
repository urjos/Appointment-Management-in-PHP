<?php
    require_once '../../conexion.php';
    require_once '../metodosCitas.php';

    $id=$_POST['id'];
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
        $sala,
        $id
    );

    $obj=new metodos();
        // validacion si se actualizo el registro correctamente
        if($obj->actualizarDatos($datos)==1){
            // faltaba añadir los dos puntos al final del location
            header("location:../citas.php");
        }else{
            echo "Error en la actualizacion......";
        }
?>