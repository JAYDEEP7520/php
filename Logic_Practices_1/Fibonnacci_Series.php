Write a program in PHP to print Fibonacci series . 0, 1, 1, 2, 3, 5, 8, 13, 21, 34

<?php
    $previous = 0;
    $next = 1;
    $result;
    
    echo "<br> Fibonacci series: <br> $previous, $next, ";

    for ($i=0; $i<8; $i++) {
        $result = $previous + $next;
        echo "$result , ";
        $previous = $next;
        $next = $result;
    }
?>