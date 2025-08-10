<?php
    $id=$_GET['id'];
    
	require_once "../../conexion.php";
	require_once "../metodosPacientes.php";

	$obj= new metodos();
	if($obj->eliminarDatos($id)==1){
		header("location:../pacientes.php");
	}else{
		echo "fallo al agregar";
	}
?>