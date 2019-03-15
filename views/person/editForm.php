<?php 
  include "../includes/header.php"; 

  $message = "";

  if(isset($_POST["editForm"]))
  {
    if(Helper::issetAll(["id","firstname","lastname"]))
    {
      $personController = new PersonController;
      if($personController->update($_GET['id'], $_POST["id"], $_POST["firstname"], $_POST["lastname"]))
      {
        header("views/person/getForm.php");
        $message = "Succesfully edited persons record in the database!";
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
        <input type="text" name="id" class="form-control" value="<?php echo $_GET["id"]?>"/>
        <br>
        <label>Firstname:</label>
        <input type="text" name="firstname" class="form-control" value="<?php echo $_GET["fname"]?>"/>
        <br>
        <label>Lastname:</label>
        <input type="text" name="lastname" class="form-control" value="<?php echo $_GET["sname"]?>"/>
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