<?php
session_start();
include "pdoConnection.php";


if (isset($_POST['upload'])) {

  $user_id = $_SESSION['user']['id'];


  $image_name = $_FILES['profileImage']['name'];
  $tmp_name = $_FILES['profileImage']['tmp_name'];

  $new_name = uniqid() . "_" . $image_name;

  $upload_path = "uploads/" . $new_name;

  if (move_uploaded_file($tmp_name, $upload_path)) {

    $stmt = $conn->prepare("UPDATE `user` SET `profile_image` = ? WHERE  `id` = ? ");
    $stmt->execute([$new_name, $user_id]);

    $_SESSION['user']['profile_image'] = $new_name;

    header("Location: userProfile.php?success=1");
    exit();
  } else {
    echo "Failed to Upload Image";
  }


}
