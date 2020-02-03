<!DOCTYPE html>
<html>
    <head>
        <title> ADD NEW BLOG POST </title>
    </head>
    <body align="center">
        <h1> ADD NEW BLOG POST </h1>
        <form>
            Title <input type="text" name="blogposttitle" size=30 /> <br> <br>
            Content <textarea rows="5" cols="50"> </textarea><br> <br>
            URL <input type="url" name="blogposturl" size=30 /> <br> <br>
            Published At <input type="date" name="publisheddate" size=30 /> <br> <br>
            Category <select name="category" multiple>
                    <option value="Life Style"> Life Style </option>
                    <option value="Health">  Health </option>
                    <option value="Education"> Education </option>
                    <option value="Music"> Music </option>
                </select> <br> <br> 
            Image <input type="file" name="blogpostimage" accept="image/png, .jpeg, .jpg, image/gif"/> <br> <br>
            <input type="submit" name="submit" value="SUBMIT"/>
        </form>
    <body>
</html>