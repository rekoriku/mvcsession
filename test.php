<?php 
require_once 'connection.php';
//$person = new PersonController;
$model = new PersonModel;
$user = new UserModel;
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Person identity handling</title>
    </head>
    <body>
        <?php 
        //
        
        var_dump($user->getUsername("Ankall"));

        //$model->delete(525);
       // var_dump($model->delete(525));
        //var_dump($model->getSname('Lursu'));
        
        
        ?>
    </body>
</html>