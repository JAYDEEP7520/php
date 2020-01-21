<?php

    /* ITS JUST EXAMPLE OF WE CAN IMPORT / INCLUDE ONE FILE IN MANY FILES BY INCLUDE & REQUIRE */

    // 1. Include file using include statement
    include 'Addition.php';
    echo "Sum from Additin.php :" . addition() . '<br>';
    echo "Division:" . (addition() / 2) . '<br>';
    /*  before going to implementation section 2 we need 
        to comment above code because we cant use include 
        and require in one file, its just for example */

    // 2. Include file using require statement
    require 'Addition.php';
    echo "Sum from Additin.php :" . addition() . '<br>';
    echo "Division:" . (addition() / 2) . '<br>';
     /*  before going to implementation section 3 we need 
        to comment above code because we cant use include 
        and require in one file, its just for example */

    // 3. include statement Vs require statement
    /* 3.1. PHP Include and require allow to import / include 
            one file into another file, but difference was come 
            when file is missing or not found   */
        include 'nonefile.php';      // its just give warning and script will continue
        require 'nonefile.php';     //  its generate fatal error and stop the execution of script

    /* 3.2. PHP require used when file was required by application,
            PHP include usec when file is not required by application,
            and application should continue when file is not found  */
        include 'Css_Additional_Style.css';
        require 'database_connection.php';
    /*  before going to implementation section 4 we need 
        to comment above code because we cant use include 
        and require in one file, its just for example */

    // 4. Include file using include_once() function
    include_once 'Addition.php';
    echo "Sum from Additin.php :" . addition() . '<br>';
    echo "Division:" . (addition() / 2) . '<br>';
    /*  before going to implementation section 5 we need 
        to comment above code because we cant use include 
        and require in one file, its just for example */

    // 5. Include file using require_once() function
    require_once 'Addition.php';
    echo "Sum from Additin.php :" . addition() . '<br>';
    echo "Division:" . (addition() / 2) . '<br>';
    /*  before going to implementation section 6 we need 
        to comment above code because we cant use include 
        and require in one file, its just for example */

    // 6. include_once() function Vs include_once() function
    //  6.1. include_once() function allow to include / import any file only once in script
        include_once 'Addition.php';
        include 'Addition.php';     // This is not allowrd because file is already include, its gives error

    //  6.2. require_once() function allow to include / import any file only once in script
        require_once 'Addition.php';
        require 'Addition.php';     // This is not allowrd because file is already include, its gives error

?>