<?php
include 'conexion.php';
$origen = $_POST['origen'];
$destino = $_POST['destino'];
$fecha = $_POST['fecha'];
$hora = $_POST['hora'];
$capacidad = $_POST['capacidad'];

$sql = "INSERT INTO vuelos (origen, destino, fecha, hora, capacidad) VALUES ('$origen', '$destino', '$fecha', '$hora', $capacidad)";
if ($conn->query($sql) === TRUE) {
    echo "Vuelo registrado correctamente.";
} else {
    echo "Error: " . $conn->error;
}
$conn->close();
?>