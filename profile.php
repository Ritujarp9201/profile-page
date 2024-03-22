<?php
require_once 'db_connection.php';

$sql = "SELECT * FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    
    echo "<div class='profile padding'>";
    echo "<div class=''>";
    echo "<div class='card card-no-border'> <img class='card-img-top' src='https://i.imgur.com/K7A78We.jpg' alt='Card image cap'>";
    include 'create.php';
    if(isset($_GET['success']) && $_GET['success'] == 'true') {
        echo '<p class="success-message">Profile created successfully!</p>';
    }

    echo "<hr>";

    while($row = $result->fetch_assoc()) {
       
        echo "<div class='card-body little-profile text-center'>";
        echo "<h3 class='m-b-0'>" . $row["name"] . "</h3>";
        echo "<p>" . $row["email"] . "</p>";
        echo "<a class='global-button update' href='update.php?id=" . $row["id"] . "'>Update</a>";
        echo "<a class='global-button update' href='delete.php?id=" . $row["id"] . "'>Delete</a>";
        
        echo "</div>";
        echo "<hr>";
    }
    
    echo "</div>";
    echo "</div>";
    echo "</div>";
} else {
    echo "0 results";
}

$conn->close();
?>
