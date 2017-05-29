  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!-- My first project begins! -->
<!DOCTYPE html>
<html lang="es">
<head>
  <title>TV Fuego S.A. - Inventario</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  
 <style type="text/css">
/* Add a black background color to the top navigation */
.topnav {
    background-color: #333;
    overflow: hidden;
    border: none;
}

/* Style the links inside the navigation bar */
.topnav a {
    float: left;
    display: block;
    color: #f2f2f2;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    font-size: 14px;
    border: none;

}

/* Change the color of links on hover */
.topnav a:hover {
    background-color: #ff4d4d;
    color: black;
    border: none;

}

/* Add a color to the active/current link */
.topnav a.active {
    background-color: #4CAF50;
    color: white;
    border: none;
}

/* Animación de barra */
.navbar {
    -webkit-animation-duration: 90s;
    animation-duration: 90s;
    animation-iteration-count: infinite;
}

/* estilo de las tablas */
/*.margins{
	margin-top: 60px;
	text-align: center;
    border: none;
	border-collapse: collapse;
    width: 50%;
    text-align: left;
    font-family: Helvetica;
    
    
}*/

.tablex{
	display: table;
	text-align: center;
	padding:5px;
	width: 65%;
	background-color: #ff8d8d;
	border: none;
	height: 20px;
	font-size: 16px;
	text-align: left;
    font-family: "Helvetica";

}

  body {
      font-size: 15px;
      color: #343d44;
      font-family: "segoe-ui", "open-sans", tahoma, arial;
      padding: 0;
      margin: 0;
    }
    table {
      margin: auto;
      font-family: "Helvetica";
      font-size: 10px;
    }

    h1 {
      margin: 25px auto 0;
      text-align: center;
     
      font-size: 17px;
    }

    table td {
      transition: all .5s;
    }
    
    /* Table */
    .data-table {
      border-collapse: collapse;
      font-size: 12px;
      min-width: 537px;
      font: black;
    }

    .data-table th, 
    .data-table td {
      border: 1px solid #e1edff;
      padding: 7px 17px;
    }
    .data-table caption {
      margin: 7px;
    }

    /* Table Header */
    .data-table thead th {
      background-color: #ff8d8d;
      color: #ff8d8d;
      border-style: none;
      color: white;
      
    }

    /* Table Body */
    .data-table tbody td {
      color: #ff8d8d;
    }
    .data-table tbody td:first-child,
    .data-table tbody td:nth-child(4),
    .data-table tbody td:last-child {
      text-align: right;
    }

    .data-table tbody tr:nth-child(odd) td {
      background-color: #ff8d8d;
    }
    .data-table tbody tr:hover td {
      background-color: #ff8d8d;
      border-color: #ff8d8d;
    }

    /* Table Footer */
    .data-table tfoot th {
      background-color: #ff8d8d;
      text-align: right;
    }
    .data-table tfoot th:first-child {
      text-align: left;
    }
    .data-table tbody td:empty
    {
      background-color: #ff8d8d;
    }

</style>

<div class="topnav navbar" id="myTopnav">
  <a href="#home">Home</a>
  <a href="#load">Cargar</a>
  <a href="#delete">Eliminar</a>
  <a href="#query">Consultar</a>
</div>
<div align="center"><img src="https://www.foromedios.com/uploads/monthly_2016_04/tvfuego.jpg.7b5b19d1401746deec5cec7595a08b4e.jpg"></div>

<div align="center" style="font-size: 20px">
<form>
	<h2 style="font-size: 18px"> Inventario
	<input type="text" name="search">
	<button style="text-align: center">Buscar</button>

	</h2>

</form>
</div>


<?php
$conn = mysqli_connect("127.0.0.1", "root", "casas", "tvfuego");

if (!$conn) {
    echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
    
    exit;
}

$sql = mysqli_query($conn,"SELECT * FROM sector");

echo "<table border='1'>";

$i = 0;
while($row = $sql->fetch_assoc())
{
    if ($i == 0) {
      $i++;
      echo "<tr>";
      foreach ($row as $key => $value) {
        echo "<th>" . $key . "</th>";
      }
      echo "</tr>";
    }
    echo "<tr>";
    foreach ($row as $value) {
      echo "<td>" . $value . "</td>";
    }
    echo "</tr>";
}
echo "</table>";
mysqli_close($conn);
?>


<!-- 

TABLA sin BDD

<div align="center" class="row">
  <div  class="tablex">
    <div class="col-xs-2"> Objeto</div>
    <div class="col-xs-2"> Descripción</div>
    <div class="col-xs-2"> Sector</div>
    <div class="col-xs-2"> Estado</div>
    <div class="col-xs-2"> Fecha retiro</div>
  </div>
</div> 








 -->










</body>
</html>
