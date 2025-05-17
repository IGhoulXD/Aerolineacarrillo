<?php
include 'conexion.php';
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

$sql = "INSERT INTO usuarios (nombre, correo, password) VALUES ('$nombre', '$correo', '$password')";
if ($conn->query($sql) === TRUE) {
    echo "Usuario registrado correctamente.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>