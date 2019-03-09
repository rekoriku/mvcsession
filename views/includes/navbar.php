<nav class="navbar navbar-expand-sm navbar-light" style="background-color: #33A2FF;">
  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
        <?php
            if(!empty($session_username))
            {
                echo '<span class="navbar-brand mb-0 h1">'.$session_username.'</span>';
            }
        ?>
    </li>

    <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Person
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Search</a></li>
          <li><a href="#">Add</a></li>
          <li><a href="#">Edit</a></li>
        </ul>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="editForm.php">Edit Accounts</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="logout.php">Logout</a>
    </li>
  </ul>
</nav>
<br>