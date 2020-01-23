<?php
    include 'PHP_$_SERVER_Variable.php';
    if (isset($_POST['submit']))
        echo "Email Id: $_POST[email] <br>" . "Password:" . str_ireplace($_POST['password'], "********", $_POST['password']) . "<br>"; 
?>