<?php

require 'conection.php';

$Email = "'" . $_GET["email"] . "'";
$Pass = "'" . sha1($_GET["password"]) . "'";

if ($Pass=''){return;}

$sql = "insert into users (email,password) values ($Email, $Pass)";
$result = $conn->query($sql);


$_SESSION["email"] = $_GET["email"];

redirect('login.php');

function redirect($url, $statusCode = 303)
{
   header('Location: ' . $url, true, $statusCode);
   die();
}


?>