<?php
    $dbName = "test";
    $userName = "root";
    $password = "";

    try{
        $conn = new PDO("mysql:host=localhost;dbname=$dbName",$userName,$password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connection successfully";

    } catch(PDOException $e){
        echo "can not access database";
    }
   
?>
