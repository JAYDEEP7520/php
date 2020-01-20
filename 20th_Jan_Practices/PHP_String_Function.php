<?php
    // 1. String Words Count : Counts each characters and consider white space is the end of one word 
    echo str_word_count("Jaydeep. A. Pandya") . '<br>';

    // 2. String Shuffle: Shuffling a character of strings into different forms
    echo str_shuffle("Jaydeep. A. Pandya") . '<br>';

    // 3. Sub String: get substring from the whole string
    echo substr("Jaydeep. A. Pandya", 9, 16) . '<br>'; 

    // 4. String Reverse: reverse all characters of string
    echo strrev("Jaydeep. A. Pandya") . '<br>';

    // 5. Similar Text: return range of similarites between strings
    echo similar_text("Jaydeep. A. Pandya", "Jaydip a Pandaya") . '<br>';

    // 6. String Length: returns length of string
    echo strlen("Jaydeep. A. Pandya") . '<br>';

    // 7. String Trimmed: remove leading and trailing white space from the string
    echo trim(" Jaydeep.    A.    Pandya    ") . '<br>';

    // 8. String html entities with add slashes and strip slashes: include html element in a string
    // 8.1. html entities with add slashses
    echo htmlentities(addslashes("Jaydeep. A. Pandya <p> This is paragraph </p> <img src = 'image.jpg'></img> This is text <br>")) . '<br>';

    // 8.2. html entities with strip slashses
    echo htmlentities(stripslashes("Jaydeep. A. Pandya <p> This is paragraph </p> <img src = 'image.jpg'></img> This is text <br>")) . '<br>';

    // 9. String Compare: Check two strings are equal or not
    echo strcmp("Jaydeep. A. Pandya", "Jaydip a Pandaya") . '<br>';

    // 10. String Case: Changing a case of string to lower case and upper case
    echo strtolower("Jaydeep. A. Pandya"). '<br>';
    echo strtoupper("Jaydeep. A. Pandya"). '<br>';
?>