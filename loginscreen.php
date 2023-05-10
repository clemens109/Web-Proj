<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="../backend/style.css">
    <title>Document</title>
</head>
<body>
<header><?php
    include("header.php");
    ?>
</header>
<h1 id="Überschrift"> Login Form</h1>
<h2 id="Registrierung"> Please login here</h2>
<br>
<form method="post" action="../backend/login.php">
    <div class="col-md-2 offset-md-5">
        <div class="form-group">
            <label for="userName">Username</label>
            <input class="form-control" name="userName" placeholder="Username" type="name">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" name="password" placeholder="Password">
        </div>
        <br>
        <input type="submit" class="btn btn-primary" value="Submit">
        <br><br><a href="loginscreen.php">New to this page? Click here</a>
    </div>
</form>
<footer><?php
    include('footer.php');
    ?>
</footer>
</body>
</html>
