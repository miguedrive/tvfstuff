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


<h2 align="center"> Eliminar artículo del inventario </h2>

<?php

include 'connection.php';

$sql = "SELECT * FROM objeto";
$result = mysqli_query($conn,$sql);


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
    while ($row = mysqli_fetch_array($result)) { 
        echo  
           "
           <tr>
           <td><button class='btn btn-xs btn-danger'>
           <img src='http://www.iconsdb.com/icons/preview/white/delete-2-xxl.png' width='10' />
           </button></td>
           	<td>".$row['id']."</td> 
            <td>".$row['sector']."</td> 
            <td>".$row['nombre']."</td> 
            <td>".$row['descripcion']."</td>
            <td>".$row['cantidad']."</td>
            <td>".$row['categoria']."</td>
            <td>".$row['fecha_entrega']."</td>
            <td>".$row['estado']."</td>";

         //   <td><form><input type='checkbox' name='seleccionado' value='".$row['id']."'> 
            echo "</tr></thead>"; 
    }
    echo "</table>";
    
   
    echo "<input type='submit' name='Submit' align='center' value='Eliminar'></form>"; 

        
    