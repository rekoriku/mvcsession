<?php 
  include "../includes/header.php"; 

  $message = "";

  if(isset($_POST["editForm"]))
  {
    if(Helper::issetAll(["username","password","form"]))
    {
      $personController = new PersonController;
      if($personController->update($_POST["id"], $_POST["firstname"], $_POST["lastname"]))
      {
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
        <input type="text" name="id" class="form-control" placeholder="Enter ID..."/>
        <br>
        <label>Firstname:</label>
        <input type="text" name="firstname" class="form-control" placeholder="Enter firstname..."/>
        <br>
        <label>Lastname:</label>
        <input type="text" name="lastname" class="form-control" placeholder="Enter lastname..."/>
        <br>
        <input type="submit" name="editForm" value="edit">
    </form>
    <?php
      if(!empty($message))
      {
        echo $message;
      }
    ?>
</div>

<?php include_once "../includes/footer.php" ?>