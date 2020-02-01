<?php
    $readin = file('write_file.txt');
    foreach ($readin as $value) {
        echo "$value <br>";
    }
?>