<?php
    $file = file('write_file.txt');
    $fdata = array();
    foreach ($file as $value) {
         $fdata[] = $value;
    }
    echo implode(' , ', $fdata);
?>