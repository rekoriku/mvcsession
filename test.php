<?php 
require_once 'connection.php';
$person = new PersonController;

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Person identity handling</title>
    </head>
    <body>
        <?php var_dump($person->get());
        
        
        
        
        
        ?>
    </body>
</html>