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

</body>
</html>