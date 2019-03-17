<?php 
  include "../includes/header.php"; 
  $authentication = new Authentication;
  if($authentication->priority() != 0 || $authentication->priority() != 1)
  {
    header("location: http://niisku.lamk.fi/~rekoriku/serverside19/mvcsession/views/person/getForm.php");
  }

  $message = "";

  if(isset($_POST["editForm"]))
  {
    if(Helper::issetAll(["id","firstname","lastname"]))
    {
      $personController = new PersonController;
      if($personController->update($_GET['id'], $_POST["id"], $_POST["firstname"], $_POST["lastname"]))
      {
        $message = "Succesfully edited persons record in the database!";
        header("location: http://niisku.lamk.fi/~rekoriku/serverside19/mvcsession/views/person/getForm.php");
      }
      else
      {
        $message = "Failed to edit person in the database!";
      }
    }
  }
?>

<div class="container" style="width:500px">
    <h3>Edit Person</h3>
    <form method="post">
        <label>ID:</label>
        <input type="text" name="id" class="form-control" value="<?php if(isset($_GET["id"])){echo $_GET["id"];}?>"/>
        <br>
        <label>Firstname:</label>
        <input type="text" name="firstname" class="form-control" value="<?php if(isset($_GET["fname"])){echo $_GET["fname"];}?>"/>
        <br>
        <label>Lastname:</label>
        <input type="text" name="lastname" class="form-control" value="<?php if(isset($_GET["sname"])){echo $_GET["sname"];}?>"/>
        <br>
        <input type="submit" name="editForm" value="Edit" class="btn btn-primary">
    </form>
    <?php
      if(!empty($message))
      {
        echo $message;
      }
    ?>
</div>

<?php include_once "../includes/footer.php" ?>