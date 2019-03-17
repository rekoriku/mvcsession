<?php 
include_once "../includes/header.php";
$authentication = new Authentication;
if($authentication->priority() != 0)
{
  header("location: http://niisku.lamk.fi/~rekoriku/serverside19/mvcsession/views/person/getForm.php");
}

$message = "";

if(isset($_POST["editForm"]))
{
  if(Helper::issetAll(["username","password", "pri", "id", "description"]) && !Helper::isEmptyAny(["username","password", "pri", "id"]))
  {
    $userController = new UserController;
    if($userController->update($_GET['user'], $_POST["username"], $_POST["password"], $_POST["pri"], $_POST["id"], $_POST["description"]))
    {
      $message = "Succesfully inserted a new person to the database.";
      header("location: http://niisku.lamk.fi/~rekoriku/serverside19/mvcsession/views/user/getForm.php");
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
      <input type="text" name="username" class="form-control" value="<?php if(isset($_GET["user"])){echo $_GET["user"];}?>"/>
      <br>
      <label>Password:</label>
      <input type="password" name="password" class="form-control"/>
      <br>
      <label>Pri:</label>
      <input type="text" name="pri" class="form-control" value="<?php if(isset($_GET["pri"])){echo $_GET["pri"];}?>"/>
      <br>
      <label>ID:</label>
      <input type="text" name="id" class="form-control" value="<?php if(isset($_GET["id"])){echo $_GET["id"];}?>"/>
      <br>
      <label>Description:</label>
      <input type="text" name="description" class="form-control" value="<?php if(isset($_GET["description"])){echo $_GET["description"];}?>"/>
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