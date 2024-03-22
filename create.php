<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Profile</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Create Profile</h1>
    <form action="create_process.php" method="POST">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <button type="submit">Create</button>
    </form>
</body>
</html>