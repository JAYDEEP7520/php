<?php
    if (isset($_GET['submit'])) {
        if (isset($_GET['name']) && !empty($_GET['name']) && isset($_GET['email']) && !empty($_GET['email'])) {
            echo "Name: $_GET[name] <br>";
            echo "Email: $_GET[email] <br>";
        }
        else {
            echo "Data Not recieved..";
        }
    }
?>