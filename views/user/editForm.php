<?php 
include_once "../includes/header.php";

$message = "";

if(isset($_POST["editForm"]))
{
  if(Helper::issetAll(["username","password", "pri", "id", "description"]))
  {
    $userController = new UserController;
    if($userController->update($_GET['user'], $_POST["username"], $_POST["password"], $_POST["pri"], $_POST["id"], $_POST["description"]))
    {
      $message = "Succesfully inserted a new person to the database.";
    }
    else
    {
      $message = "Failed to insert a new person to the database.";
    }
  }
}
?>

<div class="container" style="width:500px">
  <h3>Insert User</h3>
  <form method="post">
      <label>Username:</label>
      <input type="text" name="username" class="form-control" value="<?php echo $_GET["user"]?>"/>
      <br>
      <label>Password:</label>
      <input type="password" name="password" class="form-control"/>
      <br>
      <label>Pri:</label>
      <input type="text" name="pri" class="form-control" value="<?php echo $_GET["pri"]?>"/>
      <br>
      <label>ID:</label>
      <input type="text" name="id" class="form-control" value="<?php echo $_GET["id"]?>"/>
      <br>
      <label>Description:</label>
      <input type="text" name="description" class="form-control" value="<?php echo $_GET["description"]?>"/>
      <br>
      <input type="submit" name="editForm" value="insert">
  </form>
  <?php
    if(!empty($message))
    {
      echo $message;
    }
  ?>
</div>

<?php include_once "../includes/footer.php" ?>