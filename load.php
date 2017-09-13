  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>

<!--Cargo CSS-->

<link rel="stylesheet" href="styles.css">

<div class="topnav navbar" id="myTopnav">
  <a href="index.html">Home</a>
  <a href="load.html">Cargar</a>
  <a href="delete.php">Eliminar</a>
  </div>
<div align="center"><img src="http://i.imgur.com/GaTBft2.png" width="410" height="170"></div>

<?php

include 'connection.php';

$cargar1 = $_GET['load1'];
$cargar2 = $_GET['load2'];
$cargar3 = $_GET['load3'];
$cargar4 = $_GET['load4'];
$cargar5 = $_GET['load5'];
$cargar6 = $_GET['load6'];


//INSERT valores del usuario!
$sql = "INSERT INTO objeto (nombre,sector,descripcion,cantidad,categoria,estado) VALUES ('$cargar1','$cargar2','$cargar3','$cargar4','$cargar5','$cargar6')";

$result = mysqli_query($conn,$sql);

echo "done";
mysqli_close($conn);

?>
