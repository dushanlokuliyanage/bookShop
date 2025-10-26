<?php
session_start();
include "pdoConnection.php";

if (isset($_POST['saveBtn'])) {

      $id = $_SESSION['user']['id'];


      $firstName = $_POST['firstName'];
      $lastName = $_POST['lastName'];
      $gmail = $_POST['gmail']  ?? "";
      $pNumber = $_POST['pNumber'];
      $address = $_POST['address'];
      $gender = $_POST['gender'];
      $nic = $_POST['nic'];


      $stmt = $conn->prepare("UPDATE `user` SET `firstName` = ?, `lastName` = ?, `gmail` = ?, `pNumber` = ?, `address` = ?, `gender` = ?, `nic` = ? WHERE `id` = ?");

      $stmt->execute([$firstName, $lastName, $gmail, $pNumber, $address, $gender, $nic, $id]);

      $_SESSION['user']['firstName'] = $firstName;
      $_SESSION['user']['lastName'] = $lastName;
      $_SESSION['user']['gmail'] = $gmail;
      $_SESSION['user']['pNumber'] = $pNumber;
      $_SESSION['user']['address'] = $address;
      $_SESSION['user']['gender'] = $gender;
      $_SESSION['user']['nic'] = $nic;


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

    <h2 style="color:green"> Profile Updata Successfully !</h2>

    <script>setTimeout(function(){window.location.href="userProfile.php?updated=15185";},2000);</script>

    </body>
    </html>';
}
