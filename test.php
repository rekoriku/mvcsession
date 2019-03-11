<?php 
require_once 'connection.php';
//$person = new PersonController;
$model = new PersonModel;

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
        
        $model->delete(525);
       // var_dump($model->delete(525));
        var_dump($model->getSname('Lursu'));
        
        
        ?>
    </body>
</html>