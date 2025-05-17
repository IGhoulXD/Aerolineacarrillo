<?php
include 'conexion.php';
$id_usuario = $_POST['id_usuario'];
$id_vuelo = $_POST['id_vuelo'];
$asientos = $_POST['asientos'];

$sql = "INSERT INTO reservas (id_usuario, id_vuelo, asientos) VALUES ($id_usuario, $id_vuelo, $asientos)";
if ($conn->query($sql) === TRUE) {
    echo "Reserva realizada con éxito.";
} else {
    echo "Error en la reserva: " . $conn->error;
}
$conn->close();
?>