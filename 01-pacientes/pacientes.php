<?php
    require '../conexion.php';
    require 'metodosPacientes.php';
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
                <form action="procesos/insertarP.php" method="POST">
                    <div class="title">
                        <h1>INGRESO DE <strong>PACIENTES</strong></h1>
                    </div>
                    <div class="body">
                        <label><i class="fa-solid fa-user icon"></i>Nombre: </label>
                        <input type="text" name="txtnombre" placeholder="Ingrese su nombre" required>
            
                        <label><i class="fa-regular fa-user icon"></i>Apellidos: </label>
                        <input type="text" name="txtapellidos" placeholder="Ingreses sus apellidos" required>
            
                        <label><i class="fa-regular fa-calendar-days icon"></i></i>Fecha de nacimiento: </label>
                        <input type="date" name="txtfecha" placeholder="Ingrese su fecha de nacimiento" required>
        
                        <label><i class="fa-solid fa-venus-mars icon"></i></i>Género: </label>
                        <input type="text" name="txtgenero" placeholder="Ingrese su género" required>
            
                        <label><i class="fa-solid fa-phone icon"></i>Teléfono: </label>
                        <input type="number" name="txttelefono" placeholder="Ingrese su teléfono" required>
            
                        <label><i class="fa-solid fa-map-location icon"></i>Dirección: </label>
                        <input type="text" name="txtdireccion" placeholder="Ingrese su dirección" required>

                        <label><i class="fa-solid fa-hand-holding-droplet icon"></i>Tipo de sangre: </label>
                        <input type="text" name="txtsangre" placeholder="Ingrese su tipo de sangre" required>
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
                        <th>Fecha de nacimiento</th>
                        <th>Género</th>
                        <th>Teléfono</th>
                        <th>Dirección</th>
                        <th>Tipo de sangre</th>
                    </tr>
                    <?php
                        $obj =  new metodos();
                        $sql = "SELECT idPaciente, nombre, apellido, fechaNacimiento, genero, telefono, direccion, tipoDeSangre FROM PACIENTES";
                        $datos = $obj->mostrarDatos($sql);
                        foreach($datos as $key){
                    ?>
                    <tr>
                        <td><strong><?php echo $key['idPaciente']; ?></strong></td>
                        <td><?php echo $key['nombre']; ?></td>
                        <td><?php echo $key['apellido']; ?></td>
                        <td><?php echo $key['fechaNacimiento']; ?></td>
                        <td><?php echo $key['genero']; ?></td>
                        <td><?php echo $key['telefono']; ?></td>
                        <td><?php echo $key['direccion']; ?></td>
                        <td><?php echo $key['tipoDeSangre']; ?></td>
                        <td><a class="editar"href="editarP.php?id=<?php echo $key['idPaciente']; ?>"><i class="fa-solid fa-pen-to-square"></i></a></td>
                        <td><a class="eliminar"href="procesos/eliminarP.php?id=<?php echo $key['idPaciente']; ?>"><i class="fa-solid fa-circle-xmark"></i></a></td>
                    </tr>
                    <?php
                        }
                    ?>
                </table>
            </div>
        </div>
    </div>
    <script>
        document.querySelector('input[type="date"').addEventListener('dblclick', (event) => {
        event.preventDefault(); // Bloquea el doble clic por completo
        });
    </script>
</body>
</html>