#<?php
$host = "mina.alwaysdata.net";
$user = "mina";
$pass = "mina1987";
$db = "mina_gestiondeventas";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
?> Auto detect text files and perform LF normalization
* text=auto