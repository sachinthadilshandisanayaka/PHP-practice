<?php
    require 'db.inc.php';

    $file = $_FILES['file1'];
    $fileName = $_FILES['file1']['name'];
    $fileTempName = $_FILES['file1']['tmp_name'];
    $fileType = $_FILES['file1']['type'];
    $fileError = $_FILES['file1']['error'];
    $fileSize = $_FILES['file1']['size'];

    $allowed = array("jpg", "png", "jpeg");
    $fileActualExt = strtolower(end(explode(".", $fileName)));
    $attachment = uniqid('', true).".".$fileActualExt;

    $name = trim($_REQUEST['name']);
    $email = trim($_REQUEST['email']);
    $code = trim($_REQUEST['telephone']);
    $tele = trim($_REQUEST['number']);
    $message = trim($_REQUEST['message']);

    try {
        $stm = $conn->prepare("INSERT INTO user (name, email, countryCode, telephone, message, attachment)
        VALUES (:name, :email, :code, :tele, :message, :attachment)");
    
        $stm->bindParam(':name', $name);
        $stm->bindParam(':email', $email);
        $stm->bindParam(':code', $code);
        $stm->bindParam(':tele', $tele);
        $stm->bindParam(':message', $message);
        $stm->bindParam(':attachment', $attachment);
        $stm->execute();

        if($stm->rowCount() == 1){

            $fileDerection = "upload/".$attachment;
            move_uploaded_file($fileTempName, $fileDerection);
            header("Location:./FormTest.inc.php?er=1"); 
        }

    } catch (Exception $e){

        echo $e->getMessage();
    }
   

?>