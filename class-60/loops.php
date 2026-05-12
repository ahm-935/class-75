<?php
for ($i = 1; $i < 9; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "*";
    }
    echo "<br";
}

echo "<br>";
for ($i = 1; $i < 9; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "*";
    }
    echo "<br>";
}

echo "<br>";

for ($i = 1; $i <= 10; $i++) {
    for ($k = 10 - $i; $k > 0; $k--) {
        echo "&nbsp;&nbsp;";
    }

    for ($j = 1; $j <= $i; $j++) {
        echo "*";
    }
    echo "<br>";
}

echo "<br>";

for ($i = 1; $i <= 10; $i++) {
    for ($k = 10 - $i; $k > 0; $k--) {
        echo "&nbsp;";
    }

    for ($j = 1; $j <= $i; $j++) {
        echo "*";
    }
    echo "<br>";
}

echo "<br>";

for ($i = 10; $i > 0; $i--) {

    for ($k = 10 - $i; $k > 0; $k--) {
        echo "&nbsp;";
    }

    for ($j = 1; $j <= $i; $j++) {
        echo "*";
    }

    echo "<br>";
}
