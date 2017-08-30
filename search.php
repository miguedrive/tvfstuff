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
$valor = $_GET["valor"];
include 'connection.php';
// Check connection
if (!$conn) {
    die("Fallo la conexión: " . mysqli_connect_error());
}

//agregado 19/7

echo "<table class='table table-striped'>"; 
echo "<thead>";
echo "<td></td>";
echo "<td>ID</td>";
echo "<td>Sector</td>";
echo "<td>Nombre</td>";
echo "<td>Descripción</td>";
echo "<td>Cantidad</td>";
echo "<td>Categoría</td>";
echo "<td>Fecha de entrega</td>";
echo "<td>Estado</td>";

$sql = "SELECT * FROM objeto WHERE descripcion LIKE '%{$valor}%'";
$result = mysqli_query($conn,$sql);

if (mysqli_num_rows($result) > 0) {
    // Cada palabra encontrada se manda a una fila
       while($row = mysqli_fetch_assoc($result)) {
        //agregado 19/7
    	
    	//echo " " . $row["nombre"]. " " . $row["descripcion"]. "<br>";
echo  
           "
           <tr>
            <td></td>
            <td>".$row['id']."</td> 
            <td>".$row['sector']."</td> 
            <td>".$row['nombre']."</td> 
            <td>".$row['descripcion']."</td>
            <td>".$row['cantidad']."</td>
            <td>".$row['categoria']."</td>
            <td>".$row['fecha_entrega']."</td>
            <td>".$row['estado']."</td>";
            echo "</tr></thead>";

    }
} else {
	
    echo "No se encontró ese ítem.";
}

mysqli_close($conn);
?>






 