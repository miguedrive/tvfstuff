<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>

<!--Cargo CSS-->

<link rel="stylesheet" href="styles.css">
<div class="topnav navbar" id="myTopnav">
  <a href="index.php">Home</a>
  <a href="load.html">Cargar</a>
  <a href="delete.php">Eliminar</a>
  </div>
<div align="center"><img src="https://i.imgur.com/t8QFaB9.png" width="310" height="170"></div>

<?php
include 'connection.php';
$nombre = $_GET["nombre"];
$refreshURL = "delete.php";


$sql = "DELETE FROM objeto WHERE  nombre LIKE '%{$nombre}%'";
$result = mysqli_query($conn,$sql);

echo "Se eliminó exitosamente el objeto";




?>
