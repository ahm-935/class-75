<?php
$msg = "";
if (isset($_POST['register'])) {
    $email = $_POST['email'] ?? "";
    $password = $_POST['password'] ?? "";
    $confirm_password = $_POST['confirm_password'] ?? "";

    if (empty($email) || empty($password) || empty($confirm_password)) {
        $msg = "<span style='color:red'>All fields are required.</span>";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $msg = "<span style='color:red'>Invalid email format.</span>";
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
    <title>Regi. Form</title>
</head>
<body>
    <h2>Registration Form</h2>
    <form action="" method="POST">
        <label for="email">Email:</label><br>
        <input type="text" name="email" placeholder="Enter your email" value="<?php echo $_POST['email'] ?? '' ?>"><br>
        <span class="error" id="emailError"><?=  $emailErr ?? "" ;?> </span>
        <br><br>
        <label for="password">Password:</label><br>
        <input type="password" name="password" placeholder="Enter your password" value="<?php echo $_POST['password'] ?? '' ?>">
        <br><br>
        <label for="confirm_password">Confirm Password:</label><br>
        <input type="password" name="confirm_password" placeholder="Confirm your password" value="<?php echo $_POST['confirm_password'] ?? '' ?>"><br>
        <span class="error" id="confirmPasswordError"><?=  $confirmPasswordErr ?? "" ;?> </span>
        <br><br>
        <button type="submit" name="register">Register</button>
    </form>
    <div>
        <?= $msg; ?>
    </div>
</body>
</html>