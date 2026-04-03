<?php
session_start();
if (!isset($_SESSION["Username"])) {
    header("Location: /index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Page</title>
</head>
<body>
    <div>
        <h1>Welcome, <?php echo htmlspecialchars($_SESSION["Username"]); ?>!</h1>
        <p>You have successfully logged in.</p>
        <br>
        <a href="index.php">Logout</a>
    </div>
</body>
</html>