<?php
    $conn = mysql_connect("localhost","root");
    if ($conn) {
        $database = mysql_selectdb("cybercom_creation");
    }
    else {
        echo mysql_error();
    }
?>