<?php
include "pdoConnection.php";
session_start();

$gmail = $_POST['gmail'];

$errors = [];


if (empty($gmail)) $errors[] = "Enter your regitred Email";
elseif (!filter_var($gmail, FILTER_VALIDATE_EMAIL)) $errors[] = "Invalid Email";

if (!empty($errors)) {
    foreach ($errors as $erorr) {
        $_SESSION['erorr'] = $erorr;
        header("Location: fogotPassword.php");
        exit();
    }
} else {

    $stmt =  $conn->prepare("SELECT * FROM `user` WHERE  `gmail` = :gmail");
    $stmt->execute(['gmail' => $gmail]);

    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user && $user['gmail'] == $gmail) {
        // echo "Yes u are alredy registerd User";
        $min = 1000;
        $max = 9999;
        $code =  rand($min, $max);
        echo ($code);


        $stmt1 =  $conn->prepare("UPDATE `user` SET `fcode` = :fcode WHERE `gmail` = :gmail");
        $stmt1->execute([
            ':gmail' => $gmail,
            ':fcode' => $code
        ]);
        $_SESSION['gmail'] = $gmail;
        $_SESSION['fcode'] = $code;
        echo "<script>
            window.open('newPassword.php','_blank');
              window.opener?.location.reload();
           </script>";
        exit();
    } else {
        $_SESSION['erorr'] = "No user found or email failed!";
        header("Location: fogotPassword.php");
        exit();
    }
}
