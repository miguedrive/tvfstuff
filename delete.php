<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>

<link rel="stylesheet" href="styles.css">

<div class="topnav navbar" id="myTopnav">
  <a href="index.html">Home</a>
  <a href="load.html">Cargar</a>
  <a href="delete.php">Eliminar</a>
  </div>
<div align="center"><img src="http://i.imgur.com/7SDoFD9.png" width="180" height="50"></div>

<h3 align="left"> Eliminar artículo del inventario </h3>

<?php

include 'connection.php';
$sql1 = "SELECT * FROM objeto";
$result = mysqli_query($sql1);

echo "<select name='nombre'>";
while ($row = mysqli_fetch_array($result)) {
    echo "<option value='" . $row['nombre'] ."'>" . $row['descripcion'] ."</option>";
}
echo "</select>";
echo "<h1>test</h1>";
?>