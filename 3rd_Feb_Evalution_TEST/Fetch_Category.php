<?php
    require_once 'connection.php';
    $array = [];
    $array_id = [];
    $res = mysql_query("SELECT * FROM `parent category`",$conn);
    while ($row = mysql_fetch_array($res)) {
        array_push($array, $row["Parent_Category_Name"]);
        array_push($array_id, $row["Parent_Category_ID"]);
    }
?>