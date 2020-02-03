<?php
    if (isset($_POST['fname']) && !empty($_POST['fname']) && 
        isset($_POST['lname']) && !empty($_POST['lname']) && 
        isset($_POST['email']) && !empty($_POST['email']) && 
        isset($_POST['pnumber']) && !empty($_POST['pnumber']) && 
        isset($_POST['address_line1']) && !empty($_POST['address_line1']) && 
        isset($_POST['address_line2']) && !empty($_POST['address_line2']) && 
        isset($_POST['country']) && !empty($_POST['country']) && 
        isset($_POST['postal_code']) && !empty($_POST['postal_code']) && 
        isset($_POST['yourself']) && !empty($_POST['yourself']) && 
        isset($_POST['touch']) && !empty($_POST['touch'])) {
            $err = "";
            $fname = test_input($_POST["fname"]);
            $lname = test_input($_POST["fname"]);
            if (!preg_match("/^[a-zA-Z ]*$/",$fname) ||
                !preg_match("/^[a-zA-Z ]*$/",$lname) || 
                $_POST['fname'] > 10 || $_POST['lname'] > 10) {
                    echo $err = "<h1> Please Enter Valid Name(s) </h1>";
            }
            if ($_POST['pnumber'] > 10) {
                echo "<h1> Please Enter Phone Number </h1>";
            }
            $email = test_input($_POST["email"]);
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                echo $err = "<h1> Invalid email format </h1>";
            }
            if ($_POST['address_line1'] > 50 || $_POST['address_line2'] > 50) {
                echo "<h1> Invalid Address line(s) </h1>";
            }
            if ($_POST['postal_code'] > 10) {
                echo "<h1> Invalid Postal Code.. </h1>";
            }
    }
    else {
        echo "<h1> Please fill required details.. </h1>";
    }
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }
    if ($err == null) {
        session_start();
        $_SESSION['first_name'] = $_POST['fname'];
        $_SESSION['last_name'] = $_POST['lname'];
        $_SESSION['birth_date'] = $_POST['bdate'];
        $_SESSION['phone_number'] = $_POST['pnumber'];
        $_SESSION['email'] = $_POST['email'];
        $_SESSION['password'] = $_POST['password'];
        $_SESSION['cpassword'] = $_POST['cpassword'];
        $_SESSION['address_line1'] = $_POST['address_line1'];
        $_SESSION['address_line2'] = $_POST['address_line2'];
        $_SESSION['company'] = $_POST['company'];
        $_SESSION['city'] = $_POST['city'];
        $_SESSION['state'] = $_POST['state'];
        $_SESSION['country'] = $_POST['country'];
        $_SESSION['yourself'] = $_POST['yourself'];
        $_SESSION['postal_code'] = $_POST['postal_code'];
        $_SESSION['image_upload'] = $_POST['image_upload'];
        $_SESSION['certificate_upload'] = $_POST['certificate_upload'];
        $_SESSION['business'] = $_POST['business'];
        $_SESSION['clients'] = $_POST['clients'];
        $_SESSION['touch'] = $_POST['touch'];
        $_SESSION['hobbies'] = $_POST['hobbies'];
        header("location: PHP_Registration_Form.php");
    }
?>