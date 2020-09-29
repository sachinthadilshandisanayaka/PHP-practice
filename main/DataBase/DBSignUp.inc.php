<?php
try{
    $conn = new PDO("mysql:host=localhost;dbname=test","root","");
    echo "connected";

}catch(PDOException $e){
    echo "ERROR ".$e->getMessage();
}
    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $password = $_REQUEST['password'];
    $cPassword = $_REQUEST['Cpassword'];
   

?>