<?php
    // 1. String Position: finds the position of the first occurrence of a string inside another string.
    echo strpos("Jaydeep. A. Pandya", ". A.", 0) . '<br>';

    // 2. String Replace: replaces some characters with some other characters in a string.
    echo str_replace("Jaydip. a. pandya","Jaydeep. A. Pandya","Jaydip. a. pandya") . '<br>';

    // 3. Sub String Replace: replaces a part of a string with another string.
    echo substr_replace("Jaydip. a. pandya", "JAYDEEP. A. PANDYA", 0) . '<br>';

    // 4. String Explode: breaks a string into an array.
    print_r(explode(" ","Jaydeep. A. Pandya")). '<br>';

    // 5. String MD5: calculates the MD5 hash of a string uses the RSA Data Security, Inc. MD5 Message-Digest Algorithm.
    echo md5("Jaydeep. A. Pandya");
?>