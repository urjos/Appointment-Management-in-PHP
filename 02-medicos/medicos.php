<?php
    require '../conexion.php';
    require 'metodosMedicos.php';
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
                <form action="procesos/insertarM.php" method="POST">
                    <div class="title">
                        <h1>INGRESO DE <strong>MÉDICOS</strong></h1>
                    </div>
                    <div class="body">
                        <label><i class="fa-solid fa-user icon"></i>Nombre: </label>
                        <input type="text" name="txtnombre" placeholder="Ingrese su nombre" required>
            
                        <label><i class="fa-regular fa-user icon"></i>Apellidos: </label>
                        <input type="text" name="txtapellidos" placeholder="Ingreses sus apellidos" required>
            
                        <label><i class="fa-solid fa-notes-medical icon"></i></i>Especialidad: </label>
                        <input type="text" name="txtespecialidad" placeholder="Ingrese su especialidad" required>
                        
                        <label><i class="fa-solid fa-phone icon"></i>Teléfono: </label>
                        <input type="number" name="txttelefono" placeholder="Ingrese su teléfono" required>

                        <label><i class="fa-solid fa-at icon"></i></i>Email: </label>
                        <input type="email" name="txtemail" placeholder="Ingrese su email" required>
            
                        <label><i class="fa-solid fa-id-card icon"></i>Licencia: </label>
                        <input type="text" name="txtlicencia" placeholder="Ingrese su licencia" required>

                        <label><i class="fa-solid fa-clock icon"></i>Años de experiencia: </label>
                        <input type="number" name="txtexperiencia" placeholder="Ingrese sus años de experiencia" required>
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
                        <th>Apellido</th>
                        <th>Especialidad</th>
                        <th>Teléfono</th>
                        <th>Email</th>
                        <th>Licencia</th>
                        <th>Años de experiencia</th>
                    </tr>
                    <?php
                        $obj =  new metodos();
                        $sql = "SELECT idMedico, nombre, apellido, especialidad, telefono, email, licencia, añosDeExperiencia FROM MEDICOS";
                        $datos = $obj->mostrarDatos($sql);
                        foreach($datos as $key){
                    ?>
                    <tr>
                        <td><strong><?php echo $key['idMedico']; ?></strong></td>
                        <td><?php echo $key['nombre']; ?></td>
                        <td><?php echo $key['apellido']; ?></td>
                        <td><?php echo $key['especialidad']; ?></td>
                        <td><?php echo $key['telefono']; ?></td>
                        <td><?php echo $key['email']; ?></td>
                        <td><?php echo $key['licencia']; ?></td>
                        <td><?php echo $key['añosDeExperiencia']; ?></td>
                        <td><a class="editar"href="editarM.php?id=<?php echo $key['idMedico']; ?>"><i class="fa-solid fa-pen-to-square"></i></a></td>
                        <td><a class="eliminar"href="procesos/eliminarM.php?id=<?php echo $key['idMedico']; ?>"><i class="fa-solid fa-circle-xmark"></i></a></td>
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