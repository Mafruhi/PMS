<?php

// var_dump ($_REQUEST);
echo $_REQUEST['Delete'];
echo "<br>";

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
$uname = $_REQUEST["Delete"];
// sql to delete a record
$sql = "DELETE FROM add_manager WHERE fname='$uname'";
$sql = "DELETE FROM add_pharmacists WHERE fname='$uname'";
$sql = "DELETE FROM add_cashier WHERE fname='$uname'";
$sql = "DELETE FROM medicine_inventory WHERE fname='$uname'";
echo $sql;

if (mysqli_query($conn, $sql)) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . mysqli_error($conn);
}
// header("location: ../view/admin_dashboard.php");
mysqli_close($conn);
?>
