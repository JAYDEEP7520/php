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
        <form>
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
            <input id="input" type="checkbox" name="checkbox" value="Hereby, I Accept Terms & conditions.."> Hereby, I Accept Terms & conditions..
            <input id="input" type="button" name="register" value="REGISTER"/>
        </form>
        <div>
    </body>
</html>