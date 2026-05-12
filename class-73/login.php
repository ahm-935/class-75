<?php
session_start();
// $_SESSION['user_id'] = 001;
// unset($_SESSION['user_id']);
// session_destroy();
if(isset($_SESSION['user_id'])){
    // header("Location: dashboard.php");
    }

$pass = "1234";
$hash_pass = password_hash($pass, PASSWORD_DEFAULT);

if(isset($_POST['login'])){
   
    if(password_verify($_POST['password'], $hash_pass)){
        $_SESSION['user_id'] = 001;
        header("Location: dashboard.php");
    }else{
        $error = "Invalid Password";
    }
}
$error = "";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <style>
        body{
            text-align: center;
        }
        .btn{
            width: 100px;
            border-radius: 10px;
            height: 30px;
            color: white;
            background-color: green;
        }

    </style>
</head>
<body>
    <h1>Login Form</h1>
    <form action="" method="post">
        <label for="">Username</label><br>
        <input type="text" name="username"><br>
        <label for="">Password</label><br>
        <input type="password" name="password"><br><br>
        <button class="btn">Sign Up</button>
        <button class="btn" type="submit" name="login">Login</button>
        <br><br>
        <a href="">Forgot Password?</a>
    </form>
    <div style="color: red;">
        <?=  $error ? $error : ""; ?>
    </div>
</body>
</html>