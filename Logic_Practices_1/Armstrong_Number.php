Write a program to find whether a number is Armstrong or not
<form action="Armstrong_Number.php" method="POST">
    Enter any number: <input type="number" name="number"/>
    <input type="submit" name="submit" value="SUBMIT"/>
</form>
<?php
    if (isset($_POST['submit'])) {
        $number = $_POST['number'];

        if (checkArmstrong($number) == true) {
            echo "$number is Armstrong";
        }
        else {
            echo "$number is not Armstrong";
        }
    }
    function checkArmstrong($number) 
    {
        $result = 0;
        $num = $number;
        $num_length = strlen($num); 
        for ($i=0;$i<$num_length;$i++) {
            $digit = $num % 10;
            $result += pow($digit, $num_length);
            $num = $num / 10;
        }
        if ($result == $number) {
            return true;
        }
    }
?>