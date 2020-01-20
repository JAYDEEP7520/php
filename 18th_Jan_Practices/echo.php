<?php

    //1. Display the output on page
    echo "Hello World";
    
    //2. Echo with difference between single quoate ('') vs double quote ("")
    $name = "jaydeep";
    echo '<h1>'. $name .'</h1>'; // Need to contact variable by Dot (.), directly includes variable inside the string
    echo "<h1> $name </h1>"; // Doesnt need of contact variable, we can put directly variable 

    //3. Echo as a function
    echo "Your name is : $name <br>";
    echo "Jaydeep" , " " , "Pandya <br>"; //Concatanation done by Dot(.) and Comma(,)
    echo("Hello World <br>");

    //4. Print expression result with echo
    $a = 10;
    $b = 20;
    $c = $a + $b;
    echo "Sum of $a and $b is: $c";
?>