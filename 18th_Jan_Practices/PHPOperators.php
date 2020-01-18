<?php
 
    $number_1 = $number_2 = 20;
    echo "Value: $number_1 <br>";

    if($number_1 == $number_2)
        echo "TRUE <br>";
    else if($number_1 <> $number_2)
        echo "Conflict <br>";
    else
        echo "False <br>";

    $number_3 = 20; $number_4 = 30; $number_5 = 40;
    echo "$number_3 + $number_4 <br>";
    echo "$number_3 - $number_4 <br>";
    echo "$number_3 * $number_4 <br>";
    echo "$number_3 / $number_4 <br>";
    echo "$number_3 % $number_4 <br>"; 
    echo "($number_3 / $number_4) * ($number_5 * $number_3) % $number_2 <br>";
    $number_5 += $number_3; 
    echo "$number_5 <br>";

    if($number_1 >= $number_2 && $number_1 >= $number_3)
        echo "$number_1 is greater <br>";
    else if($number_2 >= $number_4 || $number_4 <= $number_2)
        echo "$number_2 is greater <br>";
    else if(!($number_1 >= $number_2) && !($number_1 >= $number_3))
        echo "$number_1 is not greater <br>";
    else
        echo "$number_5 is greater";
?>