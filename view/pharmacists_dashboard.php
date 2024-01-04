
<?php
$servername = "localhost";
$u = "root";
$p = "";
$dbname = "pmc";
$conn = mysqli_connect($servername, $u, $p, $dbname);
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
// echo "Connected successfully";
$sql = "SELECT * FROM add_pharmacists";
$result = $conn->query($sql);

  

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manager List</title>
    <link rel="stylesheet" href="../view/css/common.css">
    <link rel="stylesheet" href="../view/css/input.css">
    <link rel="stylesheet" href="../view/css/auth.css">
    <link rel="stylesheet" href="../view/css/table.css">

</head>
<style>
    body{
        background-image: url("../images/image2.jpg");
        background-color: #cccccc;
       }
    </style>  
<body>

    <legend>Pharmacists : </legend>
<?php

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      echo '<label >First Name</label>
      <input type ="submit" name ="'.$row["fname"].'" style="width:250px; height:150 px;" type="submit" value = "'.$row["fname"].'"></form>
      ';
      echo '<label >Last Name</label>
      <input type ="submit" name ="'.$row["lname"].'" style="width:250px; height:150 px;" type="submit" value = "'.$row["lname"].'"></form>
      ';
      echo '<label >Username</label>
      <input type ="submit" name ="'.$row["username"].'" style="width:250px; height:150 px;" type="submit" value = "'.$row["username"].'"></form>
      <br>';
    }
  } else {
    echo "0 results";
  }
  $conn->close();

?>
 
    <form action="../controller/add_pharmacists.html"><input type="submit" value="Add Pharmacists"></form>
    <br>
    <form action="..//controller/delete_pharmacists.php"><input type="submit" value="Delete Pharmacists"></form>
    <br>
    <br>

</body>
</html>

