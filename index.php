<!DOCTYPE html>
<html lang="en">
<head>
    <title>Welcome to File Share</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="icon"
          href="https://github.com/francisohara24/PHP-File-Share/blob/master/content/logo-small.jpeg?raw=true">
</head>
<body class="container">
<h2 style="text-align: center; font-style: italic">PHP FileShare</h2>


<form class="form" action="" method="post">
    <div>
        <h4>Login</h4>
    </div>

    <div class="mb-3 form-floating">
        <input type="text" class="form-control" id="username" name="username"
               value="<?php echo count($_POST) > 0 ? $_POST["username"] : "" ?>"
               placeholder="Enter your username" required>
        <label for="username" class="form-label">Username </label>
    </div>

    <div class="mb-3 form-floating">
        <input type="password" class="form-control" id="password" name="password"
               value="<?php echo count($_POST) > 0 ? $_POST["password"] : "" ?>"
               placeholder="Enter your password" required>
        <label for="password" class="form-label">Password </label>
    </div>

    <div class="mb-3 form-check form-check-inline">
        <label for="employee" class="form-check-label"> Employee </label>
        <input type="radio" class="form-check-input" id="employee" checked name="account-type" value="employee"
               required>
    </div>

    <div class="mb-3 form-check form-check-inline">
        <label for="manager" class="form-check-label"> Manager</label>
        <input type="radio" class="form-check-input" id="manager" name="account-type" value="manager">
    </div>
    <div class="mt-2">
        <button class="btn btn-primary" type="submit" name="login">Log In</button>
        <button class="btn btn-primary" type="submit" name="signup" formaction="signup.php">Sign Up</button>
        <div class="text-center">No account? <a href="signup.php">Sign up</a></div>
    </div>

    <?php if (isset($_POST["login"])) authorize($_POST["username"], $_POST["password"]); ?>

</form>
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