<?php
// Definir las credenciales predefinidas
define("USER", "jos");
define("PASS", "123");

// Inicializar un mensaje de error
$errorMsg = "";

// Comprobar si el formulario fue enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recibir los datos del formulario
    $usuario = $_POST['usuario'];
    $pass = $_POST['pass'];

    // Comprobar si las credenciales son correctas
    if ($usuario == USER && $pass == PASS) {
        // Si las credenciales son correctas, redirigir a otra página 
        header("Location: menu.php");
        exit();
    } else {
        // Si las credenciales son incorrectos, guardar mensaje en la sesión
        session_start();
        $_SESSION['errorMsg'] = "Usuario o contraseña inválidos.";
        header("Location: index.php"); // Redirigir a la misma página
        exit();
    }
}

// Verificar si hay un mensaje de error en la sesión
session_start();
if (isset($_SESSION['errorMsg'])) {
    $errorMsg = $_SESSION['errorMsg'];
    unset($_SESSION['errorMsg']); // Limpiar el mensaje después de mostrarlo
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://kit.fontawesome.com/812c8ee19a.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <form action="index.php" method="post">
            <div class="left">
                <img src="img/form1.svg" alt="Imagen de fondo">
            </div>
            <div class="right">
                <div class="title">
                    <h1>SANAR</h1><i class="fa-solid fa-plus icono1"></i>
                </div>
                <div class="inputs">
                    <div class="text1">
                        <i class="fa-solid fa-user icono2"></i><label>Usuario: </label>
                    </div>
                    <input type="text" name="usuario" placeholder="Ingrese su usuario" class="input1">
                    <div class="text2">
                        <i class="fa-solid fa-lock icono3"></i><label>Contraseña: </label>
                    </div>
                    <input type="password" name="pass" placeholder="Ingrese su contraseña" class="input2">
                </div>
                <div class="button">
                    <input type="submit" value="Iniciar Sesión" class="boton1">
                </div>
            </div>
        </form>
    </div>

    <?php if ($errorMsg != ""): ?>
    <!-- Ventana emergente -->
    <div class="popup-error">
        <div class="popup-content">
            <p><?php echo $errorMsg; ?></p>
            <button id="closePopup">Cerrar</button>
        </div>
    </div>
    <?php endif; ?>
    <script src="js/script.js"></script>
</body>
</html>
