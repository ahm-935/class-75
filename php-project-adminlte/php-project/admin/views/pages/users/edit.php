<?php
require_once 'models/user.class.php';
require_once 'models/role.class.php';

if (isset($_POST['btn_submit'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $role_id = $_POST['role_id'];
    // echo $name . " ". $email." ". $role_id;
    $user = new User($id, $name, $email, $role_id);
    $res = $user->update();
    if ($res === true) {
        $msg =  "User updated successfully.";
    } else {
        $msg = $res;
    }
}

$roles = Role::readAll();
// echo '<pre>';
// print_r($roles);
// echo '</pre>';

if(isset($_GET['id'])) {
  $id = $_GET['id'];
  $user = User::readById($id);
  // echo '<pre>';
  // print_r($user);
  // echo '</pre>';
  if(!$user) {
    $not_found = true;
  }
}else {
  echo "<script>window.location = 'users';</script>";
}


?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Update User</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Users</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <a class="btn btn-primary" href="users"><i class="fa fa-arrow-left"></i>Back</a>
        <div class="row">
          <div class="col-12">
            <h4><?= $msg ?? "" ?></h4>
            <div class="card card-primary">
              <!-- form start -->
               <!-- <?php if(isset($not_found)) { ?> -->
               <h5>Data not found</h5>
               <!-- <?php } ?> -->
              <form action="" method="POST">
                <input type="hidden" value="<?= $user['id']; ?>" name="id">
                <div class="card-body">
                  <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" name="name" placeholder="Enter name" value="<?= $user['name'] ?? "" ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" name="email" placeholder="Enter email" value="<?= $user['email'] ?? "" ?>">
                  </div>
                  <div class="form-group">
                    <label>Role</label>
                    <select class="form-control" name="role_id">
                        <?php foreach ($roles as $item) {
                          $selected = $item['id'] == $user['role_id'] ? "selected" : "";
                          ?>
                      <option value="<?= $item['id'] ?>"> <?= $selected; ?><?= $item['name'] ?></option>
                      <?php } ?>

                    </select>
                  </div>
                  <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control" name="pass" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <label>Confirm Password</label>
                    <input type="password" class="form-control" name="conf_pass" placeholder="Confirm Password">
                  </div>                  
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" name="btn_submit" class="btn btn-primary">Update</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>