<?php
    $id=$_GET['id'];
    
	require_once "../../conexion.php";
	require_once "../metodosDiagnostico.php";

	$obj= new metodos();
	if($obj->eliminarDatos($id)==1){
		header("location:../diagnosticos.php");
	}else{
		echo "fallo al agregar";
	}
?>