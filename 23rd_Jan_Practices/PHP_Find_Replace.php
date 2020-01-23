<?php
    if((isset($_POST['name']) && !empty($_POST['name'])) && 
        (isset($_POST['find']) && !empty($_POST['find'])) &&
        (isset($_POST['replace']) && !empty($_POST['replace']))) {
            $result = str_ireplace($_POST['find'], $_POST['replace'], $_POST['name']);
    }
?>
<form action="PHP_Find_Replace.php" method="POST">
    Enter any Characters: <br><input type="text" name="name" 
                                     value="<?php if (isset($_POST['name']) && !empty($_POST['name'])) { echo $result; }?>" 
                                     size="50"/> <br> <br>
    Search For: <br> <input type="text" name="find" 
                            value="<?php if (isset($_POST['find']) && !empty($_POST['find'])) { echo $_POST['find']; }?>" 
                            size="50"/> <br> <br> 
    Replace With: <br> <input type="text" name="replace" 
                              value="<?php if (isset($_POST['replace']) && !empty($_POST['replace'])) { echo $_POST['replace']; }?>" 
                              size="50"/> <br> <br>
    <input type="submit" value="FIND & REPLACE"/> 
</form>