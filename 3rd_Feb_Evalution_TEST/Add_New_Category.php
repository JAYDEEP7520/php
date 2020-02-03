<!DOCTYPE html>
<html>
    <head>
        <title> ADD NEW CATERGORY </title>
    </head>
    <body align="center">
        <h1> ADD NEW CATERGORY </h1>
        <form action="Add_New_Category.php" method="POST">
            Title <input type="text" name="title" size=30 /> <br> <br>
            Content <textarea rows="5" cols="50" name="content"> </textarea><br> <br>
            URL <input type="url" name="url" size=30 /> <br> <br>
            Meto Title <input type="text" name="metotitle" size=30 /> <br> <br>
            Parent Category <select name="parentcategory">
                    <option value="Education, Health"> Education, Health </option>
                    <option value="Life Style"> Life Style </option>
                    <option value="Health">  Health </option>
                </select> <br> <br> 
            Image <input type="file" name="image" accept="image/png, .jpeg, .jpg, image/gif"/> <br> <br>
            <input type="submit" name="submit" value="SUBMIT"/>
        </form>
        <?php
            require 'connection.php';

            $title = $_POST['title'];
            $content = $_POST['content'];
            $url = $_POST['url'];
            $meto_title = $_POST['metotitle'];
            $parent_category = $_POST['parentcategory'];
            $image = $_POST['image'];
            $createdat = date("Y/m/d h:i:sa");
            $updatedat = date("Y/m/d h:i:sa");

            mysql_query("insert into blog_post values('1','1','$title','$url','$content','$image','$createdat','$createdat', '$updatedat')",$conn); 
            echo "Response has been recorded.."; 
        ?>
    <body>
</html>