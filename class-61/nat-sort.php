<?php
$arr = ["image45.jpg", "image1.jpg", "image2.jpg",
       "image13.jpg", "Image4.jpg", "image56.jpg",
       "pic22.img", "Pic15.img","pic11.jpg"];

echo "<pre>";
print_r($arr);
echo "</pre>";

natsort($arr);
echo "<pre>";
print_r($arr);
echo "</pre>";

natcasesort($arr);
echo "<pre>";
print_r($arr);
echo "</pre>";

?>