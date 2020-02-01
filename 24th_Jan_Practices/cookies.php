<?php
    setcookie('name', htmlentities($_POST['text']));
    header("location:getcookie.php");
?>