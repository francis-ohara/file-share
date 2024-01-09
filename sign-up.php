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
        <!-- Custom CSS (includes Bootstrap) -->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body style="background-image: url('assets/landing-page-2.jpeg'); background-size: cover; background-repeat: no-repeat; background-position: center">
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

        <!-- Signup Form    -->
        <!--
            Form content
                2. Email
                3. First Name
                4. Last Name
                5. Password
                6. Confirm password
                7. Phone Number (for extra security) ## maybe?
                8. I confirm that the above information is correct and true to my knowledge.
        -->



        <div class="container d-flex flex-column align-items-center" style="padding-top: 10vh; padding-bottom: 10vh;">
            <!-- TODO: Add php code to control which alert gets echoed.
               Success alert could be dismissible modal with go to sign up page button.
               Eg. failure message: an account with that email already exists, ensure the passwords you entered match
            -->
            <div class="d-none alert alert-danger alert-dismissible fade show" role="alert" id="alert-duplicate-email">
                An account with that email already exists. Please use a different email.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>

            <div class="d-none alert alert-danger alert-dismissible fade show" role="alert" id="alert-password-mismatch">
                The passwords you entered do not match. Please try again.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>


            <div class="card w-100 rounded-4 p-5 shadow-lg" style="max-width: 600px; min-width: 500px;">
                <img src="assets/logo.png"
                     alt="File Share app logo: a white folder with the letters F and S written on it in blue."
                     width="120px" class="mb-4 align-self-center">

                <form action="" method="post" class="">
                    <div class="container border rounded-3 px-5 pb-5 pt-4">
                    <div class="mb-5 mt-2">
                        <h1 class="text-center display-6 fs-2">Create an Account</h1>
                    </div>
                    <div class="row" >
                        <!--  div for both first and last name -->
                        <div class="col">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="first-name" name="user[first-name]" placeholder="First name" aria-describedby="name-help" required>
                                <label for="first-name" class="form-label">First Name</label>
                            </div>
                        </div>

                        <div class="col ">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="last-name" name="user[first-name]" placeholder="Last name" aria-describedby="name-help" required>
                                <label for="last-name" class="form-label">Last Name</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-text mb-4" id="name-help">&nbsp &nbsp Enter your first and last name.</div>

                    <div class="mb-4 form-floating" >
                        <!--  email -->
                        <input  type="email" class="form-control" id="email" name="user[email]" placeholder="Email address" aria-describedby="email-help" required>
                        <label for="email" class="form-label">Email address</label>
                        <div class="form-text" id="email-help">&nbsp&nbsp Enter the address you will use to log in to your account.</div>
                    </div>


                    <div class="row ">
                        <div class="col">
                            <!-- password -->
                            <div class="form-floating">
                                <input type="password" class="form-control" id="password" name="user[password]" placeholder="Password" aria-describedby="password-help" required>
                                <label for="password" class="form-label">Password</label>
                            </div>
                        </div>

                        <div class="col">
                            <!--  confirm password-->
                            <div class="form-floating">
                                <input type="password" class="form-control" id="confirm-password" name="user[confirm-password]" placeholder="Confirm password" required>
                                <label for="confirm-password" class="form-label">Confirm password</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-text mb-3" id="password-help">&nbsp &nbsp Create a new password for your account.</div>

                    <button class="btn btn-primary mt-3 mb-4 w-100" type="submit">Continue</button>

                        <div class="text-center mb-3">
                            Already a member? &nbsp <a href="sign-in.php">Sign in</a>
                        </div>
                    </div>
                </form>


            </div>
        </div>

        <!-- Footer -->
        <footer class="bg-dark" style="padding-top: 1rem; padding-bottom: 1rem;">
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
    require "backend/helpers.php";
    // $msg = create_account();
?>