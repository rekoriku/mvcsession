<?php 
require_once 'connection.php';
$auth = new Authentication($db);

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Person identity handling</title>
    </head>
    <body>
        <form method="post">
            username: <input type="text" name="username" value="">
            password: <input type="text" name="password" value="">
            <!-- Password: <input type="password" name ="password"  value=""><br> -->
            <input type="submit" name="form" value="send"><br>
        </form>
        <?php $auth->login();?>
    </body>
</html>