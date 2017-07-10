<?php
include 'connection.php';
//include 'load.html';
$cargar = $_GET['load1','load2','load3','load4','load5','load6'];

//INSERT valores del usuario!
$sql2 = "INSERT INTO descripcion (nombre,sector,descripcion,cantidad,categoria,estado) VALUES ('$load1','$load2','$load3','$load4','$load5','$load6');"
$result2 = mysqli_query($conn, $sql2);

if ($conn->multi_query($sql2) === TRUE) {
    echo "Se agregó el nuevo Ítem!";
} else {
    echo "Error: " . $sql2 . "<br>" . $conn->error;
}
else{
	echo "No se agregó el ítem."
}

$conn->close();
?>
