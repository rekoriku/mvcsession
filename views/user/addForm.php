<?php include_once "../includes/header.php" ?>

<div class="container" style="width:500px">
    <h3>Insert User</h3>
    <form method="post">
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