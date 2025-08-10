<?php
    $id=$_GET['id'];
    
	require_once "../../conexion.php";
	require_once "../metodosTratamientos.php";

	$obj= new metodos();
	if($obj->eliminarDatos($id)==1){
		header("location:../tratamientos.php");
	}else{
		echo "fallo al agregar";
	}
?>