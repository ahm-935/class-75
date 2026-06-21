<?php
require_once 'models/parcel.class.php';
require_once 'models/rider.class.php'; 

$riders = Rider::readAll();
$show_receipt = false; // ক্যাশ মেমো ট্র্যাকিং ফ্ল্যাগ ডিফল্ট ফলস থাকবে

// ডাবল সাবমিট কন্ডিশন বাদ দিয়ে একটি মাত্র ক্লিন ব্লক রাখা হলো
if (isset($_POST['btn_submit'])) {
    $tracking_id     = $_POST['tracking_id'];
    $sender_name     = $_POST['sender_name'];
    $receiver_name   = $_POST['receiver_name'];
    $destination     = $_POST['destination'];
    $parcel_type     = $_POST['parcel_type']; 
    $weight          = $_POST['weight'];  
    $delivery_charge = $_POST['delivery_charge'];  
    $date            = $_POST['date']; 

    // মডেল অবজেক্ট তৈরি এবং ডাটাবেজে সেভ করা
    $parcel = new Parcel(null, $tracking_id, $sender_name, $receiver_name, $destination, $parcel_type, $weight, $delivery_charge, $date);
    $res = $parcel->create();
    
    if ($res === true) {
        $msg = "Parcel item added successfully.";
        $show_receipt = true; // ডাটাবেজে সেভ সফল হলেই কেবল মেমো ট্রিমার অন হবে
    } else {
        $msg = "Error: " . $res;
    }
}
?>
 
<div class="main-panel">
  <div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title"> Add New Parcel Item </h3>
    </div>
    <div class="row">
      <div class="col-12 grid-margin stretch-card">
        <?php if(isset($msg)): ?>
            <div class="alert alert-dark alert-dismissible fade show" role="alert">
                <?= $msg ?>
                <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close">&times;</button>
            </div>
        <?php endif; ?>
        
        <div class="card">
          <div class="card-body">
            <p class="card-description"> <a href="parcels"><button class="btn btn-dark">&larr; Back to List</button></a> </p>
            
            <form class="forms-sample" method="POST">
              <div class="form-group">
                <label>Tracking ID</label>
                <input type="text" class="form-control" name="tracking_id" value="TRK-<?= rand(100000, 999999) ?>" required readonly>
              </div>
              
              <div class="form-group">
                <label>Sender Name</label>
                <input type="text" class="form-control" name="sender_name" placeholder="Enter Sender Name" required>
              </div>
              
              <div class="form-group">
                <label>Receiver Name</label>
                <input type="text" class="form-control" name="receiver_name" placeholder="Enter Receiver Name" required>
              </div>
              
              <div class="form-group">
                <label>Destination</label>
                <input type="text" class="form-control" name="destination" placeholder="Enter Destination Address" required>
              </div>

              <div class="form-group">
                <label>Parcel Type</label>
                <select class="form-control" name="parcel_type" required>
                  <option value="">-- Select Type --</option>
                  <option value="Documents">Documents</option>
                  <option value="Electronics">Electronics</option>
                  <option value="Clothing">Clothing</option>
                  <option value="Liquid">Liquid</option>
                  <option value="Others">Others</option>
                </select>
              </div>

              <div class="form-group">
                <label>Weight (kg / gm)</label>
                <input type="text" class="form-control" name="weight" placeholder="e.g. 1.5 kg or 500 gm" required>
              </div>

              <div class="form-group">
                <label>Delivery Charge</label>
                <input type="text" class="form-control" name="delivery_charge" placeholder="Enter Delivery Charge">
              </div>

              <div class="form-group">
                <label>Date</label>
                <input type="date" class="form-control" name="date" value="<?= date('Y-m-d') ?>" required>
              </div>

              <button type="submit" name="btn_submit" class="btn btn-success mr-2">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php include('views/layouts/footer.php'); ?>
</div>

