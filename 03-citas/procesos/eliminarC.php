<?php
    $id=$_GET['id'];
    
	require_once "../../conexion.php";
	require_once "../metodosCitas.php";

	$obj= new metodos();
	if($obj->eliminarDatos($id)==1){
		header("location:../citas.php");
	}else{
		echo "fallo al agregar";
	}
?>