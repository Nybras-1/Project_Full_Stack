<?php
session_start();

include '../BD/conexion.php';

if (isset($_POST['ingresar'])) {
    $user = $_POST['usuarioo'];
    $contra = $_POST['contrasenaa'];
    $contra_enc = base64_encode($contra);
    $error = "";

    // Crear una conexión
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verificar si la conexión tiene errores
    if ($conn->connect_error) {
        die("Error de conexión: " . $conn->connect_error);
    }

    // $consulta = mysqli_query($conn, "SELECT * FROM usuarios WHERE usuario = '$user' AND contrasena = '$contra_enc'");
    $consulta = "SELECT * FROM usuarios WHERE usuario = '$user' AND contrasena = '$contra_enc'";
    $result = $conn->query($consulta);


    /*    $cant = mysqli_num_rows($consulta); */



    // Verificar si se encontró un usuario con las credenciales proporcionadas
    if ($result->num_rows == 1) {
        $_SESSION['usuario'] = $user;
        $_SESSION['contrasenaa'] = $contra_enc;
        $_SESSION['time'] = time();
        // Iniciar sesión o realizar cualquier otra acción necesaria
        //echo "Inicio de sesión exitoso";
        // Redirigir a la página de inicio después del inicio de sesión exitoso
        header('location: ../indexS.html');
        exit();
    } else {
        //header('location:../index.html');
        header('location: ../index.php');
        exit();
    }


    // Cerrar la conexión al finalizar
    $stmt->close();
    $conn->close();
    /*   while ($captura = mysqli_fetch_array($consulta)) {
            $_SESSION['usuario'] = $captura['usuarioo'];
            $_SESSION['contrasenaa'] = $captura['contrasenaa'];
            $_SESSION['time'] = time();
        }

        header('Location: index.php');
        exit();
    } else {
        header('Location: ../PHP/login.php');
        exit();
    } */
}
