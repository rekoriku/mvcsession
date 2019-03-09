<?php
include_once "../includes/header.php"
?>

<div class="container" style="width:500px">
    <h3>Insert Person</h3>
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
    </form>
    <?php
      if(!empty($message))
      {
        echo $message;
      }
    ?>
</div>

<?php
include_once "../includes/footer.php"
?>