<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: ../pages/Login.html");
    exit();
}
?>