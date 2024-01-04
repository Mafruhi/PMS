
<?php
$servername = "localhost";
$u = "root";
$p = "";
$dbname = "pmc";
// Create connection
$conn = mysqli_connect($servername, $u, $p, $dbname);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
// echo "Connected successfully";
$sql = "SELECT * FROM add_manager";
$result = $conn->query($sql);

  

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manager List</title>

</head>
<body>
<form action = "delete.php"><label >Manager 1</label>
      <input type ="submit" name ="'.$row["fname"].'" style="width:250px; height:150 px;" type="submit" value = "'.$row["fname"].'">
      <input type="submit" id="delete" name="delete" value="Delete"> <br> </form>
    <legend>Manager List : </legend>
<?php

if ($result->num_rows > 0) {
     // output data of each row
     while($row = $result->fetch_assoc()) {
       echo '<form  action = "delete.php"><label >Manager 1</label>
      <input type ="submit" name ="'.$row["fname"].'" style="width:250px; height:150 px;" type="submit" value = "'.$row["fname"].'">
      <input type="submit" id="delete" name="Delete" value="'.$row["fname"].'"> <br> </form>
    <legend>Manager List : </legend>';
     }
  } else {
    echo "0 results";
  }
  $conn->close();
?>