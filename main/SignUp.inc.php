<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <section class="login">
        <a href="Login.inc.php"><button>LogIn</button></a>
    </section>

    <div class="errors">
        <?php
            if(isset($_REQUEST['er'])){
                if($_REQUEST['er'] == 1){
                    echo "<br><b>Sign up error</b><br>";
                }  elseif($_REQUEST['er'] == 2){
                    echo "<br><b>Email is already used</b><br>";
                }
            }
        ?>
    </div>

    <form action="DataBase/DBSignUp.inc.php" method="POST" enctype="multipart/form-data" id="Form">

        <div class="inputs">
            <label for="name">Name</label>
            <input type="text" name="name" id="">
        </div>
        <div class="inputs">
            <label for="email">Email</label>
            <input type="email" name="email" id="">
        </div>
        <div class="inputs">
            <label for="password">Password</label>
            <input type="password" name="password" id="password">
        </div>
        <div class="inputs">
            <label for="Conformpassword">Conform password</label>
            <input type="password" name="Cpassword" id="Cpassword">
        </div>
        <button type="submit">Sing Up</button>
    </form>
    <script>
        document.getElementById('Form').addEventListener('submit', (event) => {
            var pw = document.getElementById("password");
            var cPw = document.getElementById("Cpassword");
            var inputs = document.getElementsByTagName('INPUT');

            if (pw.value != cPw.value){
                event.preventDefault();
                alert ("password not match");
            }
            if(inputs[0].value.trim() == ""){
                event.preventDefault();
                alert("name is required");
            }
            if(inputs[1].value.trim() == ""){
                event.preventDefault();
                alert("email is required");
            }
            if(inputs[2].value.trim() == ""){
                event.preventDefault();
                alert("password is required");
            }
            if(inputs[3].value.trim() == ""){
                event.preventDefault();
                alert("conform password is required");
            }

        });
    </script>
</body>
</html>