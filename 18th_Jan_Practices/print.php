<?php
   
    // 1. Display output on the page
    print "Hello World <br>";

    // 2. Echo Vs Print
    $name = "jaydeep";
    print " $name <br>"; // print return value 1, echo cannot return any value it shows the parser syntax error        
    echo "My","Name","Is", $name; // print allow to pass multiple arguments, while echo cannot. 
    
    // 3. Print() as a function
    print "Your name is: $name <br>";
    print "Jaydeep" . " " . "Pandya <br>";
    print("Hello World <br>");

    // 4. Display result of an expression
    $a = 10;
    $b = 20;
    $c = $a + $b;
    print "Sum of $a and $b is: $c";
?>