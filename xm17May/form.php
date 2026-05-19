<?php
$msg = "";
if (isset($_POST['register'])) {
    $email = $_POST['email'] ?? "";
    $reg_email = "/^[a-zA-Z0-9_.]{3,60}[@]{1}[a-zA-Z0-9-]{3,20}[.]{1}[a-zA-Z]{2,6}$/";
    $password = $_POST['password'] ?? "";
    $confirm_password = $_POST['confirm_password'] ?? "";

    if (empty($email) || empty($password) || empty($confirm_password)) {
        $msg = "<span style='color:red'>All fields are required.</span>";
    } elseif (!preg_match($reg_email, $email)) {
        $msg = "<span style='color:red'>Invalid email format.</span>";
    } elseif (preg_match($reg_email, $email) === 0) {
        $emailErr = "Email is not valid";
    } elseif ($password !== $confirm_password) {
        $msg = "<span style='color:red'>Passwords do not match.</span>";
    } else {
        $msg = "<span style='color:green'>Registration successful!</span>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
</head>
<style>
    .error {
        color: red;
    }
</style>

<body>
    <h2>Registration Form</h2>
    <form action="" method="POST">
        <label for="email">Email:</label><br>
        <input type="text" name="email" placeholder="Enter your email" value="<?= isset($_POST["email"]) ? $_POST["email"] : ""; ?>"><br>
        <span class="error" id="emailError"><?= $emailErr ?? ""; ?> </span>
        <br><br>
        <label for="password">Password:</label><br>
        <input type="password" name="password" placeholder="Enter your password" value="<?= isset($_POST["password"]) ? $_POST["password"] : ""; ?>">
        <br><br>
        <label for="confirm_password">Confirm Password:</label><br>
        <input type="password" name="confirm_password" placeholder="Confirm your password" value="<?= isset($_POST["confirm_password"]) ? $_POST["confirm_password"] : ""; ?>"><br>
        <span class="error" id="confirmPasswordError"><?= $confirmPasswordErr ?? ""; ?> </span>
        <br><br>
        <button type="submit" name="register">Register</button>
    </form>
    <div>
        <?= $msg; ?>
    </div>
</body>

</html>