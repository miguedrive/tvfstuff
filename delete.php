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
<div align="center"><img src="http://i.imgur.com/GaTBft2.png" width="410" height="170"></div>

<?php

include 'connection.php';

if (!$conn) {
    die("Fallo la conexión: " . mysqli_connect_error());
}

$sql5 = "SELECT * FROM objeto";
$result5 = mysqli_query($conn,$sql5);

echo "<form> 
    <table>"; 
    while ($row5 = mysqli_fetch_array($result5)) { 
        echo  
            "<tr> 
            <td>{$row['ID']}</td> 
            <td>{$row['Sector']}</td> 
            <td>{$row['Nombre']}</td> 
            <td>{$row['Descripción']}</td>
            <td>{$row['Cantidad']}</td>
            <td>{$row['Categoría']}</td>
            <td>{$row['Fecha ingreso']}</td>
            <td>{$row['Estado']}</td>
            <td><input type='checkbox' name='check[".$row['items']."] 
            </tr>"; 
    } echo "</table>
               <input type='submit' name='Submit' value='Submit'>
               </form>"; 

        $checkbox[] = isset($_GET['checkbox']) ? true : false;
    } else {  
        echo '<p align="center" style="margin-top: 20px">Error!</p>'; 
    }  
?>