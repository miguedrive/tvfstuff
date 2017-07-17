<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>

<!--Cargo CSS-->

<link rel="stylesheet" href="styles.css">

<div class="topnav navbar" id="myTopnav">
  <a href="index.html">Home</a>
  <a href="load.html">Cargar</a>
  <a href="delete.html">Eliminar</a>
  </div>
<div align="center"><img src="http://i.imgur.com/GaTBft2.png" width="310" height="170"></div>

<?php
$valor = $_GET["valuelist"];
include 'connection.php';
// Check connection
if (!$conn) {
    die("Fallo la conexión: " . mysqli_connect_error());
}

$sqlDEL = mysqli_query("SELECT * FROM objeto");
echo "<select>";
while ($sqlDEL = mysqli_fetch_array($sqlDEL)){
	echo '<option   value=\"'.$objetos_array[0].'">'.$objetos_array[0].'</option>';
}
echo "</select>";
}




?>

