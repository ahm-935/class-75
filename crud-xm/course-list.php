<?php
require_once 'db.php';


$sql = "select c.id, c.course_name, 
c.fee, t.name, t.qualification, t.contact_no
from course c, teacher t
where c.teacher_id = t.id";
$result = $db->query($sql);
$rows = $result->fetch_all(MYSQLI_ASSOC);

$result_view = $db->query("select * from vw_course");
$rows_view = $result_view->fetch_all(MYSQLI_ASSOC);
// echo "<pre>";
// print_r($rows);
// print_r($rows_view);
// echo "</pre>";
echo "Rows from vw_course: " . count($rows_view) . "<br>";
echo "Rows from join: " . count($rows) . "<br>";


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course List</title>
</head>
<body>
    <h1>View Courses</h1>
    <table border="1" cellpadding="10" cellspacing="0" width="50%">
        <tr>
            <th>ID</th>
            <th>Course Name</th>
            <th>Fee</th>
            <th>Teacher Name</th>
            <th>Teacher Qualification</th>
            <th>Teacher Contact No.</th>
        </tr>
        <?php 
        foreach ($rows_view as $course) :?>
        <tr>
            <td><?= $course['id'];?></td>
            <td><?= $course['course_name'];?></td>
            <td><?= $course['fee'];?></td>
            <td><?= $course['name'];?></td>
            <td><?= $course['qualification'];?></td>
            <td><?= $course['contact_no'];?></td>
        </tr>
        <?php endforeach;
        ?>
    </table>
    <h1>Course List</h1>
    <table border="1" cellpadding="10" cellspacing="0" width="50%">
        <tr>
            <th>ID</th>
            <th>Course Name</th>
            <th>Fee</th>
            <th>Teacher Name</th>
            <th>Teacher Qualification</th>
            <th>Teacher Contact No.</th>
        </tr>
        <?php 
        foreach ($rows as $course) :?>
        <tr>
            <td><?= $course['id'];?></td>
            <td><?= $course['course_name'];?></td>
            <td><?= $course['fee'];?></td>
            <td><?= $course['name'];?></td>
            <td><?= $course['qualification'];?></td>
            <td><?= $course['contact_no'];?></td>
        </tr>
        <?php endforeach;
        ?>
    </table>
</body>
</html>