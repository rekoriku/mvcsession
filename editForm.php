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
            Username: <input type="text" name="username" value=""><br>
            <!-- Password: <input type="password" name ="password"  value=""><br> -->
            <input type="submit" name="getForm" value="get">
        </form>
        <br>
        <?php $form->get();?>
        <?php $form->update();?>
    </body>
</html>