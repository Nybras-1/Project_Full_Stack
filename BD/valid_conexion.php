
<?php
session_start();
include '../BD/conexion.php';

if (isset($_POST['usuarioo']) && isset($_POST['contrasenaa'])) {
    $usuario = $_POST['usuarioo'];
    $contraseña = $_POST['contrasenaa'];

    // Consulta SQL para verificar si el usuario y la contraseña existen en la tabla usuarios
    $sql = "SELECT * FROM usuarios WHERE usuario='$usuario' AND contrasena='$contraseña'";
    $resultado = mysqli_query($conn, $sql);

    // Si se encuentra un registro en la tabla usuarios con el usuario y la contraseña proporcionados, se inicia la sesión
    if (mysqli_num_rows($resultado) > 0) {
        $_SESSION['user'] = $usuario;
        header("Location: ../index.php");
        exit();
    } else {
        header("Location: error.html");
        exit();
    }
}
?>
