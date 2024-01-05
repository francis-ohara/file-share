<!DOCTYPE html>
<html lang="en">
<head>
    <title>Welcome to File Share</title>
    <link rel="icon" href="content/images/logo.png">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>

<!-- TODO: Implement authorize to echo alert, pop-up or appropriate when authorization was not possible. -->
<?php if (isset($_POST["login"])) authorize($_POST["username"], $_POST["password"]); ?>


<!--    TODO: Assimilate into Nav bar with icon on left, tiny, PNG w/ transparent background-->
<nav class="row">
    <h2 style="text-align: center; font-style: italic">        PHP FileShare</h2>
</nav>


<div class="container">
    <!-- TODO: Convert into hovering card-like thing with shadow and plain background-->
    <div class="row align-items-center justify-content-center">
        <div class="col-md-4">
            <img class="img-fluid" src="content/images/3d_logo_1.png"
                 alt="A box with the words File Share on it with an arrow popping out of the box towards a cloud."
                style="object-fit: cover; object-position: center; width: 50vw">
        </div>
        <div class="col-md-4">
            <form class="form" action="" method="post">
                <div class="container">
                    <div class="row mb-3">
                        <div class="col">
                            <h4>Sign In</h4>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="username" name="username"
                                       value="<?php echo count($_POST) > 0 ? $_POST["username"] : "" ?>"
                                       placeholder="Enter your username" required>
                                <label for="username" class="form-label">Username </label>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col">
                            <div class="form-floating">
                                <input type="password" class="form-control"
                                       id="password" name="password"
                                       value="<?php echo count($_POST) > 0 ? $_POST["password"] : "" ?>"
                                       placeholder="Enter your password" required>
                                <label for="password" class="form-label">Password </label>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col">
                            <div class="form-check-inline">
                                <input type="radio" class="form-check-input" id="employee" checked
                                       name="account-type"
                                       value="employee"
                                       required>
                                <label for="employee" class="form-check-label"> Employee </label>
                            </div>
                            <div class="form-check-inline">
                                <input type="radio" class="form-check-input" id="manager"
                                       name="account-type"
                                       value="manager">
                                <label for="manager" class="form-check-label"> Manager</label>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-2 mb-3">
                        <div class="col d-flex justify-content-center">
                            <!--  TODO: Figure out how to widen button -->
                            <button class="btn btn-primary btn-block shadow-lg w-100 py-2" type="submit"
                                    name="login">Sign In
                            </button>

                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <div class="text-center">Not a member? <a href="signup.php">Sign up</a>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>
</html>

<?php
function authorize($username, $password)
{
    // connect to creative learning database
    $conn = new mysqli("localhost", "root", "password", "file_share");

    $main_page = $_POST['account-type'] == "employee" ? "main-employee.php" : "main-manager.php";
    $table = $_POST['account-type'] == "employee" ? "employee" : "manager";

    $query = "SELECT * FROM $table WHERE" . " $table" . "_username='$username';";
    $result = $conn->query($query);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if ($row[$table . "_username"] === $username && $row[$table . "_password"] === $password) {
            echo "<strong>Welcome!</strong>";
            $conn->close();
            Header("Location: " . $main_page . "?username=" . $username);
        } else echo "<strong style='color:darkred>Invalid Username and/or Password!</strong>";
    } else echo "<strong style='color:darkred'>Invalid Username!</strong>";
}


?>