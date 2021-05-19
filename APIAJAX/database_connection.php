<?php

//database_connection.php

// $connect = new PDO("localhost:192.168.0.9;dbname=jessa", "alex", "alex123");

    $servername = "192.168.0.9";
    $username = "alex";
    $password ="alex123";
    $dbname = "jessa";
    
    
    $connect = new mysqli($servername, $username, $password, $dbname);
?>
