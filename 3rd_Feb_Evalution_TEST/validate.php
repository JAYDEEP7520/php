<?php
    require 'connection.php';

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $err = "";
    $getemail = "";

    $prefix = $_POST['prefix'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $mobile = $_POST['mobilenumber'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $information = $_POST['information'];
    $createdat = date("Y/m/d h:i:sa");
    $updatedat = date("Y/m/d h:i:sa");

    $res = mysql_query("select Email from user",$conn);
    while ($row = mysql_fetch_assoc($res)) {
        $getemail = $row["Email"];
    }
    if ($email == $getemail) {
        echo "<h1> Email ID Already exits </h1>";
    }
    else if (isset($_POST['firstname']) && !empty($_POST['firstname']) && 
            isset($_POST['lastname']) && !empty($_POST['lastname']) && 
            isset($_POST['email']) && !empty($_POST['email']) && 
            isset($_POST['mobilenumber']) && !empty($_POST['mobilenumber']) && 
            isset($_POST['password']) && !empty($_POST['password']) &&
            isset($_POST['information']) && !empty($_POST['information']) &&
            isset($_POST['confirmpassword']) && !empty($_POST['confirmpassword'])) {
                $fname = test_input($_POST["firstname"]);
                $lname = test_input($_POST["lastname"]);
                if (!preg_match("/^[a-zA-Z ]*$/",$fname) ||
                    !preg_match("/^[a-zA-Z ]*$/",$lname) || 
                    $_POST['firstname'] > 10 || $_POST['lastname'] > 10) {
                        echo $err = "<h1> Please Enter Valid Name(s) </h1>";
                }
                if ($_POST['mobilenumber'] < 10) {
                    echo $err = "<h1> Please Enter Valid Mobile Number </h1>";
                }
                $email = test_input($_POST["email"]);
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    echo $err = "<h1> Invalid email format </h1>";
                }
                if ($_POST['password'] != $_POST['confirmpassword']) {
                    echo $err = "<h1> Cannot Match Password....Try Again.. </h1>";
                }
    }
    else {
        echo "<h1> Please fill required details.. </h1>";
    }
    if ($err == null) {
        if (isset($_POST['accept'])) {
            $done = mysql_query("insert into user values('1','$prefix','$firstname','$lastname','$mobile','$email','$password','$information', '$createdat', '$updatedat')",$conn);  
        }
        else {
            echo "<h1> Please Accepts terms & conditions...</h1>";
        }
    }   
    if ($done) {
        header("location: Blog_Posts.php");
    }             
?>