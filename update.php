<?php
require_once 'db_connection.php';

$id = $_GET['id'];

$sql = "SELECT * FROM users WHERE id=$id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Profile</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Update Profile</h1>
    <form action="update_process.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="<?php echo $row['name']; ?>" required>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="<?php echo $row['email']; ?>" required>
        <button type="submit">Update</button>
    </form>
</body>
</html>
<?php
} else {
    echo "Profile not found.";
}
$conn->close();
?>