<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="wnameth=device-wnameth, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
    <title>Document</title>
</head>
<body>
<header><?php
    include("header.php");
    ?>
</header>
<h1 name="Überschrift"> Registration Form</h1>
<h2 name="Registrierung"> Please register yourself here</h2>
<br>
<form name = "register" method="post" action="/register.php">
    <div class="col-md-2 offset-md-5">
        <div class="form-group">
            <label for="Title">Title</label>
            <input type="name" class="form-control" name="Title" placeholder="Title">
        </div>
        <div class="form-group">
            <label for="FirstName">First Name</label>
            <input type="name" class="form-control" name="FirstName" placeholder="First Name">
        </div>
        <div class="form-group">
            <label for="LastName">Last Name</label>
            <input type="name" class="form-control" name="LastName" placeholder="Last Name">
        </div>
        <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" class="form-control" name="email" placeholder="Enter email">
        </div>
        <div class="form-group">
            <label for="userName">Username</label>
            <input type="name" class="form-control" name="userName" placeholder="Username">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" name="password" placeholder="Password">
        </div>
        <div class="form-group">
            <label for="passwordCheck">Repeat password</label>
            <input type="password" class="form-control" name="passwordCheck" placeholder="Password">
        </div>
        <br>
        <input type="submit" class="btn btn-primary" value="Submit">
        <br><br><a href="loginscreen.php">Already have an account? Click here</a>
    </div>
</form>
<footer><?php
    include('footer.php');
    ?>
</footer>
</body>
</html>
