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
        
        //var_dump($user->getUsername("ankkkall"));

        $user->user = "testari";
        $user->pwd = md5("salasana123");
        $user->pri = "0";
        $user->id = "12345678901";
        $user->description = "Testi user joka on admin!";
        $user->insert();

        var_dump($user->getUsername("testari"));

        //$model->delete(525);
       // var_dump($model->delete(525));
        //var_dump($model->getSname('Lursu'));
        
        
        ?>
    </body>
</html>