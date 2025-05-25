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
    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-light bg-light static-top">
            <div class="container">
                <a class="navbar-brand" href="index.php">
                    <img src="assets/logo-small.png" alt="File Share app logo: a white folder with the letters F and S written on it in blue.">
                    <span class="align-middle">File Share</span>
                </a>
                <a class="btn btn-primary rounded-5" href="sign-in.php">Sign In</a>
            </div>
        </nav>

        <!-- Masthead-->
        <header class="main-header">

            <div class="container position-relative">
                <div class="row justify-content-center">
                    <div class="col-xl-6">
                        <div class="text-center text-white">
                            <!-- Page heading-->
                            <h1 class="mb-5">Share your files securely on the cloud</h1>
                            <a class="btn btn-primary btn-lg rounded-5" href="sign-up.php">Create a Free Account</a>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- App Features Grid -->
        <section class="features-icons bg-light text-center">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                            <div class="features-icons-icon d-flex"><i class="bi-cloud-check m-auto text-primary"></i></div>
                            <h3>Secure Storage</h3>
                            <p class="lead mb-0">Uploaded files are stored securely with Google Cloud Platform.</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                            <div class="features-icons-icon d-flex"><i class="bi-people m-auto text-primary"></i></div>
                            <h3>Multi-User Support</h3>
                            <p class="lead mb-0">Allows different users to login and share files.</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="features-icons-item mx-auto mb-0 mb-lg-3">
                            <div class="features-icons-icon d-flex"><i class="bi-terminal m-auto text-primary"></i></div>
                            <h3>Easy to Use</h3>
                            <p class="lead mb-0">Just create an account, sign in, and start sharing!</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Footer -->
        <footer class="footer bg-dark">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 h-100 text-center text-lg-start my-auto">
                        <ul class="list-inline mb-2">
                            <li class="list-inline-item"><a href="sign-in.php">Sign In</a></li>
                            <li class="list-inline-item">⋅</li>
                            <li class="list-inline-item"><a href="sign-up.php">Sign Up</a></li>

                        </ul>
                        <p class="text-muted small mb-4 mb-lg-0" id="footer-text">placeholder-footer-text</p>
                    </div>
                    <div class="col-lg-6 h-100 text-center text-lg-end my-auto">
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item me-4">
                                <a href="https://github.com/francis-ohara"><i class="bi-github fs-3"></i></a>
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
