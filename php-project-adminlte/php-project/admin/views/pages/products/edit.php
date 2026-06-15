<?php
require_once 'models/product.class.php';
require_once 'models/brand.class.php';
require_once 'models/category.class.php';

$brands = Brand::readAll();
// echo '<pre>';
// print_r($roles);
// echo '</pre>';

$categories = Category::readAll();

if (isset($_POST['btn_submit'])) {
  $name              = $_POST['name'];
  $category_id       = $_POST['category'];
  $brand_id          = $_POST['brand'];
  $short_desc = $_POST['desc'];
  $price             = $_POST['price'];
  $quantity          = $_POST['qty'];
  $point_of_restock  = $_POST['point'];
  $image             = $_POST['image'];
  $is_active         = isset($_POST['is_active']) ? 1 : 0;
  // echo $name . " " . $category_id . " " . $brand_id . " " . $short_desc . " " . $price . " " . $quantity . " " . $point_of_restock . " " . $image . " " . $is_active;

  $product = new Product(null, $name, $category_id, $brand_id, $short_desc, $price, $quantity, $point_of_restock, $image, $is_active);
  $res = $product->create();
  $msg = "Product created successfully.";
  }

?>

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Create Product</h1>
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
      <a class="btn btn-primary" href="products"><i class="fa fa-arrow-left"></i>Back</a>
      <div class="row">
        <div class="col-12">
          <h4><?= $msg ?? "" ?></h4>
          <div class="card card-primary">
            <!-- form start -->
            <form action="" method="POST">
              <div class="card-body">
                <div class="form-group">
                  <label>Name</label>
                  <input type="text" class="form-control" name="name" placeholder="Enter name">
                </div>
                <div class="form-group">
                  <label>Category</label>
                  <select class="form-control" name="category">
                   <?php foreach ($categories as $item) { ?>
                    <option value="<?= $item['id'] ;?>"><?= $item['name'] ;?></option>
                    <?php } ?>
                  </select>
                </div>
                <div class="form-group">
                  <label>Brand</label>
                  <select class="form-control" name="brand">
                   <?php foreach ($brands as $item) { ?>
                    <option value="<?= $item['id'] ;?>"><?= $item['name'] ;?></option>
                    <?php } ?>
                  </select>
                </div>
                <div class="form-group">
                  <label>Short Description</label>
                  <input type="text" class="form-control" name="desc" placeholder="Enter short description">
                </div>
                <div class="form-group">
                  <label>Price</label>
                  <input type="number" class="form-control" name="price" placeholder="Enter price">
                </div>
                <div class="form-group">
                  <label>Quantity</label>
                  <input type="number" class="form-control" name="qty" placeholder="">
                </div>
                <div class="form-group">
                  <label>Point of Restock</label>
                  <input type="number" class="form-control" name="point" placeholder="">
                </div>
                <div class="form-group">
                  <label>Image</label>
                  <input type="file" class="form-control" name="image" placeholder="image">
                </div>
                <div class="form-group">
                  <input type="checkbox" name="is_active" value="0">
                  <label>Is Active</label>
                </div>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <button type="submit" name="btn_submit" class="btn btn-primary">Submit</button>
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