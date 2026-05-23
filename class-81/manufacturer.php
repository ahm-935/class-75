<?php
require_once "db-config.php";
// Add new manufacturer
if (isset($_POST['add_mfg'])) {
   $name = $_POST['name'];
    $address = $_POST['address'];
    $active = isset($_POST['active']) ? 1 : 0;
    echo $name . " " . $address . " " . $active;

    $db->query("insert into manufacturers (name, address, is_active) 
    values('$name', '$address', $active)");
}
// Delete manufacturer
if (isset($_POST['delete_id'])) {
    $delete_id = $_POST['delete_id'];
    $db->query("delete from manufacturers where id=$delete_id");
}
// Update manufacturer


// Fetch all manufacturers
$result = $db->query("select * from manufacturers");
if ($result) {
    $mfgs = $result->fetch_all(MYSQLI_ASSOC);
//     echo "<pre>";
//     print_r($mfgs);
//     echo "</pre>";
//     echo "Manufactures fetched successfully";
// } else {
    echo  $db->error;
}
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
            <li><a href="product.php">Products</a></li>
        </ul>
    </nav>
    <div style="display:flex ; gap:100px">
        <div>
            <h2>Add New Manufacturer</h2>
            <form action="manufacturer.php" method="POST">
                <label for="name">Name:</label><br>
                <input type="text" id="name" name="name"><br><br>
                <label for="address">Address:</label><br>
                <textarea id="address" name="address"></textarea><br><br>
                <input type="checkbox" id="active" name="active">
                <label for="active">is_Active</label><br><br>
                <button type="submit" name="add_mfg">Save</button>
            </form>
        </div>
        <div>
            <h2>Manufacturers List</h2>
            <table border="1" cellpadding="10" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Address</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if (isset($mfgs)) {
                        foreach ($mfgs as $item) {
                            echo "<tr>
                                <td>{$item['id']}</td>
                                <td>{$item['name']}</td>
                                <td>{$item['address']}</td>
                                <td>" . ($item['is_active'] ? "Active" : "Inactive") . "</td>
                                <td>
                                    <form method='POST'>
                                        <input type='hidden' name='delete_id' value='{$item['id']}'>
                                        <button type='submit'>Delete</button>
                                    </form>
                                    </td>
                            </tr>";
                        } 
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>



</body>

</html>