<?php
    mysqli_connect("127.0.0.1", "root", "casas") or die("Error connecting to database: ".mysqli_error());
    /*
        localhost - it's location of the mysql server, usually localhost
        root - your username
        third is your password
         
        if connection fails it will stop loading the page and display an error
    */
     
    mysqli_select_db("tvfuego") or die(mysqli_error());
    /* tutorial_search is the name of database we've created */
     
     
     
?>