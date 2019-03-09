<?php 
include_once "../includes/header.php";
$form = new Form($db);
?>

<div class="container" style="width:500px">
    <h3>Get User</h3>
    <form method="post">
        <label>Username:</label>
        <input type="text" name="username" class="form-control" placeholder="Enter firstname..."/>
        <br>
        <input type="submit" name="getForm" class="btn btn-primary" value="get"/>
    </form>
    <?php
        $form->get();
        $form->update();
        //create the table here using controller -> model
        if(!empty($message))
        {
            echo $message;
        }
    ?>
</div>

<?php include_once "../includes/footer.php" ?>