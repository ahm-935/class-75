<?php
require_once 'models/parcel.class.php';


$rider_items = Parcel::readRiderItems();
?>

<div class="main-panel">
  <div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title"> Rider Items Management </h3>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
          <li class="breadcrumb-item active" aria-current="page">Rider Items</li>
        </ol>
      </nav>
    </div>

    <div class="row">
      <div class="col-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Assigned Parcels to Riders</h4>

            <div class="table-responsive">
              <table class="table table-striped table-bordered table-hover">
                <thead>
                  <tr>
                    <th> Tracking ID </th>
                    <th> Sender Name </th>
                    <th> Receiver Name </th>
                    <th> Assigned Rider </th>
                    <th> Rider Phone </th>
                    <th> Status </th>
                    <th> Date </th>
                  </tr>
                </thead>
                <tbody>
                  <?php if (empty($rider_items)): ?>
                    <tr>
                      <td colspan="7" class="text-center">No items have been assigned to riders yet.</td>
                    </tr>
                  <?php else: ?>
                    <?php foreach ($rider_items as $item): ?>
                      <tr>
                        <td><strong><?= htmlspecialchars($item['tracking_id']) ?></strong></td>
                        <td><?= htmlspecialchars($item['sender_name']) ?></td>
                        <td><?= htmlspecialchars($item['receiver_name']) ?></td>

                        <td><strong><?= htmlspecialchars($item['rider_name'] ?? 'Not Assigned') ?></strong></td>

                        <td><?= htmlspecialchars($item['rider_phone'] ?? 'N/A') ?></td>

                        <td>
                          <?php
                          $statusClass = 'badge-warning';
                          if ($item['status'] == 'In Transit') {
                            $statusClass = 'badge-primary';
                          } elseif ($item['status'] == 'Delivered') {
                            $statusClass = 'badge-success';
                          }
                          ?>
                          <span class="badge <?= $statusClass ?>"><?= htmlspecialchars($item['status']) ?></span>
                        </td>
                        <td><?= htmlspecialchars($item['date']) ?></td>
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