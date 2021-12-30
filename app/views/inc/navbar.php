<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="#"></a>
    <h1 class="text-light fst-italic"><?php echo SITENAME; ?></h1>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-md-auto gap-2">
        <li class="nav-item rounded">
          <a href="#" class="nav-link">Welcome <?php echo $_SESSION['user_name']; ?></a>
        </li>
        <li class="nav-item rounded">
          <a class="nav-link active" aria-current="page" href="<?php echo URLROOT; ?>"><i class="bi bi-house-fill me-2"></i>Home</a>
        </li>
        <li class="nav-item rounded">
          <a class="nav-link" href="<?php echo URLROOT; ?>/pages/about"><i class="bi bi-people-fill me-2"></i>About</a>
        </li>
        <?php if (isset($_SESSION['user_id'])) : ?>
          <li class="nav-item rounded">
            <a class="nav-link active" aria-current="page" href="<?php echo URLROOT; ?>/users/logout"><i class="bi bi-house-fill me-2"></i>Logout</a>
          </li>
        <?php else : ?>
          <li class="nav-item rounded">
            <a class="nav-link active" aria-current="page" href="<?php echo URLROOT; ?>/users/login"><i class="bi bi-house-fill me-2"></i>Login</a>
          </li>
          <li class="nav-item rounded">
            <a class="nav-link active" aria-current="page" href="<?php echo URLROOT; ?>/users/register"><i class="bi bi-house-fill me-2"></i>Register</a>
          </li>
        <?php endif; ?>
        <!-- <li class="nav-item dropdown rounded">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-person-fill me-2"></i>Profile</a>
          <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Account</a></li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="#">Logout</a></li>
          </ul>
        </li> -->
      </ul>
    </div>
  </div>
</nav>