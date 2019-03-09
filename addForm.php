<?php 
require_once 'isLogged.php';
$form = new Form($db);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Person identity handling</title>
    </head>
    <body>
        <a href="logout.php">Log out!</a>
        <form method="post">
            ID: <input type="text" name="id" value=""><br>
            First Name: <input type="text" name="firstname" value=""><br>
            Last Name: <input type="text" name="lastname" value=""><br>
            Username: <input type="text" name="username" value=""><br>
            Password: <input type="text" name="password" value=""><br>
            Description: <input type="text" name="description" value=""><br>
            <!-- Password: <input type="password" name ="password"  value=""><br> -->
            <input type="submit" name="addForm" value="insert">
        </form>
        <?php $form->insert();?>
    </body>
</html>