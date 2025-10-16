<?php

session_start();
include "pdoConnection.php";

$firstName = $_POST['fname'];
$lastName = $_POST['lname'];
$gmail = $_POST['gmail'];
$password = $_POST['password'];
$pNumber = $_POST['pNumber'];
$address = $_POST['address'];
$gender = $_POST['gender'];
$nic = $_POST['nic'];

// --- Validation section ---

$errors = [];

if (empty($firstName)) $errors[] = "First name is required.";
if (empty($lastName)) $errors[] = "Last name is required.";
if (empty($gmail)) $errors[] = "Email is required.";
elseif (!filter_var($gmail, FILTER_VALIDATE_EMAIL)) $errors[] = "Invalid email format.";

if (empty($password)) $errors[] = "Password is required.";
elseif (strlen($password) < 6) $errors[] = "Password must be at least 6 characters long.";

if (empty($pNumber)) $errors[] = "Phone number is required.";
elseif (!preg_match('/^[0-9]{10}$/', $pNumber)) $errors[] = "Phone number must be 10 digits.";

if (empty($address)) $errors[] = "Address is required.";
if (empty($gender)) $errors[] = "Gender is required.";

if (empty($nic)) $errors[] = "NIC is required.";
elseif (!preg_match('/^[0-9]{9}[VvXx]?$|^[0-9]{12}$/', $nic)) $errors[] = "Invalid NIC format.";

// --- If validation fails ---
if (!empty($errors)) {
    foreach ($errors as $error) {
        // echo "<p style='color:red;'>$error</p>";
        $_SESSION['error'] = $error;
        header("Location: register.php");
        exit();
    }
    // echo "<a href='index.php'>Go Back</a>";
    // exit;
} else {

    $stmt = $conn->prepare("INSERT INTO user(firstName,lastName,gmail,password,pNumber,address,gender,nic) VALUES(:firstName, :lastName,:gmail,:password,:pNumber,:address,:gender,:nic)");
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

    // echo "<h2 style='color:green;> Thank you for you share your Sensitive data With Us ! </h2>";
    // header("refresh:2; url=index.php");

    $_SESSION['success'] = "Thank you for you share your Sensitive data With Us !";
    //  header("refresh:2; url=index.php");
    exit();
};
