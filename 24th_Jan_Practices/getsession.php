<?php
    session_start();
    if (isset($_SESSION['name']) && !empty($_SESSION['name'])) {
        echo "Welcome...$_SESSION[name]"; 
    }
    else {
        echo "Try Again..";
    }
    session_destroy();
?>