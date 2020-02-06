<!DOCTYPE html>
<html>
    <head>
        <title> Regitration Form </title>
        <style>
            #input { display: block; }
        </style> 
    </head>
    <body>
        <h1 align="center"> REGISTER </h1>
        <div align="center">
        <form action="Registration_Form.php" method="POST">
            Select Prefix:<select name="prefix" id="input">
                    <option value="Mr."> Mr. </option>
                    <option value="Miss."> Miss. </option>
                    <option value="Ms."> Ms. </option>
                    <option value="Mrs."> Mrs. </option>
                    <option value="Dr."> Dr. </option>
                </select>
            First Name <input id="input" type="text" name="firstname"/>
            Last Name <input id="input" type="text" name="lastname"/>
            Email <input id="input" type="email" name="email"/>
            Mobile Number <input id="input" type="number" name="mobilenumber"/>
            Password <input id="input" type="password" name="password"/>
            Confirm Password <input id="input" type="password" name="confirmpassword"/>
            Information <textarea rows="5" cols="30" name="information"> </textarea>
            <input id="input" type="checkbox" name="accept" value="Hereby, I Accept Terms & conditions.."> Hereby, I Accept Terms & conditions..
            <input id="input" type="submit" name="register" value="REGISTER"/>
        </form>
        <div>

        <?php
            require_once 'connection.php';

            if (isset($_POST['prefix']) && !empty($_POST['prefix']) &&
                isset($_POST['firstname']) && !empty($_POST['firstname']) &&
                isset($_POST['lastname']) && !empty($_POST['lastname']) &&
                isset($_POST['email']) && !empty($_POST['email']) &&
                isset($_POST['mobilenumber']) && !empty($_POST['mobilenumber']) && 
                isset($_POST['password']) && !empty($_POST['password']) &&
                isset($_POST['confirmpassword']) && !empty($_POST['confirmpassword']) &&
                isset($_POST['information']) && !empty($_POST['information'])) {

                    $prefix = $_POST['prefix'];
                    $firstname = test_input($_POST['firstname']);
                    $lastname = test_input($_POST['lastname']);
                    $email = test_input($_POST['email']);
                    $mobilenumber = $_POST['mobilenumber'];
                    $password = $_POST['password'];
                    $confirmpassword = $_POST['confirmpassword'];
                    $information = $_POST['information'];
                    $lastloginat = date('Y-m-d H:i:s');
                    $createdat = date('Y-m-d H:i:s');
                    $updatedat = date('Y-m-d H:i:s');
                    $getemail = " ";

                    $err = "";
                    if (!preg_match("/^[a-zA-Z ]*$/",$firstname) ||
                        !preg_match("/^[a-zA-Z ]*$/",$lastname) || 
                        strlen($firstname) > 10 || strlen($lastname) > 10) {
                            echo $err = "Please Enter Valid Name(s) <br>";
                    }
                    if(!preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $mobilenumber))  {
                        $err = 'Invalid Mobile Number!';
                    }
                    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                        echo $err = "Invalid email format <br>";
                    }
                    if (strlen($password) !== 8 || strlen($confirmpassword) !== 8 || $password !== $confirmpassword) {
                        echo "Invalid Password...try again..<br>";
                    }
                    if(empty($_POST['accept'])) {
                        echo "Please Accept Terms & Conditions for proceed...<br>";
                    }
                    $res = mysql_query("select * from user",$conn);
                    while ($row = mysql_fetch_assoc($res)) {
                        $getemail = $row["Email"];
                    }
                    if ($getemail == $email) {
                        echo "Email Already Exits..";
                    }
                    else {
                        $md5_password = md5($password);
                        $que = mysql_query("insert into user values('NULL','$prefix','$firstname','$lastname','$mobilenumber','$email','$md5_password','$lastloginat','$information','$createdat','$updatedat')",$conn);
                        if ($que) {
                            header("location:Login_Form.php");
                        }
                    }
                }
                else if (isset($_POST['register'])) {
                    echo "Please fill required details <br>";
                }
            function test_input($data) {
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
            }
        ?>
    </body>
</html>