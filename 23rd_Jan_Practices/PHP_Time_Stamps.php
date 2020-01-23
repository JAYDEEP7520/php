<?php
    // 1. date() & time() function allow to get the current date and time in specified format
    echo "The current Date & Time is: <br>" . date('D : M : Y , h : m : s', time()) . "<hr>";

    // 2. getdate() function allow to get the date and time information in form of array for an unixtimestamp
    echo print_r(getdate()) . "<hr>";

    // 3. checkdate() function allow to validate the given date
    if(checkdate(01, 23, 2020)) { echo "Date is Valid <hr>"; } else {echo "Date is Not Valid <hr>";}
?>