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
$nombre = $_GET["nombre"];
include 'connection.php';

$sql = "DELETE $nombre FROM objeto";
$result = mysqli_query($conn,$sql);


if (mysqli_num_rows($result) > 0) {
	print("Elemento eliminado.");
}
else{
	echo "Error";

}


?>