<?php
include 'conexion.php';
$nombre = $_POST['nombre'];
$rol = $_POST['rol'];
$horas_vuelo = $_POST['horas_vuelo'];
$id_vuelo = $_POST['id_vuelo'];

$sql = "INSERT INTO tripulacion (nombre, rol, horas_vuelo, id_vuelo) VALUES ('$nombre', '$rol', $horas_vuelo, $id_vuelo)";
if ($conn->query($sql) === TRUE) {
    echo "Tripulación registrada.";
} else {
    echo "Error: " . $conn->error;
}
$conn->close();
?>