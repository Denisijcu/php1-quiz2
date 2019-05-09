<?php
 //Start the session
 session_start();

 include 'conection.php';




$email = $_POST["email"];
$password = $_POST["password"];

$pass = sha1($password);



$sql = "SELECT * FROM users WHERE email = " . $email  . " and password=" . $pass;
$result = $conn->query($sql);

echo 'El resultado es '.$result;









function redirect($url, $statusCode = 303)
{
   header('Location: ' . $url, true, $statusCode);
   die();
}
?>
