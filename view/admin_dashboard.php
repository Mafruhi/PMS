<?php
session_start();
echo $_SESSION["user"];
if(!isset($_SESSION['user'])) {
header("location: ../view/login.html");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../view/css/common.css">
    <link rel="stylesheet" href="../view/css/input.css">
    <link rel="stylesheet" href="../view/css/auth.css">
    <link rel="stylesheet" href="../view/css/table.css">
    <style>
         body{
    background-image: url("../images/image2.jpg");
    background-color: #cccccc;
   }
        .top 
        {
            text-align: center;
        }
        .center 
        {
            text-align: center;
        }
    </style>	
</head>
<style>
    body{
        background-image: url("../images/image2.jpg");
        background-color: #cccccc;
       }
    </style>  
<body>
<fieldset>
	<h1 class="top"> PHARMACY MANAGEMENT SYSTEM </h1>
    <hr>
    <form action="../view/Livesearch.html"><input style="width:180px; height:100 px;" type="submit" value="Search"></form>
	<h2 class="top"> Admin Dashboard </h2>
	<br>
    <div class="center">
    <form action="../view/manager_dashboard.php"><input style="width:250px; height:150 px;" type="submit" value="Manage Manager"></form>
    <br>
    </div>
    <div class="center">
    <form action="cashier_dashboard.php"><input style="width:250px; height:150 px;" type="submit" value="Manage Cashier"></form>
    <br>
    </div>
    <div class="center">
    <form action="pharmacists_dashboard.php"><input style="width:250px; height:150 px;" type="submit" value="Manage Pharmacists"></form>
    <br>
    </div>
    <div class="center">
    <form action="medicine_inventory.php"><input style="width:250px; height:150 px;" type="submit" value="Medicine Inventory"></form>
    <br>
    </div>
    <div class="center">
    <form action="pharma_view.html"><input style="width:250px; height:150 px;" type="submit" value="Pharmaceutical Companies"></form>
    <br>
    </div>
    <div class="center">
    <form action="contact.php"><input style="width:250px; height:150 px;" type="submit" value="Contact Us"></form>
    <br>
    <div class="center">
    <form action="../view/logout.php"><input type="submit" value="Logout"> </form>
    <br>
    </div>
</fieldset>
</body>
</html>
<?php
include("footer.php") 
?>