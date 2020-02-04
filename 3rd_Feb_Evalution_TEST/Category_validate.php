<?php
     require 'connection.php';
     $geturl = "";
     $res = mysql_query("select Url from blog_post",$conn);

     $title = $_POST['title'];
     $content = $_POST['content'];
     $url = $_POST['url'];
     $createdat = date("Y/m/d h:i:sa");
     $updatedat = date("Y/m/d h:i:sa");
     $publishedat = date("Y/m/d h:i:sa");
     $target_file = "images/" . basename($_FILES["image"]["name"]);
     $name = $_FILES['image']['name'];

     while ($row = mysql_fetch_assoc($res)) {
         $geturl = $row["Url"];
     }
     if ($url == $geturl) {
         echo "<h1> URL Already exits </h1>";
     }
    else if(isset($_POST['title']) && !empty($_POST['title']) &&
            isset($_POST['content']) && !empty($_POST['content']) &&
            isset($_POST['url']) && !empty($_POST['url']) &&
            isset($_POST['metotitle']) && !empty($_POST['metotitle']) && 
            isset($_POST['parentcategory']) && !empty($_POST['parentcategory'])){
                mysql_query("insert into blog_post values('1','1','$title','$url','$content','$name','$createdat', '$updatedat', '$publishedat')",$conn);
                move_uploaded_file($_FILES['image']['tmp_name'],$target_file);
                header("location: Blog_Category.php");
    }
    else {
        header("location: Add_New_Category.php");
    }
?>