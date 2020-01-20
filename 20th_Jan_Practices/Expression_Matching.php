<?php
    // 1. Match an expression or search string or pattern by preg_match() function
    $text = "Jaydeep. A. Pandya";
    if(preg_match('/A. Pandya/', $text))
        echo "Match Found <br>";
    else
        echo "No Match Found <br>"; 
        
    // 2. Preg_match() with displau output as an array
    $text = "Jaydeep. A. Pandya";
    preg_match('/A. Pandya/', $text, $result, PREG_OFFSET_CAPTURE);
    print_r($result);
?>