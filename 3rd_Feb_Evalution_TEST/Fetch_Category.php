<?php
    require_once 'connection.php';
    $array = [];
    $res = mysql_query("SELECT * FROM `parent category`",$conn);
    while ($row = mysql_fetch_array($res)) {
        array_push($array, $row["Parent_Category_Name"]);
    }
?>