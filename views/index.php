<?php
require_once '../connection.php';
include_once 'includes/header.php';
$auth = new Authentication($db);
?>

<div class="container" style="width:500px">
    <h3>Login</h3>
    <form method="post">
        <label>Username</label>
        <input type="text" name="username" class="form-control"/>
        <br>
        <label>Password</label>
        <input type="password" name="password" class="form-control"/>
        <br>
        <input type="submit" name="form" class="btn btn-primary" value="send"/>
    </form>
    <?php
      $auth->login();
      if(!empty($message))
      {
        echo '<br><div class="alert alert-danger"><strong>'.$message.'</strong> </div>';
      }
    ?>
</div>

<?php
include_once "../includes/footer.php"
?>