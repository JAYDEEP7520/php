<?php
    $fname = 'write_file.txt';
    $file = fopen($fname, 'r');
    $fdata = fread($file, filesize($fname));
    $f_array = explode('.', $fdata);
    foreach ($f_array as $value) {
        echo "$value.  (DOT) ";
    }
?>