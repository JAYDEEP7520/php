<form action="PHP_Word_Censoring.php" method="POST">
    <input type="text" name="name" value="<?php if (isset($_POST["name"]) && !empty($_POST["name"])) { echo $_POST["name"]; } ?>" 
            placeholder="Name"/> <br>
    <input type="password" name="password" 
            value="<?php 
                        if (isset($_POST["password"]) && !empty($_POST["password"])) 
                        { echo str_ireplace($_POST["password"], "********", $_POST["password"]); } ?>" 
            placeholder="Password"/> <br>
    <input type="submit" name="submit" value="SUBMIT"/>
</form>
<?php
    if (isset($_POST["name"]) && !empty($_POST["name"])) {
        $find = array("Jaydeep", "A", "Pandya");
        $replace = array("J**d**p", "*", "***dy*"); 
        echo str_ireplace($find, $replace ,$_POST["name"]) . '<br>';
    }

    /* Also its useful when user type password, and someone might get 
        the password, so before we replace it original form into our 
        own pattern by string replace function */

    if (isset($_POST["name"]) && !empty($_POST["name"])) {
        echo str_ireplace($_POST["password"], "********", $_POST["password"]) . '<br>';
    }
?>

