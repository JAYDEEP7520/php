<!DOCTYPE html>
<html>
    <head>
        <title> Update Category </title>
        <style>
            #input { display: block; }
        </style> 
    </head>
    <body>
        <?php include_once 'Fetch_Category.php'; ?>
        <h1 align="center"> ADD NEW CATEGORY </h1>
        <div align="center">
        <form action="add_new_category.php" method="POST" enctype="multipart/form-data">
            Title <input id="input" type="text" name="title"/>
            Content <textarea rows="5" cols="30" name="content"> </textarea>
            URL <input id="input" type="url" name="url"/>
            Meta Title <input id="input" type="text" name="metatitle"/>
            Parent Category:<select name="parentcategory" id="input">
                            <?php foreach($array as $value) :?>
                                <option value="<?php echo $value;?>"><?php echo $value;?>
                            <?php endforeach?>
                            </select>
            Image: <input type="file" name="image" accept="image/png, .jpeg, .jpg, image/gif"/>
            <input id="input" type="submit" name="submit" value="SUBMIT"/>
        </form>
        </div>
    </body>
</html>