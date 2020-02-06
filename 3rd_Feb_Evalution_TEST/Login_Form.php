<!DOCTYPE html>
<html>
    <head>
        <title> Login Form </title>
        <style>
            #input { display: block; }
        </style>
        <script src="Process.js"> </script> 
    </head>
    <body>
        <h1 align="center"> LOGIN </h1>
        <div align="center">
        <form action="Login_Form.php" method="POST">
            Email <input id="input" type="text" name="email"/>
            Password <input id="input" type="password" name="password"/>
            <input type="submit" name="login" value="LOGIN"/>
            <input type="button" name="register" value="REGISTER" onclick="Show_Register();"/>
        </form>
        <div>

        <?php
            require_once 'connection.php';

            if (isset($_POST['email']) && !empty($_POST['email']) &&
                isset($_POST['password']) && !empty($_POST['password'])) {

                    $email = $_POST['email'];
                    $password = $_POST['password'];
                    $getemail = " ";
                    $getpassword = " ";
                    $err = "";

                    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                        echo $err = "Invalid email format <br>";
                    }
                    if (strlen($password) !== 8) {
                        echo "Invalid Password...try again..<br>";
                    }
                    $res = mysql_query("select * from user",$conn);
                    while ($row = mysql_fetch_assoc($res)) {
                        $getemail = $row["Email"];
                        $getpassword = $row["Password Hash"];
                    }
                    if ($getemail == $email && $getpassword == md5($password)) {
                        header("location: Blog_Post.php");
                    }
                    else {
                        echo "Invalid Email ID & Password";
                    }
                }
        ?>
    </body>
</html>