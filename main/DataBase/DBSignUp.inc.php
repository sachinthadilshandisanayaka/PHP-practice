<?php
try{
    $conn = new PDO("mysql:host=localhost;dbname=test","root","");
    echo "connected";

}catch(PDOException $e){
    echo "ERROR ".$e->getMessage();
}
    $name = trim($_REQUEST['name']);
    $email = trim($_REQUEST['email']);
    $password = md5(trim($_REQUEST['password']));
    
    try{
        $stm2 = $conn->prepare("SELECT * FROM log WHERE email=:em");
        $stm2->bindParam(':em', $email);
        $stm2->execute();

        $stm = $conn->prepare("INSERT INTO log (name, email, password) VALUES (:name, :email, :pw)");
        $stm->bindParam(':name', $name);
        $stm->bindParam(':email', $email);
        $stm->bindParam(':pw', $password);
        $stm->execute();
    
        if( $stm->rowCount() == 1){
            header("Location: ../Login.inc.php?sc=1");
        } else{
            header("Location: ../DBSignUp.inc.php?er=1");
        }
    } catch(PDOException $e){
        echo "ERROR :".$e->getMessage();
    }
   

?>