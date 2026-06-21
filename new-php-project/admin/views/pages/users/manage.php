<?php 
include 'models/user.class.php'; 

if(isset($_POST['delete_id'])){
  $id = $_POST['delete_id'];
  $res = User::delete($id);
  if($res === true){
    $msg = "User deleted successfully";
  }else{
    $msg = $res;
  }
}
$users = User::readAll();
?>

<div class="main-panel">
  <div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title"> User Management </h3>
    </div>
    <div class="row">
      <div class="col-12 grid-margin stretch-card">
         <?php if(isset($msg)): ?>
          <div class="alert alert-dark alert-dismissible fade show" role="alert">
            <?php echo $msg; ?>
            <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close">&times;</button>
          </div>
          <?php endif; ?>
          
        <div class="card">
          <div class="card-body">
            <p><a href="create-user"><button class="btn btn-primary">Create User</button></a> </p>
            
            <table class="table table-striped table-bordered table-hover">
              <thead>
                <tr>
                  <th> ID </th>
                  <th> Name </th>
                  <th> Email </th>
                  <th> Action </th>
                </tr>
              </thead>
              <tbody>
                <?php foreach($users as $item): ?>
                <tr>
                  <td> <?php echo $item['id']; ?> </td>
                  <td> <?php echo $item['name']; ?> </td>
                  <td> <?php echo $item['email']; ?> </td>
                  <td>
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-default"><i class="fa fa-eye text-primary"></i></button>
                      <a href="edit-user?id=<?= $item['id']; ?>" class="btn btn-sm btn-default"><i class="fa fa-edit text-success"></i></a>
                      
                      <form method="POST" style="display:inline;" onsubmit="return confirm('Are you sure you want to delete this user?');">
                        <input type="hidden" name="delete_id" value="<?= $item['id'] ?>">
                        <button type="submit" class="btn btn-sm btn-default"><i class="fa fa-trash text-danger"></i></button>
                      </form>
                    </div>
                  </td>
                </tr>
                <?php endforeach; ?>
              </tbody>
            </table>

          </div>
        </div>
      </div>
    </div>
  </div>
  <?php include('views/layouts/footer.php'); ?>
</div>