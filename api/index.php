<?php 
session_start();
$error = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Check if  password are correct
    if ($password === "1234") {
        $_SESSION["Username"] = $username;
        header("Location: /api/welcome.php");
        exit();
    } else {
        $error = "oops! Incorrect password.";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page</title>
</head>
<body>
    <div>
    <h2>Login</h2>
    <form method="post" action="index.php">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>
        <button type="submit">Login</button>
    </form>
    <a href="/api/welcome.php">Go to Welcome Page</a>
    <?php if ($error): ?>
        <p style="color: red;"><?php echo $error; ?></p>
    <?php endif; ?>
    </div>
</body>
</html>