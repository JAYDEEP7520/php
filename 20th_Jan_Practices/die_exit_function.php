<?php
  // 1. Die() is used when we need to terminate the script from any point of program
   try {   
            @$variable = 10 / 0 or die('Error: Cannot Divisible by Zero');  
        }
    finally {   
                echo "Terminated..";    
            }

    // 2. Die() is used when we need to terminate the script
    try {   
            @$variable = 10 / 0 or exit('Error: Cannot Divisible by Zero'); 
        }
    finally {   
                echo "Terminated..";    
            }       // Before going on secion no. 2 we need to comment above all try with finally code
    
    // 2. Abnormal Termination by exit() and die()
    $x = 10;
    die("Terminated..."); // From Here Script is terminated so value of variable x cant be displayed
    echo "$x";  

    $x = 10;
    exit("Terminated..."); // From Here Script is terminated so value of variable x cant be displayed
    echo "$x";      // Before going on secion no. 3 we need to comment above all code 
?>