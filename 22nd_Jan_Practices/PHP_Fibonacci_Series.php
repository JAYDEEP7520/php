<h3 align="center"> Write a program in PHP to print Fibonacci series . 0, 1, 1, 2, 3, 5, 8, 13, 21, 34 </h3> 
<?php
    $previous_number = 0;
    $original_number = 1;
    $result;
    echo "$previous_number, $original_number , ";
    for($i = 0; $i <= 7; $i++) {
        echo $result = $previous_number + $original_number . ', ';
        $previous_number = $original_number;
        $original_number = $result;
    }
?>