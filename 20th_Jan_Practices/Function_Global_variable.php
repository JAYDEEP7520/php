<?php
    // 1. Access Global by global keyword inside the function
    $text = "Jaydeep. A. Pamdya";
    function display() {
        global $text;
        echo "Name: $text <br>";
    }
    display();

    // 2. Get the Server's IP Address by $_SERVER[];
    $ip = $_SERVER['REMOTE_ADDR'];
    function display_ip() {
        global $ip;
        echo "Your IP Address : $ip";
    }
    display_ip();
?>