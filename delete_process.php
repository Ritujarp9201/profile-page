<?php
require_once 'db_connection.php';

$id = $_POST['id'];

$sql = "DELETE FROM users WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    header('Location: index.php');
} else {
    echo "Error deleting profile: " . $conn->error;
}

$conn->close();
?>