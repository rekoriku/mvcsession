<?php
  $authentication = new Authentication;
?>

<nav class="navbar navbar-expand-sm navbar-light" style="background-color: #33A2FF;">
  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
        <?php
            if(Session::issetSes('username'))
            {
                echo '<span class="navbar-brand mb-0 h1">'.Session::get('username').'</span>';
            }
            else
            {
              echo '<span class="navbar-brand mb-0 h1">Anonymous</span>';
            }
        ?>
    </li>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="personDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Person
        </a>
        <div class="dropdown-menu" aria-labelledby="personDropdown">
          <a class="dropdown-item" href="http://niisku.lamk.fi/~rekoriku/serverside19/mvcsession/views/person/getForm.php">Get</a>
          <?php
            if($authentication->priority() == 0 || $authentication->priority() == 1)
            {
              echo '<a class="dropdown-item" href="http://niisku.lamk.fi/~rekoriku/serverside19/mvcsession/views/person/addForm.php">Add</a>';
            }
          ?>
        </div>
    </li>
    <?php
      if($authentication->priority() == 0)
      {
        echo '<li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">User</a><div class="dropdown-menu" aria-labelledby="userDropdown"><a class="dropdown-item" href="http://niisku.lamk.fi/~rekoriku/serverside19/mvcsession/views/user/getForm.php">Get</a><a class="dropdown-item" href="http://niisku.lamk.fi/~rekoriku/serverside19/mvcsession/views/user/addForm.php">Add</a></div></li>';
      }
    ?>
    <li class="nav-item">
        <a class="nav-link" href="http://niisku.lamk.fi/~rekoriku/serverside19/mvcsession/views/logout.php">Logout</a>
    </li>
  </ul>
</nav>
<br>