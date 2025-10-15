<?php

include "connection.php";

$firstName = $_POST['n'];
$email = $_POST['e'];
$textarea = $_POST['t'];

Database::iud("INSERT INTO 'user'('firstName','email','message')VALUES ('".$firstName."','".$email."','".$textarea."')");

echo ("success");


?>