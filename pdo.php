<?php

$firstName = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';
$textarea = $_POST['textarea'] ?? '';

try {

    $pdo =  new PDO('mysql:host=localhost;dbname=bookshop;charset=utf8', 'root', '');
    $pdo->setAttribute(
        PDO::ATTR_ERRMODE,
        PDO::ERRMODE_EXCEPTION
    );

    $stmt = $pdo->prepare("INSERT INTO user(firstname, email, message) VALUES (:firstName, :email, :message)");
    $stmt->execute([
        ':firstName' => $firstName,
        ':email' => $email,
        ':message' => $textarea
    ]);

    echo "Thanks";
    header("refresh:2; url=index.php");
} catch (PDOException $e) {
    echo "Database error:" . htmlspecialchars($e->getMessage());
}
