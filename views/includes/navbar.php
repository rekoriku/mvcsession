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
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
    <li class="nav-item">
      <a class="nav-link" href="editForm.php">Edit Accounts</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="http://niisku.lamk.fi/~rekoriku/serverside19/mvcsession/views/logout.php">Logout</a>
    </li>
  </ul>
</nav>
<br>