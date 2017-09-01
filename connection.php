<?php
// MySQL Connection
$servername = "localhost";
$username = "root";
$password = "casas";
$dbname = "tvfuego";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Fallo la conexión: " . mysqli_connect_error());
}
?>