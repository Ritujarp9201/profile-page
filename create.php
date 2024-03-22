<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Profile</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1 class="create-heading">Create Profile</h1>
    <form class="create-form" action="create_process.php" method="POST">
        <div class="create-formcontent">
        <label class="create-label" for="name">Name:</label>
        <input class="create-input" type="text" id="name" name="name" required>
        <label class="create-label" for="email">Email:</label>
        <input class="create-input" type="email" id="email" name="email" required>
        <button class="create-button " type="submit">Create</button>
        </div>
    </form>
</body>
</html>