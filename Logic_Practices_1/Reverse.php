Write a program to print Reverse of any number
<form action="Reverse.php" method="POST">
    Enter any number: <input type="number" name="number">
    <input type="submit" name="submit" value="SUBMIT"/>
</forn>
<?php

    if (isset($_POST['submit'])) {

        $number = $_POST['number'];
        $num = $number;
        $result = 0;
        
        while ($num >= 1)
        {
           $digit = $num % 10;
           $result = $result * 10 + $digit;
           $num = $num / 10;
        }

        echo "<br>Reverse Nunber of $number is $result";
    }
?>