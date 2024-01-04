
<?php
$servername = "localhost";
$u = "root";
$p = "";
$dbname = "pmc";
// Create connection
$conn = mysqli_connect($servername, $u, $p, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
// echo "Connected successfully";
$sql = "SELECT * FROM medicine_inventory";
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

    <legend>Medicine List : </legend>
<?php

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      echo '<label >Medicine Name</label>
      <input type ="submit" name ="'.$row["name"].'" style="width:250px; height:150 px;" type="submit" value = "'.$row["name"].'"></form>
      ';
      echo '<label >Medicine Price</label>
      <input type ="submit" price ="'.$row["price"].'" style="width:250px; height:150 px;" type="submit" value = "'.$row["price"].'"></form>
      <br>';

    }
  } else {
    echo "0 results";
  }
  $conn->close();

?>
 
    <form action="../view/add_medicine.html"><input type="submit" value="Add Medicine"></form>
    <br>
    <br>

</body>
</html>

