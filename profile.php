<?php
require_once 'db_connection.php';

$sql = "SELECT * FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<div class='profiles'>";
        echo "<p>Name: " . $row["name"] . "</p>";
        echo "<p>Email: " . $row["email"] . "</p>";
        echo "<a href='update.php?id=" . $row["id"] . "'>Update</a> | ";
        echo "<a href='delete.php?id=" . $row["id"] . "'>Delete</a>";
        echo "</div>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>