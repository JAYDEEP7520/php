<?php
    // 1. Defining a Simple Array / Indexed Array / Numeric Array by using array() function
    $Student_Name = array("Jaydeep. A. Pandya", "Sunil Patel", "Sanjay Patel", "Pinesh Darji", "Mayur Thakkar");

    // 2. Access Student_Name array by for loop
    echo "<strong> 1. Indexed Array accessing By For Loop: </strong> <br> <br>"; 
    for($i = 0; $i <= 4; $i++) {
        echo "Students Name: $Student_Name[$i] <br>";
    }
    echo "<br>";

    // 3. Access Student_Name array by for each construct / loop
    echo "<strong> 2. Indexed Array accessing By Foreach Loop: </strong> <br> <br>";
    foreach($Student_Name as $value) {
        echo "Students Name: $value <br>";
    }
    echo "<br>";

    // 3. Defining a Associative Array by using array() function
    $Student_Marks = array("Jaydeep. A. Pandya" => 70, "Sunil Patel" => 80, "Sanjay Patel" => 87, "Pinesh Darji" => 77, "Mayur Thakkar" => 90);

    // 4. Access Student_Marks array by for loop
    echo "<strong> 3. Associative Array accessing By For Loop: </strong> <br> <br>";
    for($i = 0; $i < count($Student_Marks); $i++) {
        echo 'Students Marks:' . ' ' . $Student_Marks[array_keys($Student_Marks)[$i]] . ' <br>';
    } 
    echo "<br>";

    // 5. Access Student_Marks array by for each construct / loop
    echo "<strong> 4. Associative Array By Foreach Loop: </strong> <br> <br>";
    foreach($Student_Marks as $value) {
        echo "Students Marks: $value <br>";
    }
    echo "<br>";

     // 6. Defining a Multidimensional Array (Arrays within Array) by using array() function
     $Student_Class = array("Enrollment No." => array(110, 111, 112, 113, 114) , "Grades" => array("B", "A", "C", "E", "A"));

     // 7. Access Student_Class array by for loop
     echo "<strong> 5. Multidimensional Array accessing By For Loop: </strong> <br> <br>";
     for($i = 0; $i < count($Student_Class); $i++) {
        echo '<strong>' . array_keys($Student_Class)[$i] . '</strong>' .'<br>';
        foreach($Student_Class[array_keys($Student_Class)[$i]] as $key => $value) {
        echo "$value <br>";
       }
     }
     echo "<br>";
 
     // 8. Access Student_Class array by for each construct / loop
     echo "<strong> 6. Multidimensional Array By Foreach Loop: </strong> <br> <br>";
     foreach($Student_Class as $enrollment_no => $grades) {
         echo "<strong> $enrollment_no </strong> <br>";
         foreach($grades as $grade_value) {
             echo "$grade_value <br>";
         }
     }
     echo "<br>";
    
?>