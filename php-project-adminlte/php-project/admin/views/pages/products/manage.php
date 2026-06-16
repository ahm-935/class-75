 <?php
require_once 'models/product.class.php';

if (isset($_POST['delete_id'])) {
    $id = $_POST['delete_id'];
    // echo $id;
    $res = User::delete($id);   
    if ($res === true) {
        $msg =  "<h4 class='text-success'>User deleted successfully.</h4>";
    } else {
        $msg = $res;
    }
}

$rows = Product::readAll();
// echo '<pre>';
// print_r($rows);
// echo '</pre>';
 ?>
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Products</h1>
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
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <a href="create-product" class="btn btn-sm btn-primary">Create Product</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <div class="table-responsive">
                    <?php echo $msg ?? ""; ?>
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Name</th>
                          <th>Image</th>
                          <th>Price</th>
                          <th>Quantity</th>
                          <th>Brand</th>
                          <th>Category</th>
                          <th>Status</th>
                          <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php foreach ($rows as $item) { ?>
                        <tr>
                          <td><?= $item['id'] ;?></td>
                          <td><?= $item['name'] ;?></td>
                          <td><img src="<?=  $item['image'] ?>" width="50px"></td>
                          <td><?= $item['price'] ;?></td>
                          <td><?= $item['quantity'] ;?></td>
                          <td><?= $item['brand'] ;?></td>
                          <td><?= $item['category'] ;?></td>
                          <td><?= $item['is_inactive'] == 1 ? "Inactive" : "Active"; ?></td>
                          <td>
                            <form action="" method="POST">
                              <input type="hidden" name="delete_id" value="<?= $item['id'] ;?>">
                              <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                            </form>
                          </td>
                        </tr>
                        <?php } ?>
                      </tbody>
                    </table>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>