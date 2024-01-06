<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="A full-stack web application for sharing files between employees and managers at an organization." />
        <meta name="author" content="Francis O'Hara" />
        <title>File Share</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.png" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" type="text/css" />
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Custom CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body style="background-image: url('assets/landing-page-2.jpeg'); background-size: cover; background-repeat: no-repeat; height: 100vh; background-position: center">
            <!-- Navigation-->
            <nav class="navbar navbar-light bg-light static-top">
                <div class="container">
                    <a class="navbar-brand" href="index.php">
                        <img src="assets/logo-small.png" alt="File Share app logo: a white folder with the letters F and S written on it in blue.">
                        <span class="align-middle">File Share</span>
                    </a>
                    <a class="btn btn-primary rounded-5" href="sign-up.php">Create an Account</a>
                </div>
            </nav>

            <!-- TODO: Add alert that displays after php code confirms no account exists with the entered email or password.           -->



            <!-- Login Form    -->
            <div class="login-form d-flex justify-content-center">
                    <div class="card w-100 mx-3 p-5 rounded-5 shadow-lg" style="max-width: 400px; min-width:400px">
                        <form action="" class="text-center">
                            <img src="assets/logo.png" alt="File Share app logo: a white folder with the letters F and S written on it in blue." width="120px" class="mb-4">
                            <div class="form-floating mb-2">
                                <input type="email" class="form-control" id="email" name="user[email]" placeholder="Email address" required>
                                <label class="form-label" for="email">Email address</label>
                            </div>
                            <div class="form-floating mb-4">
                                <input type="password" class="form-control" id="password" name="user[password]" placeholder="Password" required>
                                <label for="password" class="form-label">Password</label>
                            </div>
                            <div>
                                <button class="btn btn-primary w-100 mb-4" type="submit">
                                    Sign In
                                </button>
                            </div>
                            <div >
                                Not a member?&nbsp <a href="sign-up.php"> Sign up</a>
                            </div>
                        </form>
                    </div>
            </div>



            <!-- Footer -->
            <footer class="footer-narrow bg-dark fixed-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 h-100 text-center text-lg-start my-auto">

                            <p class="text-muted small mb-4 mb-lg-0">Copyright &copy; 2024 &nbsp Francis O'Hara. &nbsp&nbsp All Rights Reserved.</p>
                        </div>
                        <div class="col-lg-6 h-100 text-center text-lg-end my-auto">
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item me-4">
                                    <a href="https://github.com/francisohara24"><i class="bi-github fs-3"></i></a>
                                </li>
                                <li class="list-inline-item me-4">
                                    <a href="https://linkedin.com/in/francis-ohara"><i class="bi-linkedin fs-3"></i></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="mailto:franciskohara@gmail.com"><i class="bi bi-envelope-fill fs-3"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>

            <!-- Bootstrap core JS-->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
            <!-- Custom JS-->
            <script src="js/scripts.js"></script>
        </body>
</html>

<?php

?>