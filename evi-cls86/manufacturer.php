<?php
require_once "db.php";
if(isset($_POST['add_mfg'])) {
    $name = $_POST['name'];
    $address = $_POST['address'];
    $contact_no = $_POST['contact_no'];
    $db->query("call addManufacturer('$name', '$address', '$contact_no')");
}

$sql = "select * from manufacturer order by id desc";
$result = $db->query($sql);
$rows = $result->fetch_all(MYSQLI_ASSOC);
// print_r($rows);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manufacturer</title>
</head>
<body>
    <nav>
        <ul>
            <li><a href="manufacturer.php">Manufacturers</a></li>
            <li><a href="products.php">Products</a></li>
        </ul>
    </nav>
    <h1>Add Manufacturers</h1>
    <form action="manufacturer.php" method="POST">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name"><br><br>
        <label for="address">Address:</label><br>
        <textarea id="address" name="address"></textarea><br><br>
        <label for="contact_no">Contact No:</label><br>
        <input type="text" id="contact_no" name="contact_no"><br><br>
        <button type="submit" name="add_mfg">Add Manufacturer</button>
    </form>
    <h2>Manufacturer List</h2>
    <table border="1" cellpadding="10" cellspacing="0" width="550">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Address</th>
                <th>Contact No</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($rows as $items) :?>
                <tr>
                    <td><?=  $items['id'];?></td>
                    <td><?=  $items['name'];?></td>
                    <td><?=  $items['address'];?></td>
                    <td><?=  $items['contact_no'];?></td>
                    <td>
                        <form action="manufacturer.php" method="POST">
                            <input type="hidden" name="manufacturer_id" value="<?= $items['id'];?>">
                            <button type="submit" name="delete_mfg">Delete</button>
                        </form>
                    </td>
                </tr>
                <?php endforeach; ?>
        </tbody>
</body>
</html>