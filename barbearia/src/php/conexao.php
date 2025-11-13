<?php
$servername = "localhost";
$username = "root";
$password = "hawer123";
$database = "barbearia";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Erro na conexão: " . mysqli_connect_error());
}
?>