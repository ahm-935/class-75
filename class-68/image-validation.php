<?php
if (isset($_POST['upload'])) {
    echo "<pre>";
    print_r($_FILES['image']);
    echo "</pre>";
    $file = $_FILES['image'];
    echo $file['tmp_name'];
    echo "<br>";

    $final_path = "uploads/" . $file['name'];
    move_uploaded_file($file['tmp_name'], $final_path);

    if($file['size'] > (120 * 1024)){
        echo "<span style='color:red'>Image size should be less than 120kb.</span>";
    }else{
        echo "<span style='color:green'>Image uploaded successfully.</span>";
    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Validation</title>
</head>
<body>
    <form action="" method="POST" enctype="multipart/form-data">
        <input type="file" name="image">
        <button type="submit" name="upload">Upload</button>
    </form>
</body>
</html>