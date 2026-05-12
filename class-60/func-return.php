<?php
function add($a, $b): string {
    return $a + $b . "<br>";
}

echo add(1, 2);
echo add(3, '4');

echo "---------------" . "<br>";

function add2($a, $b): array{
   return [$a + $b . "<br>"]    ;
}
echo add2(1, 2)[0];
print_r(add2(3, '4'));
?>