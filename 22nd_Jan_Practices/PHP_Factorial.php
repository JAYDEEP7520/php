<h3 align="center">Write a program to print Factorial of any number </h3>
<form action="" method="POST">
    Enter Any Number for Factorial : <input type="number" name="fact_num"/><br>
    <input type="submit" name = "submit" value="SUBMIT"/>
</form>
<?php
    if(isset($_POST["submit"])) {
        $number = $_POST["fact_num"];
        function factorial($number) {
            if($number == 0) {
                return 1;
            }
            else {
                return ($number * factorial($number - 1));
            }
        }
        echo "Factorial of $number is:" . factorial($number) . '<br>';
    }
?>