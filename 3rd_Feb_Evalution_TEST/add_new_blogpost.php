<!DOCTYPE html>
<html>
    <head>
        <title> Add New Blog Post </title>
        <style>
            #input { display: block; }
        </style> 
    </head>
    <body>
        <h1 align="center"> ADD NEW BLOG POST </h1>
        <div align="center">
        <form>
            Title <input id="input" type="text" name="title"/>
            Content <textarea rows="5" cols="30" name="content"> </textarea>
            URL <input id="input" type="url" name="url"/>
            Published At <input id="input" type="date" name="publishedat"/>
            Category:<select name="category" id="input" multiple>
                    <option value="Lifestyle"> Lifestyle </option>
                    <option value="Health"> Health </option>
                    <option value="Education"> Education </option>
                    <option value="Music"> Music </option>
                </select>
            Image: <input type="file" name="image" accept="image/png, .jpeg, .jpg, image/gif"/>
            <input id="input" type="submit" name="submit" value="SUBMIT"/>
        </form>
        <div>
    </body>
</html>