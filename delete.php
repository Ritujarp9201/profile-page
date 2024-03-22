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
    <title>Delete Profile</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css"> <!-- Assuming your custom styles are in styles.css -->

    <!-- jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
    <div class='profile padding' style="width:fit-content;">
    <div class='' >
        <div class='card card-no-border'>
            <!-- <img class='card-img-top' src='https://i.imgur.com/K7A78We.jpg' alt='Card image cap'> -->
            <h1 class="create-heading" style="color:black">Delete Profile</h1>
            <p style="padding-left:1rem; padding-right:1rem;">Are you sure you want to delete this profile?</p>
            <form action="delete_process.php" method="POST">
                <div class="create-formcontent">
                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                    <div style="display:flex;">
                    <button class="global-button update" type="submit">Delete</button>
                    <a  class="global-button update" href="index.php">Cancel</a>
                    </div>
                </div>
            </form>
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
