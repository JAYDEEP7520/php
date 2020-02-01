<?php
    if (isset($_COOKIE['name']) && !empty($_COOKIE['name'])) {
        echo "Welcome...$_COOKIE[name]"; 
    }
    else {
        echo "Try Again..";
    }
    setcookie('name','');
?>