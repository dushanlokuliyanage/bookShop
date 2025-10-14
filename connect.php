<?php
$firstName = $_POST['name'];
$email = $_POST['email'];
$textarea = $_POST['textarea'];

$connection = new mysqli('localhost', 'root', '', 'bookshop');
if ($connection->connect_error) {
    die('Connection Failed :' . $connection->connect_error);
} else {
    $stmt = $connection->prepare("INSERT INTO user(firstName, email, message) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $firstName, $email, $textarea);
    $stmt->execute();

    echo "Thanks! Redirecting...";
    header("refresh:2; url=index.php"); // redirects after 2 seconds

    $stmt->close();
    $connection->close();
}
?>
