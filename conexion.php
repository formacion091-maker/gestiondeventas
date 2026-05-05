#<?php
$host = "mina.alwaysdata.net";
$user = "mina";
$pass = "josselin1234";
$db = "mina_gestiondeventas";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
?> Auto detect text files and perform LF normalization
* text=auto