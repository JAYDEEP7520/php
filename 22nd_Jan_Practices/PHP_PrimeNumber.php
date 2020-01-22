<h3 align="center">Write a PHP Script To check whether a number is Prime or not.</h3>
<form action="" method="POST">
    Enter Any Number to check prime number : <input type="number" name="prime_num"/><br>
    <input type="submit" name = "submit" value="SUBMIT"/>
</form>
<?php
    if(isset($_POST["submit"])) {
      $prime_num = $_POST["prime_num"];
      $flag = 0;
      for($i = 2; $i <= $prime_num / 2; $i++) {
          if($prime_num % $i == 0) {
              $flag = 1;
              break;
          }
      }
      if($flag == 0) {
          echo "$prime_num is Prime Number";
      }
      else {
        echo "$prime_num is not Prime Number";
      }
    }
?>