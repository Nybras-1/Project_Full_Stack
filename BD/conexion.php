<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "clima";

// Crear una conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar si hay errores en la conexión
if ($conn->connect_error) {
    die("Error en la conexión a la base de datos: " . $conn->connect_error);
}

// Si no hay errores, la conexión se estableció correctamente
echo "Conexión exitosa a la base de 2233";

// Aquí puedes ejecutar consultas y operaciones en la base de datos

// Cerrar la conexión al finalizar
?>
