<?php 
    include "../includes/header.php";

    $message = "";
?>

<div class="container" style="width:500px">
    <h3>Get Person</h3>
    <form method="post">
        <label>Firstname:</label>
        <input type="text" name="firstname" class="form-control" placeholder="Enter firstname..."/>
        <br>
        <input type="submit" name="getForm" class="btn btn-primary" value="get"/>
    </form>
    <?php
        if(isset($_POST["getForm"]))
        {
            if(isset($_POST["firstname"]))
            {
                $personController = new PersonController;
                $results = (array)$personController->getFname($_POST["firstname"]);
                foreach($results as $person)
                {
                    $person['id'];
                }
            }
        }

        if(!empty($message))
        {
            echo $message;
        }
    ?>
</div>

<?php 
    include "../includes/footer.php";
?>