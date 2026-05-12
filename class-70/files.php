<?php
$msg = "";
$doc = "";
if (isset($_POST['upload'])) {
    // echo "<pre>";
    // print_r($_FILES['image']);
    // echo "</pre>";
    $file = $_FILES['image'];
    // echo $file['tmp_name'];
    echo "<br>";
    $final_path = "uploads/".$file['name'];
    $type = !empty($file['tmp_name']) ?  mime_content_type($file['tmp_name']) : '';

    if(!file_exists($file['tmp_name'])){
        $msg = "<span style='color:red'>Please select a file.</span>";
    }
    elseif($file['size'] > (15 * 1024 * 1024)) {
        $msg = "<span style='color:red'>Image size should be less than 120kb.</span>";}
     elseif(($type == "image/png" ||
        $type == "image/jpeg" ||
        $type == "video/mp4" ||
        $type == "image/jpg" ||
        $type == "application/pdf" ||
        $type == "application/vnd.openxmlformats-officedocument.
        wordprocessingml.document") == false) {
        $msg = "<span style='color:red'>Invalid file type. Allowed types: .png, .jpg, .jpeg, .pdf, .docx</span>";
    }
    // elseif (!($type == "image/png" ||
    //          $type == "image/jpeg" ||
    //          $type == "video/mp4" ||
    //          $type == "image/jpg" ||
    //          $type == "application/pdf" ||
    //          $type == "application/vnd.openxmlformats-officedocument.wordprocessingml.document")) {
    //     $msg = "<span style='color:red'>Invalid file type. Allowed types: .png, .jpg, .jpeg, .pdf, .docx, .mp4</span>";
    // }
     else {
        $msg = "<span style='color:green'>File uploaded successfully.</span>";
        move_uploaded_file($file['tmp_name'], $final_path);
        $img = "<img src='$final_path' width='300'>";
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
    <strong><?php echo $msg; ?></strong>
    <br>
    <div>
        <?=  $img  ?? ""; ?>
    </div>
    <br>
    
</body>

</html>