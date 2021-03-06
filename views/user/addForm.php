<?php
  include_once "../includes/header.php";
  $authentication = new Authentication;
  if($authentication->priority() != 0)
  {
    header("location: http://niisku.lamk.fi/~rekoriku/serverside19/mvcsession/views/person/getForm.php");
  }
  
  $message = "";

  if(isset($_POST["addForm"]))
  {
    if(Helper::issetAll(["username","password", "pri", "id", "description"]) && !Helper::isEmptyAny(["username","password", "id"]))
    {
      $userController = new UserController;
      if($userController->insert($_POST["username"], $_POST["password"], $_POST["pri"], $_POST["id"], $_POST["description"]))
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
        <input type="text" name="username" class="form-control" placeholder="Enter your username..."/>
        <br>
        <label>Password:</label>
        <input type="password" name="password" class="form-control" placeholder="Enter your password..."/>
        <br>
        <label>Pri:</label>
        <div class="radio">
          <label><input type="radio" name="pri" value="basic" checked>Basic</label>
        </div>
        <div class="radio">
          <label><input type="radio" name="pri" value="admin">Admin</label>
        </div>
        <br>
        <label>ID:</label>
        <input type="text" name="id" class="form-control" placeholder="Enter your the id..."/>
        <br>
        <label>Description:</label>
        <input type="text" name="description" class="form-control" placeholder="Enter your description..."/>
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