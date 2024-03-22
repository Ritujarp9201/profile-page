<?php
require_once 'db_connection.php';

$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];

$sql = "UPDATE users SET name='$name', email='$email' WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    header('Location: index.php');
} else {
    echo "Error updating profile: " . $conn->error;
}

$conn->close();
?>