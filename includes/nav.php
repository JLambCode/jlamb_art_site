<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a href="landing.php" class="navbar-brand"><img src="" alt="JLamb Art Logo"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMobile" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="d-flex justify-content-end">
            <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarMobile">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Joe
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="joe_about.php">About</a></li>
                            <li><a class="dropdown-item" href="joe_art.php">Art</a></li>
                            <li><a class="dropdown-item" href="joe_blog.php">Blog</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Juliana
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="juliana_about.php">About</a></li>
                            <li><a class="dropdown-item" href="juliana_art.php">Art</a></li>
                            <li><a class="dropdown-item" href="juliana_blog.php">Blog</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Jeremy
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="jeremy_about.php">About</a></li>
                            <li><a class="dropdown-item" href="jeremy_art.php">Art</a></li>
                            <li><a class="dropdown-item" href="jeremy_blog.php">Blog</a></li>
                        </ul>
                    </li>
                    <li>
                        <div class="d-flex m-1 visually-hidden">
                            <button class="btn btn-outline-danger">Logout</button>
                        </div>
                        <div class="d-flex m-1">
                            <button class="btn btn-outline-dark" data-bs-toggle="modal" data-bs-target="#loginModal">Login</button>
                        </div>
                    </li>
                </ul>
            </div>
        </div>  
    </div>
</nav>
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="loginModalLabel">Admin Login</h1>
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
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>