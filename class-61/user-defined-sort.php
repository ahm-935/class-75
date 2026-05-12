<?php
// User defined/custom sort
// array is sorted by user defined function

$arr = ["MinarRahman", "Raju", "Xariff","Jim","She","her", "MithunKhan","Asadul", "Sajid"];

echo "<pre>";
print_r($arr);
echo "</pre>";

usort($arr, function($a, $b){
    return strlen($a) - strlen($b);
});
echo "<pre>";
print_r($arr);
echo "</pre>";
?>