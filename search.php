  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>

<!--Cargo CSS-->

<link rel="stylesheet" href="styles.css">


<?php
//TODO ESTO FUNCIONA! Es JS
// $link = mysqli_connect("localhost", "root", "casas", "tvfuego");
 
// // Check conección a tvf
// if($link === false){
//     die("ERROR! No se puede conectar a la base de datos! :(" . mysqli_connect_error());
// }
 
// if(isset($_REQUEST['term'])){
//     // Consulta a la descripcion de nuestro objeto
//     $sql = "SELECT * FROM objeto WHERE descripcion LIKE ?";
    
//     if($stmt = mysqli_prepare($link, $sql)){
//         // Bind variables to the prepared statement as parameters
//         mysqli_stmt_bind_param($stmt, "s", $param_term);
        
//         // Set parameters
//         $param_term = $_REQUEST['term'] . '%';
        
//         // check query
//         if(mysqli_stmt_execute($stmt)){
//             $result = mysqli_stmt_get_result($stmt);
            
//             // Check number of rows in the result set
//             if(mysqli_num_rows($result) > 0){
//                 // Fetch result rows as an associative array
//                 while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
//                     echo "<p>" . $row["descripcion"] . "</p>";
//                 }
//             } else{
//                 echo "<p>No se encontró el objeto!</p>";
//             }
//         } else{
//             echo "ERROR: No se pudo hacer la consulta $sql. " . mysqli_error($link);
//         }
//     }
     
//     // Close statement
//     mysqli_stmt_close($stmt);
// }
 
// // close connection
// mysqli_close($link);

//SOLO PHP

include 'connection.php';
// Check connection
if (!$conn) {
    die("Fallo la conexión: " . mysqli_connect_error());
}

?>

<div class="topnav navbar" id="myTopnav">
  <a href="index.html">Home</a>
  <a href="load.html">Cargar</a>
  <a href="#delete">Eliminar</a>
  </div>
<div align="center"><img src="http://i.imgur.com/GaTBft2.png" width="410" height="170"></div>

<?php
$sql = "SELECT * FROM objeto WHERE descripcion LIKE '%{$valor}%'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // Cada palabra encontrada se manda a una fila
   
    while($row = mysqli_fetch_assoc($result)) {
    	
    	echo " " . $row["nombre"]. " " . $row["descripcion"]. "<br>";
    }



} else {
    echo "No se encontró ese ítem.";
}

mysqli_close($conn);
?>






 