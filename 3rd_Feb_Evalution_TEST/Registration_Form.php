<!DOCTYPE html>
<html>
    <head>
        <title> REGISTRATION FORM </title>
    </head>
    <body align="center">
        <h1> REGISTER </h1>
        <form action="validate.php" method="POST">
            Prefix:<select name="prefix">
                    <option value="Mr."> Mr. </option>
                    <option value="Miss."> Miss. </option>
                    <option value="Ms."> Ms. </option>
                    <option value="Mrs."> Mrs. </option>
                    <option value="Dr."> Dr. </option>
                </select> <br> <br>
            First Name <input type="text" name="firstname" size=30/><br> <br>
            Last Name <input type="text" name="lastname" size=30/><br> <br>
            Email <input type="email" name="email" size=30/><br> <br>
            Mobile Number <input type="number" name="mobilenumber" size=30/><br> <br>
            Password <input type="password" name="password" size=30/><br> <br>
            Confirm Password <input type="password" name="confirmpassword" size=30/><br> <br>
            Information <textarea rows="5" cols="50" name="information"> </textarea> <br> <br>
            <input type="checkbox" name="accept" value="Hereby, I Accept Terms & Conditions"/> Hereby, I Accept Terms & Conditions <br> <br>
            <input type="submit" name="submit" value="SUBMIT"/>
        </form>
    <body>
</html>