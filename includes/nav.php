<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid m-3">
        <a href="landing.php" class="navbar-brand"><img src="" alt="JLamb Art Logo"></a>
        <div class="d-flex justify-content-end">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMobile" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarMobile">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Joe
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="joe/about.php">About</a></li>
                            <li><a class="dropdown-item" href="joe/art.php">Art</a></li>
                            <li><a class="dropdown-item" href="joe/blog.php">Blog</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Juliana
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="juliana/about.php">About</a></li>
                            <li><a class="dropdown-item" href="juliana/art.php">Art</a></li>
                            <li><a class="dropdown-item" href="juliana/blog.php">Blog</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Jeremy
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="jeremy/about.php">About</a></li>
                            <li><a class="dropdown-item" href="jeremy/art.php">Art</a></li>
                            <li><a class="dropdown-item" href="jeremy/blog.php">Blog</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Collabs
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="collabs/about.php">About</a></li>
                            <li><a class="dropdown-item" href="collabs/art.php">Art</a></li>
                            <li><a class="dropdown-item" href="collabs/blog.php">Blog</a></li>
                        </ul>
                    </li>

                    <?php 
                        if(isset($_SESSION['user_role']) == 'Admin'){
                            echo '<li><div class="d-flex m-1">
                                        <a class="btn btn-outline-info" href="admin_console.php" role="button">
                                            Admin Console
                                        </a>
                                  </div></li>';
                        }
                    ?>

                    <?php 
                        if(isset($_SESSION['user_role']) == 'Admin'){
                            echo '<li><div class="d-flex m-1">
                                        <button class="btn btn-outline-danger" type="button">
                                            Logout
                                        </button>
                                    </div></li>';
                        } else {
                            echo '<li><div class="d-flex m-1">
                                    <button class="btn btn-outline-dark" type="button" data-bs-toggle="modal" data-bs-target="#loginModal">
                                        Login
                                    </button>
                                  </div></li>';
                        }
                    ?>

                </ul>
            </div>  
        </div>
    </div>
</nav>
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="loginModalLabel">Admin Console</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="POST">
                    <div class="mb-3">
                        <label for="loginUsername" class="form-label">Username</label>
                        <input type="email" class="form-control" id="loginUsername" aria-describedby="descriptionLoginUsername">
                    </div>
                    <div class="mb-3">
                        <label for="loginPassword" class="form-label">Password</label>
                        <input type="password" class="form-control" id="loginPassword">
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <div class="justify-content-end">
                        <button type="submit" class="btn btn-primary">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>