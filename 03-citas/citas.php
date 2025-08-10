<?php
    require '../conexion.php';
    require 'metodosCitas.php';
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
                <form action="procesos/insertarC.php" method="POST">
                    <div class="title">
                        <h1>INGRESO DE <strong>CITAS</strong></h1>
                    </div>
                    <div class="body">
                        <label><i class="fa-regular fa-calendar-days icon"></i>Fecha: </label>
                        <input type="date" name="txtfecha" placeholder="Ingrese la fecha de su cita" required>
            
                        <label><i class="fa-solid fa-circle-question icon"></i>Motivo: </label>
                        <input type="text" name="txtmotivo" placeholder="Ingrese su motivo" required>
            
                        <label><i class="fa-solid fa-user icon"></i>Paciente: </label>
                        <input type="number" name="txtpaciente" placeholder="Ingrese el ID del paciente" required>
                        
                        <label><i class="fa-solid fa-user-doctor icon"></i>Médico: </label>
                        <input type="number" name="txtmedico" placeholder="Ingrese el ID del médico" required>

                        <label><i class="fa-solid fa-clock icon"></i>Estado: </label>
                        <input type="text" name="txtestado" placeholder="Ingrese su estado" required>
            
                        <label><i class="fa-solid fa-pen-to-square icon"></i>Observaciones: </label>
                        <input type="text" name="txtobservacion" placeholder="Ingrese sus observaciones" required>

                        <label><i class="fa-solid fa-hospital icon"></i>Sala: </label>
                        <input type="text" name="txtsala" placeholder="Ingrese su sala" required>
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
                        <th>Fecha</th>
                        <th>Motivo</th>
                        <th>ID Paciente</th>
                        <th>ID Médico</th>
                        <th>Estado</th>
                        <th>Observaciones</th>
                        <th>Sala</th>
                    </tr>
                    <?php
                        $obj =  new metodos();
                        $sql = "SELECT idCita, fecha, motivo, idPaciente, idMedico, estado, observaciones, sala FROM CITAS";
                        $datos = $obj->mostrarDatos($sql);
                        foreach($datos as $key){
                    ?>
                    <tr>
                        <td><strong><?php echo $key['idCita']; ?></strong></td>
                        <td><?php echo $key['fecha']; ?></td>
                        <td><?php echo $key['motivo']; ?></td>
                        <td><?php echo $key['idPaciente']; ?></td>
                        <td><?php echo $key['idMedico']; ?></td>
                        <td><?php echo $key['estado']; ?></td>
                        <td><?php echo $key['observaciones']; ?></td>
                        <td><?php echo $key['sala']; ?></td>
                        <td><a class="editar"href="editarC.php?id=<?php echo $key['idCita']; ?>"><i class="fa-solid fa-pen-to-square"></i></a></td>
                        <td><a class="eliminar"href="procesos/eliminarC.php?id=<?php echo $key['idCita']; ?>"><i class="fa-solid fa-circle-xmark"></i></a></td>
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