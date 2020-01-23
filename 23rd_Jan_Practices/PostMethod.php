<?php
    if (isset($_POST['submit'])) {
        if (isset($_POST['name']) && !empty($_POST['name']) && isset($_POST['email']) && !empty($_POST['email'])) {
            echo "Name: $_POST[name] <br>";
            echo "Email: $_POST[email] <br>";
        }
        else {
            echo "Data Not recieved..";
        }
    }
?>