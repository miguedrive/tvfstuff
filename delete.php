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
<div align="center"><img src="http://i.imgur.com/GaTBft2.png" width="210" height="110"></div>

<?php

include 'connection.php';

echo "<table class='table table-striped'>"; 
echo "<thead>";
echo "<td></td>";
echo "<td>Nombre</td>";
echo "<td>Descripción</td>";
echo "<td>Cantidad</td>";
echo "<td>Sector</td>";


$sql = "SELECT nombre,descripcion,cantidad FROM objeto";
$sql2= "SELECT nombres_sector FROM sector";
$result = mysqli_query($conn,$sql);
$res2= mysqli_query($conn,$sql2);

if (mysqli_num_rows($result) > 0) {
    // Cada palabra encontrada se manda a una fila
       while($row = mysqli_fetch_assoc($result) and $row2=mysqli_fetch_assoc($res2)) {
   
echo  
           "
           <tr>
            <td></td>
            <td>".$row['nombre']." </td> 
            <td>".$row['descripcion']."</td>
            <td>".$row['cantidad']."</td>
            <td>".$row2['nombres_sector']."</td>

            <td>
            <form action='del_proc.php' method='get'>
            <input type='hidden' name='nombre' value=".$row['nombre'].">
            <input type='submit' value='X' class='btn-xs btn-danger'>
            ";
           
            echo "
            </form>
            </td>            
            "      ;
         
            echo "</tr></thead>";

    }
} else {
	
    echo "No se encontró ese ítem.";
}

mysqli_close($conn);
?>
