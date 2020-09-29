<?php
try{
    $conn = new PDO("mysql:host=localhost;dbname=test","root","");
    echo "connected";

} catch(PDOException $e) {
    echo "ERROR".$e->getMessage();
}
    $email = trim($_REQUEST['email']);
    $pw = md5(trim($_REQUEST['password']));

    try {
        $stm = $conn->prepare("SELECT * FROM log WHERE email=:em AND password=:pw");
        $stm->bindParam(':em', $email);
        $stm->bindParam(':pw', $pw);
        $stm->execute();

        if($stm->rowCount() == 1){
            echo "Log in successfully<br>";
        } else {
            echo $pw;
            // header("Location: ../Login.inc.php?er=1");
        }

    } catch(PDOException $e){
        echo "ERROR:: ".$e->getMessage();
    }
    
?>