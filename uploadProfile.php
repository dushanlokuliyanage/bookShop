<?php
session_start();
include "pdoConnection.php";

$userID = $_SESSION['user']['id']; // assuming your user table has an ID

if (isset($_FILES['profileImage']) && $_FILES['profileImage']['error'] === UPLOAD_ERR_OK) {
    $imgName = $_FILES['profileImage']['name'];
    $tmpName = $_FILES['profileImage']['tmp_name'];
    $targetPath = "uploads/" . basename($imgName);

    // Move file to uploads folder
    if (move_uploaded_file($tmpName, $targetPath)) {
        // Update path in DB
        $stmt = $conn->prepare("UPDATE user SET profileImage = :img WHERE id = :id");
        $stmt->execute([':img' => $targetPath, ':id' => $userID]);

        // Update session user data
        $_SESSION['user']['profileImage'] = $targetPath;

        header("Location: userProfile.php");
        exit();
    } else {
        echo "File upload failed!";
    }
} else {
    echo "No file selected or upload error!";
}
?>
