<!DOCTYPE html>
<html>
<head>
    <title> My Page </title>
</head>
<form action="PHP_Appending_File_Using_File_Handling.php" method="POST">
    <input type="text" name="name" placeholder="Enter Name"/><br>
    <input type="submit" name="submit" value="SUBMIT">
</form>
</html>
<?php
    if (isset($_POST['name'])) {
        if (!empty($_POST['name'])) {
            $file = fopen('write_file.txt', 'a');
            fwrite($file, $_POST['name']);
            echo "File Appended";
        }
    }
?>