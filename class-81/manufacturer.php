<?php
require_once "db-config.php";
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
        <a href="manufacturer.php">Manufacturers</a>
        <a href="product.php">Products</a>
    </nav>
    <div style="display:flex ; gap:100px">
        <div>
            <h2>Add New Manufacturer</h2>
            <form action="manufacturer.php" method="POST">
                <label for="name">Name:</label><br>
                <input type="text" id="name" name="name" required><br><br>
                <label for="address">Address:</label><br>
                <input type="text" id="address" name="address" required><br><br>
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