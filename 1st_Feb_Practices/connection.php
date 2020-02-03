<?php
    $conn = mysql_connect("localhost", "root");
    if ($conn) {
        $database = mysql_selectdb("customer_portal");
    }
    else {
        echo "<h1> Could not connect...try again..</h1>";
    }
?>