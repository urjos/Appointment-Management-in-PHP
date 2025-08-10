<?php
    $id=$_GET['id'];
    
	require_once "../../conexion.php";
	require_once "../metodosMedicos.php";

	$obj= new metodos();
	if($obj->eliminarDatos($id)==1){
		header("location:../medicos.php");
	}else{
		echo "fallo al agregar";
	}
?>