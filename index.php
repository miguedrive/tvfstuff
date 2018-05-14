  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>

<!--Cargo CSS-->

<link rel="stylesheet" href="styles.css">


<!-- My first project begins! -->
<!DOCTYPE html>
<html lang="es">
<head>
  <title>TV Fuego S.A. - Inventario</title>
</head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

<div class="topnav navbar" id="myTopnav">
  <a href="index.php">Home</a>
  <a href="load.html">Cargar</a>
  <a href="delete.php">Eliminar</a>
  </div>
<div align="center"><img src="https://i.imgur.com/t8QFaB9.png" width="120" height="90"></div>

<body>

<div align="center" style="margin-top: 33px">
<form action="search.php" method="get">
 <input type="text"  name="valor" class="form-control" style="width: 420px">
 <div align="center">
 <input type="submit" value="Buscar" class="btn btn-success" style="margin-top: 31px; margin-bottom: 10px"></div>

</form>
</div>
</body>

</html>
<?php

include 'connection.php';

echo "<table class='table table-striped'>";
echo "<thead>";
echo "<td></td>";

echo "<td>Sector</td>";
echo "<td>Nombre</td>";
echo "<td>Descripción</td>";
echo "<td>Cantidad</td>";
echo "<td>Categoría</td>";
echo "<td>Fecha de entrega</td>";
echo "<td>Estado</td>";

$sql = "SELECT * FROM objeto";
$result = mysqli_query($conn,$sql);
$sectores = [' ', 'Sistemas', 'Comercial', 'Contenidos', 'Edicion', 'RRHH', 'Contable', 'Administracion', 'Redes', 'Tecnica', 'Otros' ];
$estados = [' ', 'En uso','disponible'];
$categoria = [' ','Computadoras','Monitores','Impresoras','Telefono IP','Teclados','Mouse','Routers','Switch','Server','Dispositivo externo','Scanner','Parlantes'];

if (mysqli_num_rows($result) >= 0) {

       while($row = mysqli_fetch_assoc($result)) {

echo
           "
           <tr>
            <td></td>

            <td>".$sectores[$row['sector']]."</td>
            <td>".$row['nombre']."</td>
            <td>".$row['descripcion']."</td>
            <td>".$row['cantidad']."</td>
            <td>".$categoria[$row['categoria']]."</td>
            <td>".$row['fecha_entrega']."</td>
            <td>".$estados[$row['estado']]."</td>";
            echo "</tr></thead>";

    }
} else {

    echo "No se encontró ese ítem.";
}

mysqli_close($conn);
?>
