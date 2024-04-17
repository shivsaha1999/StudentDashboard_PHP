<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

// Get the username from the session
$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Welcome to Student Dashboard</title>
</head>
<body>
    <h1>Welcome, <?php echo $username; ?>!</h1>
    <p>This is your student dashboard. You can access your grades, assignments, and other important information here.</p>
    <a href="logout.php">Logout</a>
</body>
</html>