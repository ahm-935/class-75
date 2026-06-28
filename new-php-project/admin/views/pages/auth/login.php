<?php
require_once 'models/auth.class.php';
if(isset($_POST['email']) && isset($_POST['password'])) {
    // echo $_POST['email'] . ' ' . $_POST['password'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $auth = Auth::login($email, $password);
    print_r($auth);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Admin Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
    .sidebar, .sidebar-offcanvas {
        display: none;
    }
    .navbar-brand-wrapper  {
        display: none;
    }
</style>
</head>
<body class="bg-light">
  <div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="card shadow p-4" style="width: 350px;">
      <h3 class="text-center mb-4">User Login</h3>
      <form action="" method="POST">
        <div class="mb-3">
          <label for="email" class="form-label">Email address</label>
          <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Password</label>
          <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <p class="text-danger"> <?php echo isset($auth['error']) ? $auth['error'] : ''; ?> </p>
        <button type="submit" class="btn btn-primary w-100">Login</button>
        <p class="text-center mt-3">
          <a href="register.php">Create an account</a>
        </p>
      </form>
    </div>
  </div>
</body>
</html>
