<?php
session_start();

$username = $password = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = validate($_POST["username"]);
  $password = validate($_POST["password"]);
}
function validate($data)
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
$isValidate = true;
if ($username == "") {
  echo "username is required <br>";
  $isValidate = false;
}
if ($password == "") {
  echo "password is required <br>";
  $isValidate = false;
}
if ($isValidate) {

  $string = file_get_contents("db/admin.json");
  $json_a = json_decode($string, true);
  $isLogin = false;
  foreach ($json_a as  $value) {
    if ($value["username"] == $username && $value["password"] == $password) 
    {
      setcookie("user", json_encode($value), time() + (86400 * 30) , "/",);
      $isLogin = true;
      break;
    }
  }

  if (!$isLogin) {
    echo "username or password is incorrect";
  } else {
    $_SESSION["username"] = $username;
    header("location: admin_dashboard.html");
  }
}
