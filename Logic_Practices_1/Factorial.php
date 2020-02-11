Write a program to print Factorial of any number (like number: 5)

<?php
    function Factorial($number) 
    {
        if ($number == 1) {
            return 1;
        }
        else {
            return $number * Factorial($number - 1);
        }
    }
    echo "<br>Factorial of 5: " . Factorial(5);
?>