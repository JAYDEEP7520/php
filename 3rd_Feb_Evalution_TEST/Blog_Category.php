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
        <table border=1 align="center">
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
            while ($row = mysql_fetch_array($res)) :?>
                <tr>
                        <td> <?php echo $row['Id']; ?> </td>
                        <td> <img src="upload/<?php echo $row['Image_Name']; ?>" width="50" height="50"></img> </td>
                        <td> <?php echo $row['Title']; ?> </td>
                        <td> <?php echo $row['Created_At']; ?> </td>
                        <td> <a href="add_new_category.php?category_id=<?php echo $row['Id']?>">Edit </a> &nbsp;|&nbsp; <a href=form.php> Delete </a> </td> 
                </tr>
        <?php
            endwhile
        ?>
        </html>
    </body>
</html>