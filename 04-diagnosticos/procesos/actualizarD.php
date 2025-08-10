<?php
    require_once '../../conexion.php';
    require_once '../metodosDiagnostico.php';

    $id=$_POST['id'];
    $desc=$_POST['txtdesc'];
    $fecha=$_POST['txtfecha'];
    $paciente=$_POST['txtpaciente'];
    $medico=$_POST['txtmedico'];
    $gravedad=$_POST['txtgravedad'];
    $reco=$_POST['txtreco'];
    $diag=$_POST['txtdiag'];
    

    // guardando las variables en un arreglo(matrices,array)
    $datos=array(
        $desc,
        $fecha,
        $paciente,
        $medico,
        $gravedad,
        $reco,
        $diag,
        $id
    );
    $obj = new metodos();
        // validacion si se inserto el registro correctamente
    if($obj->actualizarDatos($datos)==1){
        // faltaba añadir los dos puntos al final del location
        header("location:../diagnosticos.php");
    }else{
        echo "Error Revisar...";
    }
?>