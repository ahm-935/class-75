

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add Branch</h1>
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
        <a href="riders" class="btn btn-sm btn-dark">&leftarrow; Back</a>
        <div class="row">
          <div class="col-12">
            <h4><?= $msg ?? "" ?></h4>
            <div class="card card-primary">
              <!-- form start -->
              <?php if(isset($not_found)): ?>
               <h5>Data not found.</h5>
              <?php else: ?>
              <form action="" method="POST">
                <input type="hidden" value="" name="id">
                <div class="card-body">
                  <div class="form-group">
                    <label>Rider Name</label>
                    <input type="text" class="form-control" name="branch_name" placeholder="Enter branch name" value="">
                  </div>
                  
                  <div class="form-group">
                    <label for="exampleInputEmail1">Phone Number</label>
                    <input type="number" class="form-control" name="phone" placeholder="Enter phone number" value="">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Vehicle</label>
                    <input type="text" class="form-control" name="vehicle" placeholder="Enter vehicle" value="">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Total Deliveries</label>
                    <input type="text" class="form-control" name="total_deliveries" placeholder="Enter total deliveries" value="">
                  </div>
                </div>
                <!-- /.card-body --> 
                <div class="card-footer">
                  <button type="submit" name="btn_submit" class="btn btn-primary">Add Rider </button>
                </div>
              </form>
              <?php endif; ?>
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>