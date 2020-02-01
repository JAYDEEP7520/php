<?php
    $file = fopen('write_file.txt', 'w');
    fwrite($file, 'Name: JAYDEEP. A. PANDYA' . "\n");
    fwrite($file, 'City: Mahesana' . "\n");
    fclose($file);
    echo "File Write Sucessfully..";
?>