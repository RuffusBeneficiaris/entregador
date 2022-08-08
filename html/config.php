<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "projeto_heitor";
    //create connection
    $conn = mysqli_connect ($servername, $username, $password, $database);
    //check conn
    if(!$conn) 
       die ("Falha na conexão.");

    
    //echo "Conexão bem sucedida.";
   
?>  