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
        
        $model->id = 525;
        $model->fname = 'Sursu';
        $model->sname = 'Lursu';
        $model->update();
        var_dump($model->getId(525));
        var_dump($model->idExist());
        var_dump($model->getSname('Lursu'));
        
        
        ?>
    </body>
</html>