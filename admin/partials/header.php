<?php
session_start();
if (isset($_SESSION['registered']) == true) {
    echo '<div class="container">
    <div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Registered</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
</div>';
    unset($_SESSION['registered']);
}

if (isset($_SESSION['invalid_credentials']) == true) {
    echo '<div class="container">
    <div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Invalid credentials</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
</div>';
    unset($_SESSION['invalid_credentials']);
}

if (isset($_SESSION['user_not_found']) == true) {
    echo '<div class="container">
    <div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>User not found</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
</div>';
    unset($_SESSION['user_not_found']);
}
?>

<div class="container">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Admin</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Services</a>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item" href="#">Service 1</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">Service 2</a>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">Service 3</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                </ul>
                <form class="d-flex me-3" role="search">
                    <input type="search" class="form-control me-2" placeholder="Search">
                </form>
                <!-- Login Modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#loginModal">
                    Login
                </button>
                <div class="modal fade" id="loginModal" tabindex="-1">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5">Welcome Back!</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form action="login.php" method="post">
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label for="emailFormControlInput" class="form-label">Email</label>
                                        <input type="email" name="email" class="form-control" id="emailFormControlInput" placeholder="Email" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="passwordFormControlInput" class="form-label">Password</label>
                                        <input type="password" name="password" class="form-control" id="passwordFormControlInput" placeholder="Password" required>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" name="login-btn" class="btn btn-primary">Login</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Register Modal -->
                <button type="button" class="btn btn-primary ms-3" data-bs-toggle="modal" data-bs-target="#registerModal">
                    Register
                </button>
                <div class="modal fade" id="registerModal" tabindex="-1">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5">Create Account</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form action="register.php" method="post">
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label for="nameFormControlInput" class="form-label">Name</label>
                                        <input type="text" name="name" class="form-control" id="nameFormControlInput" placeholder="Name" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="phoneFormControlInput" class="form-label">Phone Number</label>
                                        <input type="text" name="phone_number" class="form-control" id="phoneFormControlInput" placeholder="Phone Number" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="emailFormControlInput" class="form-label">Email</label>
                                        <input type="email" name="email" class="form-control" id="emailFormControlInput" placeholder="Email" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="passwordFormControlInput" class="form-label">Password</label>
                                        <input type="password" name="password" class="form-control" id="passwordFormControlInput" placeholder="Password" required>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" name="register-btn" class="btn btn-primary">Register</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="dropdown ms-3">
                    <?php if (isset($_SESSION['loggedin']) == true):
                        echo '<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Hello, ' . $_SESSION["loggedin_user_name"] . '</a>';
                    else:
                    // header("location: index.php");
                    endif;
                    ?>
                    <ul class="dropdown-menu">
                        <li>
                            <a class="dropdown-item" href="profile.php">Profile</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="settings.php">Settings</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="logout.php">Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</div>