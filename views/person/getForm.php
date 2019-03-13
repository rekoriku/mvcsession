<?php 
    include_once "../includes/header.php";

    $message = "";

    if(isset($_POST["getForm"]))
    {
      if(isset(($_POST["firstname"])))
      {
        $personController = new PersonController;
        $results = $personController->getFname($_POST["firstname"]);
        foreach($results as $person)
        {
            echo $person;
        }
      }
    }
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
        //create the table here using controller -> model
        //this table sfould also generate links to edit and delete
        if(!empty($message))
        {
            echo $message;
        }
    ?>
</div>

<?php include_once "../includes/footer.php" ?>