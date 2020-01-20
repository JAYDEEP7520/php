<?php
    // 1. Basic or Default Function
    function display_message() {        // Declaring and Defining a display() function
        echo "Default Function without Arguments: Jaydeep. A. Pandya <br>";
    }
    display_message();                  // Calling of display() function

    //2. Function with arguments
    function display_strings($string_1, $string_2) {
        echo "Function with Arguments: $string_1 . $string_2";
    }
    display_strings("Jaydeep. A.", "Pandya <br>");

    //3. Function with return value
    function display_strings_return($string_1, $string_2) {
        return "Function with return value: $string_1 . $string_2 <br>";
    }
    echo display_strings_return("Jaydeep. A.", "Pandya");

    //4. Calling of one function from another function or function within funcion
    function addition($number_1, $number_2) {
        return $number_1 + $number_2;
    }
    function divide($number_1, $number_2) {
        return $number_1 / $number_2;
    }
    function Multiply($number_1, $number_2) {
        return $number_1 * $number_2;
    }
    echo Multiply(addition(10,10), divide(50,30)); // Function within function

    // 6. Function with Default Arguments
    function dislplay_default($number_1 = 20) {
        echo "Default Value: $number_1 <br>";
    }
    dislplay_default();
?>