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
            <a href="Registration_Form.php"><input type="button" name="register" value="REGISTER"/></a>
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
                    $res = mysql_query("select * from user",$conn);
                    while ($row = mysql_fetch_assoc($res)) {
                        $getemail = $row["Email"];
                        $getpassword = $row["Password Hash"];
                    }
                    if ($getemail == $email && $getpassword == md5($password)) {
                        $lastloginat = date('Y-m-d H:i:s');
                        echo $update = mysql_query("UPDATE user set Last_Login_At='$lastloginat' where Email='$email'",$conn);
                        if ($update) {
                            header("location: Blog_Post.php");
                        }
                    }
                    else {
                        echo "Invalid Email ID & Password";
                    }
                }
                else if(isset($_POST['login'])) {
                    echo "Please Enter Email ID & Password";
                }
        ?>
    </body>
</html>