<?php 
require_once 'models/parcel.class.php'; 

// ডাটাবেজ থেকে সব পার্সেল নিয়ে আসা
$all_parcels = Parcel::readAll();

// শুধুমাত্র যেগুলোর স্ট্যাটাস 'In Transit' সেগুলোকে শিপমেন্ট হিসেবে ফিল্টার করা
$shipments = array_filter($all_parcels, function($parcel) {
    return $parcel['status'] === 'In Transit';
});
?>
<div class="main-panel">
  <div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title"> Shipment Management </h3>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Shipments</li>
        </ol>
      </nav>
    </div>
    
    <div class="row">
      <div class="col-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title text-primary">On-Going Shipments (In Transit)</h4>
          
            
            <div class="table-responsive">
              <table class="table table-striped table-bordered table-hover">
                <thead>
                  <tr>
                    <th> Tracking ID </th>
                    <th> Sender Name </th>
                    <th> Receiver Name </th>
                    <th> Destination </th>
                    <th> Parcel Type </th>
                    <th> Weight </th>
                    <th> Status </th>
                    <th> Assigned Rider </th>
                    <th> Date </th>
                  </tr>
                </thead>
                <tbody>
                  <?php if (empty($shipments)): ?>
                    <tr>
                      <td colspan="9" class="text-center">No active shipments running at this moment.</td>
                    </tr>
                  <?php else: ?>
                    <?php foreach ($shipments as $item): ?>
                    <tr>
                      <td> <strong><?php echo htmlspecialchars($item['tracking_id']); ?></strong> </td>
                      <td> <?php echo htmlspecialchars($item['sender_name']); ?> </td>
                      <td> <?php echo htmlspecialchars($item['receiver_name']); ?> </td>
                      <td> <?php echo htmlspecialchars($item['destination']); ?> </td>
                      <td> <?php echo htmlspecialchars($item['parcel_type'] ?? 'N/A'); ?> </td>
                      <td> <?php echo htmlspecialchars($item['weight'] ?? 'N/A'); ?> </td>
                      <td> 
                        <span class="badge badge-primary">
                          <?php echo htmlspecialchars($item['status']); ?> 
                        </span>
                      </td>
                      <td> 
                        <strong>
                          <i class="fa fa-motorcycle text-success mr-1"></i>
                          <?php echo htmlspecialchars($item['rider_name'] ?? 'Not Assigned'); ?>
                        </strong> 
                      </td>
                      <td> <?php echo htmlspecialchars($item['date']); ?> </td>
                    </tr>
                    <?php endforeach; ?>
                  <?php endif; ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php include('views/layouts/footer.php'); ?>
</div>