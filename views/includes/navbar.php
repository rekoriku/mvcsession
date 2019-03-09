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
    <li class="nav-item">
    <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Person
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="#">Get</a>
            <a class="dropdown-item" href="#">Add</a>
        </div>
    </div>
  </div>
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