<script>
// সাবমিট সাকসেসফুল হলে ক্যাশ মেমো পপআপ ওপেন করার জাভাস্ক্রিপ্ট লজিক
<?php if ($show_receipt === true): ?>
    window.addEventListener('DOMContentLoaded', (event) => {
        printCashMemo();
    });
<?php endif; ?>

function printCashMemo() {
    let trackingId     = "<?php echo isset($tracking_id) ? $tracking_id : ''; ?>";
    let senderName     = "<?php echo isset($sender_name) ? $sender_name : ''; ?>";
    let receiverName   = "<?php echo isset($receiver_name) ? $receiver_name : ''; ?>";
    let destination    = "<?php echo isset($destination) ? $destination : ''; ?>";
    let parcelType     = "<?php echo isset($parcel_type) ? $parcel_type : ''; ?>";
    let weight         = "<?php echo isset($weight) ? $weight : ''; ?>";
    let deliveryCharge = "<?php echo isset($delivery_charge) ? number_format($delivery_charge, 2) : '0.00'; ?>";
    let date           = "<?php echo isset($date) ? $date : ''; ?>";

    let printWindow = window.open('', '_blank', 'width=450,height=650');
    
    if(!printWindow) {
        alert('Please allow pop-ups for this website to print receipts automatically!');
        return;
    }

    let receiptContent = `
        <html>
        <head>
            <title>Cash Memo - ${trackingId}</title>
            <style>
                body { font-family: 'Courier New', Courier, monospace; width: 320px; margin: 0 auto; padding: 10px; font-size: 14px; color: #000; line-height: 1.4; }
                .text-center { text-align: center; }
                .bold { font-weight: bold; }
                .brand-title { font-size: 22px; margin: 5px 0; font-weight: bold; text-transform: uppercase; }
                .divider { border-top: 1px dashed #000; margin: 10px 0; }
                .info-table { width: 100%; border-collapse: collapse; }
                .info-table td { padding: 4px 0; vertical-align: top; }
                .info-table td:first-child { width: 45%; }
                .total-row { font-size: 16px; font-weight: bold; }
                .footer-text { font-size: 11px; margin-top: 25px; }
                @media print {
                    body { width: 100%; }
                }
            </style>
        </head>
        <body>
            <div class="text-center">
                <div class="brand-title">Connect Plus</div>
                <div>Courier & Logistics Service</div>
                <div class="divider"></div>
                <div class="bold" style="letter-spacing: 1px;">CASH MEMO / INVOICE</div>
            </div>
            
            <div class="divider"></div>
            
            <table class="info-table">
                <tr><td>Date:</td><td class="bold">${date}</td></tr>
                <tr><td>Tracking ID:</td><td class="bold" style="font-size: 15px; color:#000;">${trackingId}</td></tr>
            </table>
            
            <div class="divider"></div>
            
            <table class="info-table">
                <tr><td>Sender:</td><td>${senderName}</td></tr>
                <tr><td>Receiver:</td><td>${receiverName}</td></tr>
                <tr><td>Destination:</td><td>${destination}</td></tr>
                <tr><td>Parcel Type:</td><td>${parcelType}</td></tr>
                <tr><td>Weight:</td><td>${weight}</td></tr>
            </table>
            
            <div class="divider"></div>
            
            <table class="info-table total-row">
                <tr>
                    <td>Total Charge:</td>
                    <td>৳ ${deliveryCharge}</td>
                </tr>
            </table>
            
            <div class="divider"></div>
            
            <div class="text-center footer-text">
                <p>Thank you for choosing Connect Plus!</p>
                <p>Please keep this memo safe for tracking.</p>
            </div>
        </body>
        </html>
    `;

    printWindow.document.write(receiptContent);
    printWindow.document.close();
    
    // ব্রাউজারকে সিএসএস রেন্ডার করার টাইম দিয়ে প্রিন্ট প্রম্পট চালু করা
    setTimeout(function() {
        printWindow.focus();
        printWindow.print();
        printWindow.close();
    }, 400);
}
</script>