<?php
require_once "db.php";
// echo "<pre>";
// print_r($rows);
// echo "</pre>"; 
if(isset($_POST['add_mfg'])) {
    $name = $_POST['name'];
    $address = $_POST['address'];
    // echo $name . "<br>" . $address;
    $db->query("call createManufacturer('$name', '$address')");
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
    
            <a href="manufacturer.php">Manufacturers</a> |
            <a href="products.php">Products</a>
    </nav>
    <div>
        <h2>Add New Manufacturer</h2>
        <form action="manufacturer.php" method="POST">
            <label for="name">Name:</label><br>
            <input type="text" id="name" name="name"><br><br>
            <label for="address">Address:</label><br>
            <textarea id="address" name="address"></textarea><br><br>
            <button type="submit" name="add_mfg">Add Manufacturer</button>
        </form>
    </div>
    <h1>Manufacturers List</h1>
    <table border="1" cellpadding="10" cellspacing="0" width="80%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Address</th>
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
                    <td>
                        <form method="POST">
                            <input type="hidden" name="manufacturer_id" value="<?= $items['id']; ?>">
                            <button type="submit" name="delete_mfg">Delete</button>
                        </form>
                    </td>
                </tr>
                <?php endforeach; ?>
            
            
        </tbody>
    </table>
    
</body>
</html>