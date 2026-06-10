<?php
require_once 'db.php';
if(isset($_POST['add_teacher'])) {
    $name = $_POST['name'];
    $qualification = $_POST['qualification'];
    $contact_no = $_POST['contact_no'];
    // print_r($_POST);
    $db->query("call addTeacher('$name', '$qualification', '$contact_no')");
}
if(isset($_POST['delete_teacher'])) {
    $teacher_id = $_POST['id'];
    $db->query("delete from teacher where id = $teacher_id");
}

$sql = "select * from teacher";
$result = $db->query($sql);
$rows = $result->fetch_all(MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher List</title>
</head>
<body>
    <h1>Add Teacher</h1>
    <form method="POST">
        <label for="name">Name:</label><br>
        <input type="text" name="name" id="name" required><br><br>

        <label for="qualification">Qualification:</label><br>
        <input type="text" name="qualification" id="qualification" required><br><br>

        <label for="contact_no">Contact No.:</label><br>
        <input type="text" name="contact_no" id="contact_no" required><br><br>

        <button type="submit" name="add_teacher">Add Teacher</button>
    </form>

    <h1>Teacher List</h1>
    <table border="1" cellpadding="10" cellspacing="0" width="50%">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Qualification</th>
            <th>Contact No.</th>
            <th>Action</th>
        </tr>
        <?php 
        foreach ($rows as $teacher) :?>
        <tr>
            <td><?= $teacher['id'];?></td>
            <td><?= $teacher['name'];?></td>
            <td><?= $teacher['qualification'];?></td>
            <td><?= $teacher['contact_no'];?></td>
            <td>
                <form method="POST">
                    <input type="hidden" name="id" value="<?= $teacher['id'];?>">
                    <input type="submit" value="Delete" name="delete_teacher">
                </form>
            </td>
        </tr>
        <?php endforeach;
        ?>
    </table>
</body>
</html>