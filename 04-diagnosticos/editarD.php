<?php 
	require_once "../conexion.php";

	$obj= new conectar();
	$conexion=$obj->conexion();
	$id=$_GET['id'];
	
	$sql="SELECT * from DIAGNOSTICOS where idDiagnostico='$id'";

	$result=mysqli_query($conexion,$sql);
	$ver=mysqli_fetch_row($result);
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link rel="stylesheet" href="../css/interfacesEditar.css">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://kit.fontawesome.com/812c8ee19a.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Major+Mono+Display&family=Noto+Sans+Elymaic&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Quicksand:wght@300..700&family=Roboto+Slab:wght@100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Major+Mono+Display&family=Noto+Sans+Elymaic&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Quicksand:wght@300..700&family=Roboto+Slab:wght@100..900&family=Thasadith:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Major+Mono+Display&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Noto+Sans+Elymaic&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Quicksand:wght@300..700&family=Roboto+Slab:wght@100..900&family=Thasadith:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="wrapper">
        <div class="input">
			<div class="title">
				<h1>Actualización de <strong>Citas</strong></h1>
			</div>
            <form action="procesos/actualizarD.php" method="POST">
				<input type="text" hidden="" value="<?php echo $id ?>" name="id">	
				<div class="form-field">
					<label><i class="fa-solid fa-pencil icon"></i>Descripción: </label>
					<input type="text" name="txtdesc" value="<?php echo $ver[1] ?>">
				</div>
				<div class="form-field">
					<label><i class="fa-solid fa-user icon"></i>Fecha: </label>
					<input type="date" name="txtfecha" value="<?php echo $ver[2]; ?>">
				</div>
				<div class="form-field">
                    <label><i class="fa-solid fa-phone icon"></i>ID Paciente: </label>
                    <input type="number" name="txtpaciente" value="<?php echo $ver[3] ?>">
				</div>
				<div class="form-field">
                    <label><i class="fa-solid fa-house-chimney icon"></i>ID Médico: </label>
                    <input type="number" name="txtmedico" value="<?php echo $ver[4] ?>">
				</div>
				<div class="form-field">
					<label><i class="fa-solid fa-person icon"></i>Gravedad: </label>
                    <input type="text" name="txtgravedad" value="<?php echo $ver[5] ?>">
				</div>
				<div class="form-field">
                    <label><i class="fa-solid fa-envelope icon"></i>Recomendaciones: </label>
                    <input type="text" name="txtreco" value="<?php echo $ver[6] ?>">
				</div>
                <div class="form-field">
                    <label><i class="fa-solid fa-envelope icon"></i>Tipo de diagnostico: </label>
                    <input type="text" name="txtdiag" value="<?php echo $ver[7] ?>">
				</div>
				<div class="form-field">
					<input type="submit" value="Modificar" name="agregar">
					<a href="citas.php">Regresar</a>
				</div>
            </form>
        </div>
    </div>
</body>
</html>
