<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link rel="stylesheet" href="DisplayData.css" type="text/css">
    <title>Document</title>
</head>
<body>

<?php
    require '../db.inc.php';

    try {
        $stm = $conn->prepare("SELECT * FROM user");
        $stm->execute();
        $result = $stm->setFetchMode(PDO::FETCH_ASSOC);
        $result = $stm->fetchAll();

        echo "<section class=\"displayitems\">";
        if(sizeof($result) != 0){
            foreach($result as $row){
                echo "<div class=\"item\">";
                    echo "<div class=\"image\"><img src=\"../upload/".$row['attachment']."\"></div>";
                    echo "<p>".$row['name']."</p>";
                    echo "<p>".$row['email']."</p>";
                    echo "<p>".$row['birthday']."</p>";
                    echo "<p>".$row['countryCode']." - ".$row['telephone']."</p>";
                    echo "<p>".$row['message']."</p>";
                echo "</div>";
            }
        } else{
            echo "<div> no data </div>";
        }
       echo "</section>";

    } catch(PDOException $e){
        echo "Error :".$e->getMessage();
    }
   
?>
    <button class="scrollUp" id="scroll" ><i class='fas fa-arrow-alt-circle-up' onclick="scrolltop()"></i></button>

    <script>
        window.onscroll = function() {scroll()};

        function scroll(){
            if( document.body.scrollTop > 50 || document.documentElement.scrollTop > 50){
                document.getElementById("scroll").style.display= "block";
            } else{
                document.getElementById("scroll").style.display= "none";
            }
        }
        function scrolltop(){
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
       
    </script>
    
</body>
</html>
