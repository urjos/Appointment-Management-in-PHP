<?php
    require_once '../../conexion.php';
    require_once '../metodosPacientes.php';

    $id=$_POST['id'];
    $nombre=$_POST['txtnombre'];
    $apellido=$_POST['txtapellido'];
    $fecha=$_POST['txtfecha'];
    $genero=$_POST['txtgenero'];
    $telefono=$_POST['txttelefono'];
    $direccion=$_POST['txtdireccion'];
    $sangre=$_POST['txtsangre'];

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

    $obj=new metodos();
        // validacion si se actualizo el registro correctamente
        if($obj->actualizarDatos($datos)==1){
            // faltaba añadir los dos puntos al final del location
            header("location:../pacientes.php");
        }else{
            echo "Error en la actualizacion......";
        }
?>