<?php

session_start();
require "pdoConnection.php";


if (isset($_SESSION['user'])) {

    $user_id = $_SESSION['user']['id'];

    $stmt =  $conn->prepare("DELETE FROM `user` WHERE `id`= :id");
    $stmt->bindParam(':id', $user_id);
    $stmt->execute();

    session_unset();
    session_destroy();

    echo
    '<!doctype html>
    <html>
    <head>
    <meta charset="utf-8">
    <meta http-equiv="refresh" content="2;url=index.php">
    <title>Profile Updated</title>
    <style>body{font-family:Arial,Helvetica,sans-serif;text-align:center;padding:40px}</style>
    </head>

    <body>

    <h2 style="color:green"> Your account has been deleted successfully.Thank you for Used Us !</h2>

    <script>setTimeout(function(){window.location.href="logIn.php?delected=185";},2000);</script>

    </body>
    </html>';
} else {
    header("Location: logIn.php");
    exit();
}
