<?php
include "pdoConnection.php";
session_start();


$code = $_POST['code'];
$newpw = $_POST['pw'];
$rePw = $_POST['rpw'];


$errors = [];

if (empty($code)) $errors[] = "Enter Verification Code";
elseif ($_SESSION['fcode'] != $code)  $errors[] = "Verification is Invalid";
unset($_SESSION['fcode']);
if (empty($newpw)) $errors[] = "Enter your New Password";
if (empty($rePw)) $errors[] = "Enter your new Password Again";

if ($newpw != $rePw) $errors[] = "Password does not match, check again!";


if (!empty($errors)) {
    foreach ($errors as $error) {
        $_SESSION['erorrNewPw'] = $error;
        var_dump($error);
        header("Location: newPassword.php");
        exit();
    }
} else {

    //   $hashedPw = password_hash($newpw, PASSWORD_DEFAULT);
    $hashedPw = md5($newpw);


    $stmt = $conn->prepare("UPDATE `user` SET `password` = :password WHERE `gmail` = :gmail");
    $stmt->execute([
        ':gmail' => $_SESSION['gmail'],
        ':password' =>  $hashedPw
    ]);

    unset($_SESSION['fcode']);
    unset($_SESSION['gmail']);
    unset($_SESSION['erorrNewPw']);

  

    header("Location: logIn.php");
    exit();
}
