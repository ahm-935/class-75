<?php
require_once "db.php";
$sql = "
select p.*,m.name as mfg
from products p,manufacturers m 
where p.manufacturer_id = m.id
";
$result = $db->query($sql);
$rows = $result->fetch_all(MYSQLI_ASSOC);

$view_result = $db->query("select * from vw_product_list");
$view_rows = $view_result->fetch_all(MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
</head>
<body>
    <nav>
    
            <a href="manufacturer.php">Manufacturers</a> |
            <a href="products.php">Products</a>
    </nav>
    <h2>View Products List</h2>
    <table border="1" cellpadding="10" cellspacing="0" width="500">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Manufacturer</th>
                <th>Price</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($view_rows as $items) :?>
                <tr>
                    <td><?=  $items['id'];?></td>
                    <td><?=  $items['name'];?></td>
                    <td><?=  $items['mfg'];?></td>
                    <td><?=  $items['price'];?></td>
                </tr>
                <?php endforeach; ?>
        </tbody>
    </table>

    <h1>Products List</h1>
    <table border="1" cellpadding="10" cellspacing="0" width="50%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Manufacturer</th>
                <th>Price</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($rows as $items) :?>
                <tr>
                    <td><?=  $items['id'];?></td>
                    <td><?=  $items['name'];?></td>
                    <td><?=  $items['mfg'];?></td>
                    <td><?=  $items['price'];?></td>
                </tr>
                <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>