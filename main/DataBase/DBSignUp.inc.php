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
    
    try{
        $stm = $conn->prepare("INSERT INTO log (name, email, password) VALUES (:name, :email, :pw)");
        $stm->bindParam(':name', $name);
        $stm->bindParam(':email', $email);
        $stm->bindParam(':pw', $password);
        $stm->execute();
    
        if( $stm->rowCount() == 1){
            header("Location:./DBLog.inc.php?sc=1");
        } else{
            header("Location:./DBSignUp.inc.php?er=1");
        }
    } catch(PDOException $e){
        echo "ERROR :".$e->getMessage();
    }
   

?>