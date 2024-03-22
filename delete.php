<?php
require_once 'db_connection.php';

$id = $_GET['id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Delete Profile</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Delete Profile</h1>
    <p>Are you sure you want to delete this profile?</p>
    <form action="delete_process.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <button type="submit">Delete</button>
        <a href="index.php">Cancel</a>
    </form>
</body>
</html>