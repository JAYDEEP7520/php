<!DOCTYPE html>
<html>
    <head>
        <title> Add New Category </title>
        <style>
            #input { display: block; }
        </style> 
    </head>
    <body>
        <?php include_once 'Fetch_Category.php';  
        require_once 'connection.php';

            if (isset($_GET['category_id'])) :?>
                 <h1 align="center"> UPDATE CATEGORY </h1>
                 <?php
                    $catId = $_GET['category_id'];
                    $res = mysql_query("SELECT * FROM category WHERE Id = $catId",$conn);
                    $row = mysql_fetch_assoc($res);
                 ?>
            <?php 
            else:
            ?>
                <h1 align="center"> ADD NEW CATEGORY </h1>
            <?php
                endif
            ?>
        <div align="center">
        <form action="add_new_category.php" method="POST" enctype="multipart/form-data">
            Title <input id="input" type="text" name="title" value="<?php echo $row['Title']; ?>"/>
            Content <textarea rows="5" cols="30" name="content"> <?php echo $row['Content']; ?> </textarea>
            URL <input id="input" type="url" name="url" value="<?php echo $row['Url']; ?>"/>
            Meta Title <input id="input" type="text" name="metatitle" value="<?php echo $row['Meta_Title']; ?>"/>
            Parent Category:<select name="parentcategory" id="input">
                            <?php foreach($array as $value) :?>
                                <option value="<?php echo $value;?>"><?php echo $value;?>
                            <?php endforeach?>
                            </select>
            Image: <input type="file" name="image" accept="image/png, .jpeg, .jpg, image/gif"/> <?php echo $row['Image_Name']; ?>

            <?php 
            if (isset($_GET['category_id'])) :?>
                 <input id="input" type="submit" name="update" value="UPDATE"/>
            <?php 
            else:
            ?>
                <input id="input" type="submit" name="add" value="SUBMIT"/>
            <?php
                endif
            ?>
        </form>
        <div>

        <?php

            if (isset($_POST['add'])) {
                
                if (isset($_POST['title']) && !empty($_POST['title']) &&
                isset($_POST['content']) && !empty($_POST['content']) &&
                isset($_POST['url']) && !empty($_POST['url']) &&
                isset($_POST['metatitle']) && !empty($_POST['metatitle']) && 
                isset($_POST['parentcategory']) && !empty($_POST['parentcategory'])) {

                    $title = $_POST['title'];
                    $content = $_POST['content'];
                    $url = $_POST['url'];
                    $metatitle = $_POST['metatitle'];
                    $parentcategory = $_POST['parentcategory'];
                    $parentcategoryid;
                    $createdat = date('Y-m-d H:i:s');
                    $updatedat = date('Y-m-d H:i:s');
                    $target = "upload/".basename($_FILES['image']['name']);
                    $imagename = $_FILES['image']['name'];

                    $res = mysql_query("SELECT Parent_Category_ID from `parent category` WHERE Parent_Category_Name = '$parentcategory'",$conn);
                    while ($row = mysql_fetch_array($res)) {
                        $parentcategoryid= $row["Parent_Category_ID"];
                    }
                    move_uploaded_file($_FILES['image']['tmp_name'],$target);

                    $geturl = " ";
                    $err = "";

                    $res = mysql_query("select * from category",$conn);
                    while ($row = mysql_fetch_assoc($res)) {
                        $geturl = $row["Url"];
                    }
                    if ($geturl == $url) {
                        echo "URL Already Exits...";
                    }
                    else {
                        $que = mysql_query("insert into category values('NULL',$parentcategoryid,'$title','$metatitle','$url','$content','$createdat','$updatedat','$imagename')",$conn);
                        if($que) {
                            header("location: Blog_Category.php");
                        }
                        else {
                            header("location: add_new_category.php");
                            echo "Something went wrong...!!";
                        }
                    }
                } 
                else if (!isset($_POST['image'])) {
                    echo "Please Choose Image";
                }
            }
            else if(!isset($_POST['add'])){
                echo "Please Fill Required details..";
            }

            if (isset($_POST['update'])) :
                $lastloginat = date('Y-m-d H:i:s');
                $update = mysql_query("UPDATE category set Id = 'NULL',
                                        Parent_Category_ID = '$parentcategoryid',
                                        Title = '$title',
                                        Meta_Title = '$metatitle',
                                        `Url` = '$url',
                                        Content = '$content',
                                        Created_At = '$createdat',  
                                        Updated_At = '$lastloginat',
                                        Image_Name = '$imagename' WHERE Id = $catId",$conn);
                if ($update):?> 
                    <h1 align="center"> YOUR CATEGORY WILL BE UPDATED..</h1>
                <?php 
                endif;
            endif;?>
    </body>
</html>