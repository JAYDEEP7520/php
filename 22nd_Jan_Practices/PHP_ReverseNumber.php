<h3 align="center"> Write a program to print Reverse of any number </h3>
<form action="" method="POST">
    Enter Any Number to reverse : <input type="number" name="reverse_num"/><br>
    <input type="submit" name = "submit" value="SUBMIT"/>
</form>
<?php
    if(isset($_POST["submit"])) {
        echo "Reverse Number of $_POST[reverse_num] : " . (int) strrev($_POST["reverse_num"]);
    }
?>