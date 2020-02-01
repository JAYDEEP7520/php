<!DOCTYPE html>
<html>
    <head>
        <title> Registration Form </title>
    </head>
    <body>
        <h1 align="center"> REGISTRATION FORM </h1>
        <form action="PHP_Registration_Form.php" method="POST">
            <fieldset>
                <legend> ACCOUNT DETAILS </legend>
                Select Prefix:<select name="prefix">
                    <option value="Mr."> Mr. </option>
                    <option value="Miss."> Miss. </option>
                    <option value="Ms."> Ms. </option>
                    <option value="Mrs."> Mrs. </option>
                    <option value="Dr."> Dr. </option>
                </select>
                First Name: <input type="text" name="fname"/><br><br>
                Last Name: <input type="text" name="lname"/><br><br>
                Date of Birth: <input type="date" name="bdate"/><br><br>
                Phone Number: <input type="number" name="pnumber"/><br><br>
                Email: <input type="email" name="email"/><br><br>
                Password: <input type="password" name="password"/><br><br>
                Confirm Password: <input type="password" name="cpassword"/><br>
            </fieldset>
            <fieldset>
                <legend> ADDRESS INFORMATION </legend>
                Address Line 1: <input type="text" name="address_line1"/><br><br>
                Address Line 2: <input type="text" name="address_line2"/><br><br>
                Company: <input type="text" name="company"/><br><br>
                City: <input type="text" name="city"/><br><br>
                State: <input type="text" name="state"/><br><br>
                Select Country<select name="country">
                    <option value="India"> India </option>
                    <option value="New Zealend"> New Zealend </option>
                    <option value="England"> England </option>
                    <option value="Pakistan"> Pakistan </option>
                    <option value="South Africa"> South Africa </option>
                </select><br><br>
                Postal Code: <input type="number" name="postal_code"/><br>
            </fieldset>
            <fieldset>
                <legend> OTHER INFORMATION </legend>
                Describe Yourself: <textarea rows="5" cols="30"> </textarea><br><br>
                Profile Image: <input type="file" name="image_upload" accept="image/png, .jpeg, .jpg, image/gif"/><br><br>
                Certificate Upload: <input type="file" name="certificate_upload" accept="file/pdf, .pdf"/><br><br>
                How long have you been in business?
                <input type="radio" name="business" value="UNDER 1 YEAR"/> UNDER 1 YEAR
                <input type="radio" name="business" value="1-2 YEAR"/> 1-2 YEAR
                <input type="radio" name="business" value="2-5 YEAR"/> 2-5 YEAR
                <input type="radio" name="business" value="5-10 YEAR"/> 5-10 YEAR
                <input type="radio" name="business" value="OVER 10 YEAR"/> OVER 10 YEAR <br><br>
                Number of unique clients you see each week? <select name="clients">
                    <option value="1-5"> 1-5 </option>
                    <option value="6-10"> 6-10 </option>
                    <option value="11-15"> 11-15 </option>
                    <option value="15+"> 15+ </option>
                </select><br><br>
                How do you like us to get in touch with you?
                <input type="checkbox" name="touch" value="POST"> POST
                <input type="checkbox" name="touch" value="EMAIL"> EMAIL
                <input type="checkbox" name="touch" value="SMS"> SMS
                <input type="checkbox" name="touch" value="Phone"> Phone <br><br>
                Hobbies: <select name="hobbies" multiple>
                    <option value="Listening to Music"> Listening to Music </option>
                    <option value="Travelling"> Travelling </option>
                    <option value="Blogging"> Blogging </option>
                    <option value="Sports"> Sports </option>
                    <option value="Art"> Art </option>
                </select>
            </fieldset><br>
            <div align="center">
                <input type="submit" name="submit" value="SUBMIT"/>
            </div>
        </form>
        <?php
            
        ?>
    </body>
</html>