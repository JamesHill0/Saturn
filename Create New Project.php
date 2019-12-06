<!DOCTYPE html>
<html>
    <head>
        <title>Create New Project</title>
    </head>
    <body>
        <h1>Create New Project</h1>
        <form method="GET" action="saturn.php">
            Project Name:<br>
            <input type="text" name="projectName">
            <br><br>
            Description: <br> 
            <input type="text" name="description"> 
            <br><br>
            <select name="Access">
            <option selected hidden value="">Access</option>
            <option value="public">Public</option>
            <option value="private">Private</option>
            </select>
            <br><br>
            Create Project:<br>
            <input type="submit" name="createProject" value="Submit!">
        </form>


    </body>
</html>