#<?php
$host = "mysql-mina.alwaysdata.net";
$user = "mina";
$pass = "clase1234";
$db = "mina_gestiondeventas";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
?> 