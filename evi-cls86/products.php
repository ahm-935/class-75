<?php
require_once "db.php";
$sql = "
select p.*, m.name as mfg from products p, 
manufacturer m 
where p.manufacturer_id = m.id
";
$result = $db->query($sql);
$rows = $result->fetch_all(MYSQLI_ASSOC);

$result_view = $db->query("select * from vw_product");
$rows_view = $result_view->fetch_all(MYSQLI_ASSOC);

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
        <ul>
            <li><a href="manufacturer.php">Manufacturers</a></li>
            <li><a href="products.php">Products</a></li>
        </ul>
    </nav>
    <div style="display: flex; gap: 50px;">
        <div>
            <h1>View Product List</h1>
            <table border="1" cellpadding="10" cellspacing="0" width="50%">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Manufacturer</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($rows_view as $items) :?>
                        <tr>
                            <td><?=  $items['id'];?></td>
                            <td><?=  $items['name'];?></td>
                            <td><?=  $items['price'];?></td>
                            <td><?=  $items['manufacturer_name'];?></td>
                        </tr>
                        <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    <div>
    <h1>Product List</h1>
    <table border="1" cellpadding="10" cellspacing="0" width="550">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Price</th>
                <th>MFG</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($rows as $items) :?>
                <tr>
                    <td><?=  $items['id'];?></td>
                    <td><?=  $items['name'];?></td>
                    <td><?=  $items['price'];?></td>
                    <td><?=  $items['mfg'];?></td>
                </tr>
                <?php endforeach; ?>
        </tbody>
    </table>
    </div>

</body>
</html>