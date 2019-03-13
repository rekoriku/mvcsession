<?php
  include_once "../includes/header.php";
  $usercontroller = new UserController; 
?>

<div class="container" style="width:500px">
    <h3>Insert User</h3>
    <form method="post">
        <label>Person id:</label>
        <?php
          //query all the person ids here
          $query = $db->query("YOUR QUERY HERE");
          echo '<select id="dropdown_id">';
          while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
            echo '<option value="'.$row['id'].'">'.$row['id'].'</option>';
          }
          echo '</select>';// Close your drop down box
        ?>
        
        <br>
        <label>Username:</label>
        <input type="text" name="username" class="form-control" placeholder="Enter your username..."/>
        <br>
        <label>Password:</label>
        <input type="password" name="password" class="form-control" placeholder="Enter your password..."/>
        <br>
        <label>Description:</label>
        <input type="text" name="description" class="form-control" placeholder="Enter your description..."/>
        <br>
        <input type="submit" name="addForm" value="insert">
    </form>
    <?php
      if(!empty($message))
      {
        echo $message;
      }
    ?>
</div>

<?php include_once "../includes/footer.php" ?>