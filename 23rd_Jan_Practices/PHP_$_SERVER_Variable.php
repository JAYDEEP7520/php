<form action="<?php $_SERVER['SCRIPT_NAME']?>" method="POST">
    Email Id: <input type="email" name="email"/> <br>
    Password: <input type="password" name='password'/><br>
    <input type="submit" name="submit" value="SUBMIT"/>
</form>
<?php
    echo "SERVER: $_SERVER[HTTP_HOST] <br>";
?>