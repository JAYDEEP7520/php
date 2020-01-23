<?php
    $randnum = rand(1,5);
    switch($randnum) {
        case 1: echo '<textarea cols=10 rows=5 bgcolor=red style=background-color:red;></textarea>';
                break;
        case 2: echo "<textarea cols=10 rows=5 bgcolor=red style=background-color:orange;></textarea>";
                break;
        case 3: echo "<textarea cols=10 rows=5 bgcolor=red style=background-color:green;></textarea>";
                break;
        case 4: echo "<textarea cols=10 rows=5 bgcolor=red style=background-color:blue;></textarea>";
                break;
        case 5: echo "<textarea cols=10 rows=5 bgcolor=red style=background-color:blacks;></textarea>";
                break;
    }
?>