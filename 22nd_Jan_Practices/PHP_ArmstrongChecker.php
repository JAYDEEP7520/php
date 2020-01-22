<h3 align="center"> Write a program to find whether a number is Armstrong or not. </h3>
<form action="" method="POST">
    Enter Any Number to Check Armstrong : <input type="number" name="armStromg_num"/><br>
    <input type="submit" name = "submit" value="SUBMIT"/>
</form>
<?php
    if(isset($_POST["submit"])) {
        $ArmStrongNum = $_POST["armStromg_num"];
        $number_parts = str_split($ArmStrongNum);
        $result = 0;
        for($i = 0; $i < count($number_parts); $i++) {
            $numbers[$i] = (int) $number_parts[$i];
            $part_res[$i] = pow($numbers[$i], count($number_parts));
            $result += $part_res[$i];
        }
        if($result == $ArmStrongNum){
            echo "The $ArmStrongNum is Armstrong";
        }
        else {
            echo "The $ArmStrongNum is not Armstrong";
        }
    }
?>