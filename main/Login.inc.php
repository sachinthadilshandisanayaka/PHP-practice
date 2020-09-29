<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="signup">
        <a href="SignUp.inc.php"><button>Sign Up</button></a>
    </div>

    <div class="errors">
        <?php
            if(isset($_REQUEST['er'])){
                if($_REQUEST['er'] == 1){
                    echo "<br><b>Email or password is not matched</b><br>";
                }  elseif($_REQUEST['er'] == 100){
                    echo "<br><b>Sign up successfully</b><br>";
                }
            }
        ?>
    </div>

    <form action="DataBase/DBlog.inc.php" method="POST" id="Form" enctype="multipart/form-data">

        <div class="inputs">
            <label for="email">Email</label>
            <input type="email" name="email" id="">
        </div>
        <div class="inputs">
            <label for="password">Password</label>
            <input type="password" name="password" id="">
        </div>
        <button type="submit">Log In</button>
    </form>
<script>

    var inputs = document.getElementsByTagName('INPUT');

    document.getElementById("Form").addEventListener('submit', (event) => {
        
        if(inputs[0].value.trim() == ""){
            event.preventDefault();
            alert("email is empty");
        }
        if(inputs[1].value.trim() == ""){
            event.preventDefault();
            alert("password is empty");
        }

    });

</script>
</body>
</html>