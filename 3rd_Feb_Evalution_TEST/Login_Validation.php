<?php

    $getemail = "";
    $getpassword = "";

    require 'connection.php';

    $res = mysql_query("select * from user",$conn);
    while ($row = mysql_fetch_assoc($res)) {
        $getemail = $row["Email"];
        $getpassword = $row["Password Hash"];
    } 

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    if (isset($_POST['email']) && !empty($_POST['email']) && 
        isset($_POST['password']) && !empty($_POST['password'])) {
            $email = test_input($_POST["email"]);
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                echo $err = "<h1> Invalid email format </h1>";
            }
            else {
                $email = $_POST['email'];
                $password = $_POST['password'];

                if ($email == $getemail && $password == $getpassword) {
                    session_start();
                    $_SESSION['User'] = $email;
                    $_SESSION['Password'] = $password; 
                    header("location: Blog_Posts.php");
                }
                else {
                    echo "<h1> Invalid Email ID & Password </h1>";
                }
            } 
        }
        else {
            header("location: Login_Form.php");
        }
?>