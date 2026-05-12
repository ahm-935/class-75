<?php

   
   /* 
   1. Conditional
       a. if
       b. if-else
       c. if-elseif-else
       d. switch        
   
    2. Loop
        a. while
        b. do-while
        c. for
        d. foreach
        e. break
        f. continue
        g. goto
   */

   $x = 10;
   if ($x > 5) {
    echo "x is greater than 5";
   } else {
    echo "x is less than 5";
   } 
   echo "<br>===============<br>";
    $y = 5;
    if ($y > 0) {
        echo "Y is positive number";
    } elseif ($y < 0) {
        echo "Y is negative number";
    } else {
        echo "Y is equal to 0";
    }

    echo "<br>===============<br>";

    $day = "Monday";
    switch ($day) {
        case "Monday":
            echo "First day of the week";
            break;
        case "Tuesday":
            echo "Today is working day";
            break;
        case "Wednesday":
            echo "Today is working day";
            break;
        case "Thursday":
            echo "Today is working day";
            break;
        case "Friday":
            echo "Today is weekend";
            break;
        case "Saturday":
            echo "Today is Holiday";
            break;
        case "Sunday":
            echo "Today is working day";
            break;
        default:
            echo "Regular day";
    }

    echo "<br>===============<br>";
    for($i = 0; $i < 10; $i++) {
            if ($i == 3) {
                continue; // skip the current iteration
            }   
    echo $i . "<br>";
    }

    echo "<br>===============<br>";
    for($i = 0; $i < 10; $i++) {
            if ($i == 6) {
                break; // break the loop
            }   
    echo $i . "<br>";
    }

    echo "<br>===============<br>";
    $x = 5;
    while ($x > 0) {
        echo $x . "<br>";
        $x--;
    }
    echo "x= $x";

    echo "<br>===============<br>";
    
    do {
        echo "Do while x = " . $x . "<br>";
        $x--;
    } while ($x > 0);
    // echo "x= $x";

    echo "<br>===============<br>";
    $colors = ["red", "green", "blue", "yellow"];
    foreach ($colors as $value) {
        echo $value . "<br>";
    }

    echo "<br>===============<br>";
    $colors = ["red", "green", "blue", "yellow"];
    foreach ($colors as $key => $value) {
        echo $key . " = " . $value . "<br>";
    }                                                          //////////////////////////////////////////////////////////
    echo "<br>===============<br>";
    $colors = ["red", "green", "blue", "yellow"];
    foreach ($colors as $index => $value) {
        echo $index . " = " . $value . "<br>";
    }



?>