<?php
session_start();

    include("connection.php");
    include("function.php");

    $user_data = check_login($con);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
</head>
<body>
    <a href="logout.php">logout</a>
    <h1>This is the index page</h1>

    <br>
    Hello, <?php echo $user_data['user_name']; ?> <!-- Displays the user username -->
</body>
</html>