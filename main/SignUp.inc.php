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

    <form action="POST" enctype="multipart/form-data" id="Form">

        <div class="inputs">
            <label for="name">Name</label>
            <input type="text" name="name" id="">
        </div>
        <div class="inputs">
            <label for="email">Email</label>
            <input type="email" name="emal" id="">
        </div>
        <div class="inputs">
            <label for="password">Password</label>
            <input type="password" name="password" id="">
        </div>
        <div class="inputs">
            <label for="Conformpassword">Conform password</label>
            <input type="password" name="Cpassword" id="">
        </div>

    </form>
    
</body>
</html>