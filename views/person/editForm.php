<?php 
include "../includes/header.php"; 

if(isset($_POST["addForm"]))
{
  if(isset($_POST["id"]) && isset($_POST["firstname"]) && isset($_POST["lastname"]))
  {
    $personController = new PersonController;
    $personController->update($_POST["id"], $_POST["firstname"], $_POST["lastname"]);
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
        <input type="submit" name="" value="">
    </form>
    <?php
      if(!empty($message))
      {
        echo $message;
      }
    ?>
</div>

<?php include_once "../includes/footer.php" ?>