  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>

<!-- My first project begins! -->
<!DOCTYPE html>
<html lang="es">
<head>
  <title>TV Fuego S.A. - Inventario</title>
</head>
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
   .bort{
    border-style: solid;
    border-width: 1px;
    border-color: black;
   }
    body{
        font-family: Arail, sans-serif;
    }
    /* Formatting search box */
    .search-box{
        width: 300px;
        position: relative;
        display: inline-block;
        font-size: 14px;
    }
    .search-box input[type="text"]{
        height: 32px;
        padding: 5px 10px;
        border: 1px solid #CCCCCC;
        font-size: 14px;
    }
    .result{
        position: absolute;        
        z-index: 999;
        top: 100%;
        left: 0;
    }
    .search-box input[type="text"], .result{
        width: 100%;
        box-sizing: border-box;
    }
    /* Formatting result items */
    .result p{
        margin: 0;
        padding: 7px 10px;
        border: 1px solid #CCCCCC;
        border-top: none;
        cursor: pointer;
    }
    .result p:hover{
        background: #f2f2f2;
    }

</style>

<div class="topnav navbar" id="myTopnav">
  <a href="#home">Home</a>
  <a href="#load">Cargar</a>
  <a href="#delete">Eliminar</a>
  <a href="#query">Consultar</a>
</div>
<div align="center"><img src="https://www.foromedios.com/uploads/monthly_2016_04/tvfuego.jpg.7b5b19d1401746deec5cec7595a08b4e.jpg"></div>


<script type="text/javascript">
$(document).ready(function(){
    $('.search-box input[type="text"]').on("keyup input", function(){
        /* Get input value on change */
        var inputVal = $(this).val();
        var resultDropdown = $(this).siblings(".result");
        if(inputVal.length){
            $.get("backend-search.php", {term: inputVal}).done(function(data){
                // Display the returned data in browser
                resultDropdown.html(data);
                
            });
        } else{
            resultDropdown.empty();
        }
    });
    
    // Set search input value on click of result item
    $(document).on("click", ".result p", function(){
        $(this).parents(".search-box").find('input[type="text"]').val($(this).text());
        $(this).parent(".result").empty();
    });
});
</script>
</head>
<body>
<div align="center">
  
   <div class="search-box">
        <input type="text" autocomplete="off" placeholder="Buscar en inventario"/>
        <div class="result"></div>
        
    </div>
</div> 




</body>
</html>



















