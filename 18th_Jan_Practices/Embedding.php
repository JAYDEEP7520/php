<!DOCTYPE html>
<html>
    <head>
        <title> Integration of PHP with HTML </title>
    </head>
    <body>
        <?php
            $name = "Jaydeep";
            $paragraph = "I am working at cybercom cretion as a trainee";
        ?>
        <input type = "text" name = "text" value = "<?php echo $name; ?>">
        <p><?php echo $paragraph; ?></p>
    </body>
</html>