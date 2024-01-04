<?php

$name = $price = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = validate($_POST["name"]?? "");
  $price = validate($_POST["price"]?? "");
}

function validate($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
$isValidate = true;
if ($name == "") 
{
  echo "Name Required <br>";
  $isValidate = false;
}
if ($price == "") 
{
  echo "Price Required <br>";
  $isValidate = false;
}

  if ($isValidate) {
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
    //echo "Connected successfully";
    
    // $string = file_get_contents("../db/admin.json");
    // $json_a = json_decode($string, true);
    //$isLogin = false;
    // foreach ($json_a as  $value) {
    //   if ($value["username"] == $username && $value["password"] == $password) 
    //   {
    //     setcookie("user", json_encode($value), time() + (86400 * 30) , "/",);
    //     $isLogin = true;
    //     break;
    //   }
    // }
    $sql = "INSERT INTO medicine_inventory VALUES ('$name', '$price');";
  
    //echo $sql;
    $result = $conn->query($sql);
    //var_dump ($result);
    $row = $result->fetch_assoc();
    
//   echo "First Name : $fname <br><br>";
//   echo "Last Name : $lname <br><br>";
//   echo "Gender : $gender <br><br>";
//   echo "Date Of Birth : $dob <br><br>";
//   echo "religion : $religion <br><br>"; 
//   echo "praddress: $praddress <br><br>";
//   echo "pmaddress: $pmaddress <br><br>";
//   echo "phone: $phone <br><br>";
//   echo "email: $email <br><br>";
//   echo "website: $website <br><br>";
//   echo "username: $username <br><br>";
//   echo "password: $password <br><br<";
//   echo "confirmpassword: $confirmpassword <br><br<";
}

?>