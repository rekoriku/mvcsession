<?php
  include "../includes/header.php";
  $authentication = new Authentication;
  if($authentication->priority() == -1)
  {
    header("location: http://niisku.lamk.fi/~rekoriku/serverside19/mvcsession/views/person/getForm.php");
  }

  $message = "";

  if(isset($_POST["addForm"]))
  {
    if(Helper::issetAll(["id","firstname","lastname"]))
    {
      $personController = new PersonController;
      if($personController->insert($_POST["id"], $_POST["firstname"], $_POST["lastname"]))
      {
        $message = "Succesfully inserted a new person to the database.";
        header("location: http://niisku.lamk.fi/~rekoriku/serverside19/mvcsession/views/person/getForm.php");
      }
      else
      {
        $message = "Failed to insert a new person to the database.";
      }
    }
  }
?>

<div class="container" style="width:500px">
    <h3>Insert Person</h3>
    <form method="post">
        <label>ID:</label>
        <input type="text" name="id" class="form-control" placeholder="Enter ID..."/>
        <br>
        <label>Firstname:</label>
        <input type="text" name="firstname" class="form-control" placeholder="Enter firstname..."/>
        <br>
        <label>Lastname:</label>
        <input type="text" name="lastname" class="form-control" placeholder="Enter lastname..."/>
        <br>
        <input type="submit" name="addForm" value="Insert" class="btn btn-primary">
    </form>
    <?php
      if(!empty($message))
      {
        echo $message;
      }
    ?>
</div>

<?php include_once "../includes/footer.php" ?>