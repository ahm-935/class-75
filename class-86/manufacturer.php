<?php
require_once "db.php";
if(isset($_POST['add_mfg'])) {
    $name = $_POST['name'];
    $address = $_POST['address'];
    $contact_no = $_POST['contact_no'];
    $db->query("call addManufacturer('$name', '$address', '$contact_no')");
}
if(isset($_POST['delete_mfg'])) {
    $manufacturer_id = $_POST['manufacturer_id'];
    $db->query("delete from manufacturers where id = $manufacturer_id");
}
    $result = $db->query("select * from manufacturers order by id desc");
    if($result) {
         $rows = $result->fetch_all(MYSQLI_ASSOC);
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manufacturers</title>
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
    <h1>Manufacturers List</h1>
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
                        <form method="POST">
                            <input type="hidden" name="manufacturer_id" value="<?= $items['id']; ?>">
                            <button type="submit" name="delete_mfg">Delete</button>
                        </form>
                    </td>
                </tr>
                <?php endforeach; ?>
        </tbody>
</body>
</html>