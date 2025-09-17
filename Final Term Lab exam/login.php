<?php
session_start(); 
include("function.php");

if (isset($_POST['login'])) {
    
    $username = $_POST['username'];
    $password = $_POST['password'];


    $connobj = new CrudApp();
    $user_data = $connobj->checkLogin($username, $password);

    if ($user_data) {
       
        $_SESSION['username'] = $user_data['Username'];
        $_SESSION['id'] = $user_data['id'];
        header("Location: index.php"); 
        exit();
    } else {

        $error_msg = "Invalid Username or Password!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <form action="login.php" method="POST">
        <label for="username">Username</label>
        <input type="text" name="username" required><br>

        <label for="password">Password</label>
        <input type="password" name="password" required><br>

        <input type="submit" name="login" value="Login">
    </form>

    <?php
    
    if (isset($error_msg)) {
        echo "<p style='color: red;'>$error_msg</p>";
    }
    ?>
</body>
</html>