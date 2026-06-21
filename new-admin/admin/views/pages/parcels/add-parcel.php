

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit User</h1>
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
        <a href="users" class="btn btn-sm btn-dark">&leftarrow; Back</a>
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
                    <label>Tracking ID</label>
                    <input type="number" class="form-control" name="tracking_id" placeholder="Enter tracking id" value="">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Sender Name</label>
                    <input type="text" class="form-control" name="sender_name" placeholder="Enter sender name" value="">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Receiver Name</label>
                    <input type="text" class="form-control" name="receiver_name" placeholder="Enter receiver name" value="">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Origin</label>
                    <input type="text" class="form-control" name="origin" placeholder="Enter origin" value="">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Destination</label>
                    <input type="text" class="form-control" name="destination" placeholder="Enter destination" value="">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Status</label>
                    <input type="text" class="form-control" name="" placeholder="" value="">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Date</label>
                    <input type="date" class="form-control" name="" placeholder="" value="">
                  </div>
                </div>
                <!-- /.card-body --> 
                <div class="card-footer">
                  <button type="submit" name="btn_submit" class="btn btn-primary">Add Parcel</button>
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