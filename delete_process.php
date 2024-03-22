<?php
require_once 'db_connection.php';

$id = $_POST['id'];
echo $id;

$sql = "DELETE FROM users WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    header('Location: index.php?delete-success=true');
} else {
    echo "Error deleting profile: " . $conn->error;
}

$conn->close();
?>