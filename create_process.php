<?php
require_once 'db_connection.php';

// Check if form data is submitted
if(isset($_POST['name']) && isset($_POST['email'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];

    // Prepare the SQL statement to prevent SQL injection
    $sql = $conn->prepare("INSERT INTO users (name, email) VALUES (?, ?)");
    $sql->bind_param("ss", $name, $email);

    // Execute the SQL statement
    if ($sql->execute()) {
        // Redirect back to create.php with success message appended to URL
        header('Location: index.php?success=true');
    } else {
        // Redirect to error page with an error message
        header('Location: error.php?message=Error: ' . $sql->error);
    }

    // Close the prepared statement and database connection
    $sql->close();
    $conn->close();
} else {
    // Redirect to error page if form data is not submitted
    header('Location: error.php?message=Form data not submitted');
}
?>