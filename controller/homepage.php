<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../view/css/style.css">
    <title>LOGIN</title>
<style>
body{
    background-image: url("../images/image5.jpg");
    background-color: #cccccc;
   }
</style>  
</head>
<body>

    <br><br><br><br><br><br>
    <fieldset>
    <div class="center">
        <form action="../view/login.html" method="POST" style="display: inline-block;" >  
            <h1 class="top"> PHARMACY MANAGEMENT SYSTEM </h1>
            <hr>
            <br><br>
            <h2 class="top"> WELCOME </h2>
            <hr>
        <div>

        <h3 class="top"><a href="../view/login.html">Login</a></h3>
        <h2><a> Or </a></h2>
        <h3 class="top"><a href="../view/registration.html">Registration</a></h3>
</div>
    </fieldset>
    <?php
    echo "<b> Name : </b>" . $_SESSION["user"] . "<br>";
?>
</body>
<html>
<?php
include("../view/footer.php") 
?>

