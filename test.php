<?php 
require_once 'connection.php';
$person = new PersonController;
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
        
        $model->id = 10;
        $model->fname = 'Mursu';
        $model->sname = 'Tursu';
        $model->insert();
        var_dump(PersonModel::getSname('Tursu'));
        
        
        ?>
    </body>
</html>