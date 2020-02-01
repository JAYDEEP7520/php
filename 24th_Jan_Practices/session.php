<?php
    session_start();
    $_SESSION['name'] = htmlentities($_POST['text']);
    header("location:getsession.php");
?>