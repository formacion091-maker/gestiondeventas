#<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "tienda_ropa";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
?> Auto detect text files and perform LF normalization
* text=auto