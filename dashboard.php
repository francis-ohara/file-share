<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
        <meta name="description"
              content="A full-stack web application for sharing files between employees and managers at an organization."/>
        <meta name="author" content="Francis O'Hara"/>
        <title>File Share</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.png"/>
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet"
              type="text/css"/>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet"
              type="text/css"/>
        <!-- Custom CSS (includes Bootstrap) -->
        <link href="css/styles.css" rel="stylesheet"/>
    </head>
    <body style="background-image: url('assets/landing-page-2.jpeg'); background-size: cover; background-repeat: no-repeat; height: 100vh; background-position: center">
        <!-- Navigation-->
        <nav class="navbar navbar-light bg-light static-top">
            <div class="container">
                <a class="navbar-brand" href="index.php">
                    <img src="assets/logo-small.png"
                         alt="File Share app logo: a white folder with the letters F and S written on it in blue.">
                    <span class="align-middle">File Share</span>
                </a>

                <!--  TODO: Replace with appropriate elements for user profile picture and name
                         How? The PHP server will give us the link to the picture in the Google Cloud storage bucket.
                         This link will then be used as the src attribute for the profile picture <img> element.
                  -->

                <div>
                    <button class="btn btn-secondary rounded-5">Picture</button>
                    <button class="btn btn-secondary rounded-5" href="sign-in.php">User Full Name</button>
                </div>
            </div>
        </nav>
        <!-- TODO: Add welcome message
               <h1> or other element that displays "Welcome, <first name of user>".
               Sub-heading: You have .. new files to view.
               -->

        <!-- TODO: Dashboard (will be on inbox tab by default)
                1. Status bar with graphic showing how much storage the user has left.
                    Each user will have a 1 GB storage capacity limit.
                2. Table for inbox tab showing all files received by the user.
                    i. file name
                    ii. file type
                    iii. date-shared/uploaded
                    iv. file size
                    // possibly encapsulated in an `actions` dropdown
                    v. Download button
                    vi. Delete button
                    vii. Share


        -->


        <!-- TODO: Sidebar on left
                1. Home - Display all newly shared files.
                2. Trash - Stores info about deleted files.
                3. Send files -
                        i. Table of previously sent files
                        ii. Send/compose button:
                                Opens modal for uploading a file, adding a title, adding a description, entering the recipient's address(multiple). with send button and cancel button
                                if -> storage limit reached FOR RECIPIENT: opens modal stating that recipient cannot receive any more files.
                                else -> file gets uploaded to server, php code accesses Google cloud storage service and uploads file to storage bucket, the link to the file is stored in MySQL database table created for all files.
                                    ## Each user will have a directory on the Cloud storage bucket with their content only.
                                    ## There will be temporary folder on the server for storing all files received from the client regardless of the user.
                                        - This will be a temporary storage buffer for files about to be immediately uploaded to the Google Cloud storage bucket (No need to download to server, just give the storage bucket link to the user and have them do that).
                                    ## Files will be deleted using the shell_exec() command after file is successfully uploaded to cloud storage bucket.
                               finally:
                                    modal pops up stating overall status of the operation.

                ## Create separate main page content for each tab, and use JavaScript to add or remove d-none class depending on which tab is selected.
         -->

        <!-- Footer -->
        <footer class="footer-narrow bg-dark fixed-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 h-100 text-center text-lg-start my-auto">

                        <p class="text-muted small mb-4 mb-lg-0">Copyright &copy; 2024 &nbsp Francis O'Hara. &nbsp&nbsp All
                            Rights Reserved.</p>
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
     // require "backend/helpers.php"
?>