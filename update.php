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
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css"> <!-- Assuming your custom styles are in styles.css -->

    <!-- jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
<div class='profile padding'>
    <div class=''>
        <div class='card card-no-border'>
            <!-- <img class='card-img-top' src='https://i.imgur.com/K7A78We.jpg' alt='Card image cap'> -->
            <h1 class="create-heading" style="color:black">Update Profile</h1>
            <form action="update_process.php" method="POST">
                <div class="create-formcontent">
                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                    <label class="create-label" for="name">Name:</label>
                    <input class="create-input" type="text" id="name" name="name" value="<?php echo $row['name']; ?>" required>
                    <label class="create-label" for="email">Email:</label>
                    <input class="create-input" type="email" id="email" name="email" value="<?php echo $row['email']; ?>" required>
                    <button class="global-button" type="submit">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>
<?php
} else {
    echo "Profile not found.";
}
$conn->close();
?>
