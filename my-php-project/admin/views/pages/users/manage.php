<?php
    include_once 'models/user.class.php';

  
if(isset($_POST['delete_id'])){
  $id = $_POST['delete_id'];
  // echo $id;
  $res = User::delete($id);
  if($res === true){
    $msg = "User deleted successfully";
  }else{
    $msg = $res;
  }
}


// $rows = User::readAll();
// echo '<pre>';
// print_r($rows);
// echo '</pre>';
?>

<div class="container-scroller">
      <!-- partial:../../partials/_navbar.html -->
     
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:../../partials/_sidebar.html -->
       
        <!-- partial -->
        <div class="main-panel content-wrapper">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> User Table </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Tables</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Basic tables</li>
                </ol>
              </nav>
            </div>
            <div class="row">
             
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <a href="add-user.php" class="btn btn-primary">Add User</a>
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Name</th>
                          <th>Email</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
          
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>