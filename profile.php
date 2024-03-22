<?php
require_once 'db_connection.php';

$sql = "SELECT * FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    
    echo "<div class='profile padding'>";
        echo "<div class=''>";
        echo "<div class='card card-no-border'> <img class='card-img-top' src='https://i.imgur.com/K7A78We.jpg' alt='Card image cap'>";
        include 'create.php';

        echo "<hr>";
    while($row = $result->fetch_assoc()) {
        
        echo "<div class='card-body little-profile text-center'>";
        // echo "<div class='pro-img'><img src='https://i.imgur.com/8RKXAIV.jpg' alt='user'></div>";
        echo "<h3 class='m-b-0'>" . $row["name"] . "</h3>";
        echo "<p>" . $row["email"] . "</p>";
        // echo "<div class='row text-center m-t-20'>";
        // echo "<div class='col-lg-4 col-md-4 m-t-20'>";
        // // Here you can add more profile details if needed
        // echo "</div>";
        // echo "</div>";

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
