<!DOCTYPE html>
<html>
    <head>
        <title> Blog Category </title>
        <style>
            #input {float:right;}
            #input1 { display: block; }
        </style>
    </head>
    <body>
        <a href="Login_Form.php"><input id="input" type="button" name="logout" value="Log Out"/></a>
        <a href="Registration_Form.php"><input id="input" type="button" name="myprofile" value="My Profile"/></a>
        <a href="Blog_Category.php"><input id="input" type="button" name="managecategory" value="Manage Category"/></a>
        Blog Category <a href="add_new_category.php"><input id="input1" type="button" name="addcaegory" value="Add Category"/></a>
        <table border=1>
        <tr>
            <th> Category ID </th>
            <th> Category Image </th>
            <th> Category Name </th>
            <th> Created Date </th>
            <th> Actions </th>
        </tr>
        <?php
            require_once 'connection.php';

            $res = mysql_query("SELECT * FROM category",$conn);
           
        ?>
    </body>
</html>