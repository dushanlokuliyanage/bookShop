<?php
session_start();
include "pdoConnection.php";

$gmail = $_POST['gmail'] ?? "";
$password = $_POST['password'] ?? "";


//Validation
$errors = [];

if (empty($gmail)) $errors[] = "Enter your Email !";
if (empty($password)) $errors[] = "Enter your passowrd !";
elseif (!filter_var($gmail, FILTER_VALIDATE_EMAIL)) $errors[] = "Invalid Email ..";

if (!empty($errors)) {

	$data = [$gmail,$password];
	$_SESSION['data'] = $data;

	foreach ($errors as $error) {
		$_SESSION['error'] = $error;
		header("Location: logIn.php");
		exit();
	}
} else {

	// Use prepared statement with bound parameters and execute it
	$stmt = $conn->prepare("SELECT * FROM `user` WHERE `gmail` = :gmail AND `password` = :password");
	$stmt->execute([':gmail' => $gmail, ':password' => $password]);

	// Fetch results and count rows instead of using a non-existent $num_rows property
	$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
	$num = count($rows);

	// Example check
	if ($num > 0) {
		$user = $rows[0];
		$_SESSION['user'] = $user;
		header("Location: index.php");
		exit();
		// user found: handle login (start session, etc.)
	} else {
		// no user found: handle error
		$invalidLogIn = ("Invalid user Name Or Password");
		$_SESSION['invalid'] = $invalidLogIn;
		header("Location: logIn.php");
		exit();
	}
}
