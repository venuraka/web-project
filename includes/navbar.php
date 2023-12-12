<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container">
    <a class="navbar-brand" href="index.php">Fancy Style</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
              <?php
                  if(isset($_SESSION["auth"]))
                  {
                     ?>
                    <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <?= $_SESSION['auth_user']['name'];?>
                          </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                  <li><a class="dropdown-item" href="#">Action</a></li>
                                  <li><a class="dropdown-item" href="#">Action2</a></li>
                                  <li><a class="dropdown-item" href="logout.php">logout</a></li>
                                </ul>
                              </li>
                             <?php
                  }
                  else
                  {
                          ?>
                           <li class="nav-item">
                              <a class="nav-link" href="register.php">Register</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="login.php">Login</a>
                            </li>
                          <?php
                  }
              ?>
       
      </ul>
    </div>
  </div>
</nav>