<?php
require_once "db-config.php";
// Fetch manufacturer details
if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $result = $db->query("select * from manufacturers where id=$id");
    if ($result) {
        $mfg_details = $result->fetch_assoc();
        // echo "<pre>";
        // print_r($mfg_details);
        // echo "</pre>";
    } else {
        echo $db->error;
    }
} else {
    echo "<p style='color:red'>No data found.</p>";
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manufacturer Details</title>
</head>

<body>
    <nav>
        <ul>
            <li><a href="manufacturer.php">Manufacturers</a></li>
            <li><a href="product.php">Products</a></li>
        </ul>
    </nav>
    <h1>Manufacturer Details</h1>
    <p><strong>Name:</strong> <?php echo $mfg_details['name']; ?></p>
    <p><strong>Address:</strong> <?php echo $mfg_details['address']; ?></p>
    <p><strong>Status:</strong> <?php echo $mfg_details['is_active'] ? "Active" : "Inactive"; ?></p>
</body>     

</html> 