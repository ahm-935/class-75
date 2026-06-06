<?php
require_once "db-config.php";
// Update manufacturer
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $result = $db->query("select * from manufacturers where id=$id");
    if ($result) {
        $mfg_details = $result->fetch_assoc();
 }
}
if (isset($_POST['update_mfg'])) {
    $name = $_POST['name'];
    $address = $_POST['address'];
    $active = isset($_POST['active']) ? 1 : 0;
    $db->query("update manufacturers set name='$name', address='$address', is_active=$active where id=$id");
        if ($db->affected_rows > 0) {
            header("Location: manufacturer.php");
        } else {
            echo $db->error;
        }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manufacturer Edit</title>
</head>

<body>
    <h2>Edit Manufacturer</h2>
    <?php
    if (isset($mfg_details)):
    ?>
        <form method="POST">
            <label for="name">Name:</label><br>
            <input type="text" id="name" name="name" value="<?= $mfg_details['name']; ?>"><br><br>
            <label for="address">Address:</label><br>
            <textarea id="address" name="address"><?= $mfg_details['address']; ?></textarea><br><br>
            <input type="checkbox" id="active" name="active" <?= $mfg_details['is_active'] ? 'checked' : ''; ?>>
            <label for="active">is_Active</label><br><br>
            <button type="submit" name="update_mfg">Update</button>
        </form>
    <?php
    endif;
    ?>
</body>

</html>