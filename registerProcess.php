<?php
include "pdoConnection.php";

$firstName = $_POST['fname'];
$lastName = $_POST['lname'];
$gmail = $_POST['gmail'];
$password = $_POST['password'];
$pNumber = $_POST['pNumber'];
$address = $_POST['address'];
$gender = $_POST['gender'];
$nic = $_POST['nic'];

$stmt = $conn->prepare("INSERT INTO user(firstName,lastName,gmail,password,pNumber,address,gender,nic)
 VALUES(:firstName, :lastName,:gmail,:password,:pNumber,:address,:gender,:nic)");

$stmt->execute([
    ':firstName' => $firstName,
    ':lastName' => $lastName,
    ':gmail' => $gmail,
    ':password' => $password,
    ':pNumber' => $pNumber,
    ':address' => $address,
    ':gender' => $gender,
    'nic' => $nic
]);

echo "Thank you for you share your Sensitive data With Us !";
header("refresh:2; url=index.php");
