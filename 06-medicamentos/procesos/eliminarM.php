<?php
    $id=$_GET['id'];
    
	require_once "../../conexion.php";
	require_once "../metodosMedicamentos.php";

	$obj= new metodos();
	if($obj->eliminarDatos($id)==1){
		header("location:../medicamentos.php");
	}else{
		echo "fallo al agregar";
	}
?>