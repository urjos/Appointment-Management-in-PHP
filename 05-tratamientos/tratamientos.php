<?php
    require '../conexion.php';
    require 'metodosTratamientos.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link rel="stylesheet" href="../css/interfaces.css"> 

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
        <div class="container">
            <div class="input">
                <form action="procesos/insertarT.php" method="POST">
                    <div class="title">
                        <h1>INGRESO DE <strong>TRATAMIENTOS</strong></h1>
                    </div>
                    <div class="body">
                        
                        <label><i class="fa-solid fa-square-plus icon"></i>Nombre: </label>
                        <input type="text" name="txtnombre" placeholder="Ingrese su nombre" required>
                        
                        <label><i class="fa-solid fa-pencil icon"></i>Descripción: </label>
                        <input type="text" name="txtdesc" placeholder="Ingrese la descripción de su tratamiento" required>

                        <label><i class="fa-solid fa-clock-rotate-left icon"></i>Duración: </label>
                        <input type="text" name="txtduracion" placeholder="Ingrese la duración" required>

                        <label><i class="fa-solid fa-book-medical icon"></i>Diagnóstico: </label>
                        <input type="number" name="txtdiagnostico" placeholder="Ingrese el ID del diagnóstico" required>
                        
                        <label><i class="fa-solid fa-user-doctor icon"></i>Médico: </label>
                        <input type="number" name="txtmedico" placeholder="Ingrese el ID del médico" required>

                        <label><i class="fa-solid fa-signal icon"></i>Estado: </label>
                        <input type="text" name="txtestado" placeholder="Ingrese su estado" required>

                        <label><i class="fa-solid fa-calendar-check icon"></i>Frecuecia de administración: </label>
                        <input type="text" name="txtfre" placeholder="Ingrese su frecuencia de diagnóstico" required>
                    </div>
    
                    <div class="button">
                        <input type="submit" value="Enviar" name="agregar">
                        <a href="../menu.php">Salir</a>
                    </div>
                </form>
            </div>
            <div class="output">
                <table>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Duración</th>
                        <th>Descripcion</th>
                        <th>ID Diagnóstico</th>
                        <th>ID Médico</th>
                        <th>Estado</th>
                        <th>Frecuecia de administración</th>
                    </tr>
                    <?php
                        $obj =  new metodos();
                        $sql = "SELECT idTratamiento, nombre, descripcion, duracion, idDiagnostico, idMedico, estado, frecuenciaAdmin FROM TRATAMIENTOS";
                        $datos = $obj->mostrarDatos($sql);
                        foreach($datos as $key){
                    ?>
                    <tr>
                        <td><strong><?php echo $key['idTratamiento']; ?></strong></td>
                        <td><?php echo $key['nombre']; ?></td>
                        <td><?php echo $key['descripcion']; ?></td>
                        <td><?php echo $key['duracion']; ?></td>
                        <td><?php echo $key['idDiagnostico']; ?></td>
                        <td><?php echo $key['idMedico']; ?></td>
                        <td><?php echo $key['estado']; ?></td>
                        <td><?php echo $key['frecuenciaAdmin']; ?></td>
                        <td><a class="editar"href="editarT.php?id=<?php echo $key['idTratamiento']; ?>"><i class="fa-solid fa-pen-to-square"></i></a></td>
                        <td><a class="eliminar"href="procesos/eliminarT.php?id=<?php echo $key['idTratamiento']; ?>"><i class="fa-solid fa-circle-xmark"></i></a></td>
                    </tr>
                    <?php
                        }
                    ?>
                </table>
            </div>
        </div>
    </div>
</body>
</html>