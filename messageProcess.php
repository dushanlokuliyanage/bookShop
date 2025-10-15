<?php

include "connection.php";

$firstName = $_POST['n'];
$email = $_POST['e'];
$textarea = $_POST['t'];

echo($firstName);

// Database::iud("INSERT INTO 'user'('firstName','email','message')VALUES ('".$firstName."','".$email."','".$textarea."')");
// var_dump($firstName);
// echo ("success"); 0775350551


?>