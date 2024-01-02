<!DOCTYPE html>
<html lang="en">
<head>
    <title>Create an Account</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="icon"
          href="https://github.com/francisohara24/PHP-File-Share/blob/master/content/logo-small.jpeg?raw=true">
</head>

<body class="container">
<h2 style="text-align: center; font-style: italic">PHP FileShare</h2>

<?php
if (isset($_POST["create-account"])) {
    $is_created = create_account();
    if ($is_created)
        echo "<h4 style='color:green'>Account Created Successfully! Click <a href='index.php'>here</a> to go to Log in Page!</h4>";
    else echo "<h4 style='color: darkred'>Account Creation Failed! Try Again!></h4>";
} ?>

<form action="" method="post" class="form">

    <h4>Create an Account</h4>

    <div class="mb-3">
        <label class="form-label fw-semibold" for="username">Username</label>
        <input type="text" class="form-control" id="username" name="username"
               value="<?php echo count($_POST) > 0 ? $_POST["username"] : "" ?>"
               placeholder="Enter Username" required pattern="[A-Za-z0-9_]{2,}" aria-describedby="username-form-text">
        <div id="username-form-text" class="form-text">Your username must be more than 2 characters long and may only
            contain letters, numbers, and underscores.
        </div>
    </div>

    <div class="mb-3">
        <label class="form-label fw-semibold" for="password">Password</label>
        <input type="password" class="form-control" id="password" name="password"
               value="<?php echo count($_POST) > 0 ? $_POST["password"] : "" ?>"
               placeholder="Enter Password" required pattern=".{8,}" aria-describedby="password-form-text">
        <div id="password-form-text" class="form-text">Your password must be at least 8 characters long.</div>
    </div>

    <div class="mb-2 fw-semibold">Full Name</div>
    <div class="form-floating mb-3">
        <input type="text" class="form-control" id="first-name" name="first-name" placeholder="Enter First Name"
               required>
        <label for="first-name" class="form-label">First Name</label>
    </div>

    <div class="form-floating mb-3">
        <input type="text" class="form-control" id="last-name" name="last-name" placeholder="Enter Last Name" required>
        <label for="last-name" class="form-label">Last Name</label>
    </div>

    <div class="mb-3">
        <label for="email" class="form-label fw-semibold">Email</label>
        <input type="email" class="form-control" id="email" name="email" required placeholder="Enter email address">
    </div>

    <div class="mb-3">
        <label for="date-of-birth" class="form-label fw-semibold">Date of Birth</label>
        <input type="date" class="form-control" id="date-of-birth" name="date-of-birth" required>
    </div>

    <div class="mb-5 mt-5">

        <div class="mb-3">
            <label class="form-label fw-semibold" for="street-address">Street Address</label>
            <input type="text" class="form-control" id="street-address" name="street-address"
                   placeholder="1234 Accra Street" required>
        </div>

        <div class="mb-3">
            <label for="city" class="form-label fw-semibold">City</label>
            <input type="text" class="form-control" id="city" name="city" required>
        </div>

        <div class="mb-3">
            <label for="state" class="form-label fw-semibold">State</label>
            <select class="form-select" aria-label="Default select example" id="state" name="state">
                <option selected>Select a State</option>
                <option value="AL">Alabama</option>
                <option value="AK">Alaska</option>
                <option value="AZ">Arizona</option>
                <option value="AR">Arkansas</option>
                <option value="CA">California</option>
                <option value="CO">Colorado</option>
                <option value="CT">Connecticut</option>
                <option value="DE">Delaware</option>
                <option value="DC">District Of Columbia</option>
                <option value="FL">Florida</option>
                <option value="GA">Georgia</option>
                <option value="HI">Hawaii</option>
                <option value="ID">Idaho</option>
                <option value="IL">Illinois</option>
                <option value="IN">Indiana</option>
                <option value="IA">Iowa</option>
                <option value="KS">Kansas</option>
                <option value="KY">Kentucky</option>
                <option value="LA">Louisiana</option>
                <option value="ME">Maine</option>
                <option value="MD">Maryland</option>
                <option value="MA">Massachusetts</option>
                <option value="MI">Michigan</option>
                <option value="MN">Minnesota</option>
                <option value="MS">Mississippi</option>
                <option value="MO">Missouri</option>
                <option value="MT">Montana</option>
                <option value="NE">Nebraska</option>
                <option value="NV">Nevada</option>
                <option value="NH">New Hampshire</option>
                <option value="NJ">New Jersey</option>
                <option value="NM">New Mexico</option>
                <option value="NY">New York</option>
                <option value="NC">North Carolina</option>
                <option value="ND">North Dakota</option>
                <option value="OH">Ohio</option>
                <option value="OK">Oklahoma</option>
                <option value="OR">Oregon</option>
                <option value="PA">Pennsylvania</option>
                <option value="RI">Rhode Island</option>
                <option value="SC">South Carolina</option>
                <option value="SD">South Dakota</option>
                <option value="TN">Tennessee</option>
                <option value="TX">Texas</option>
                <option value="UT">Utah</option>
                <option value="VT">Vermont</option>
                <option value="VA">Virginia</option>
                <option value="WA">Washington</option>
                <option value="WV">West Virginia</option>
                <option value="WI">Wisconsin</option>
                <option value="WY">Wyoming</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="zip-code" class="form-label fw-semibold">Zip Code</label>
            <input type="text" class="form-control" id="zip-code" name="zip-code" placeholder="00000" pattern="[0-9]{5}" required>
        </div>
    </div>


    <div class="mb-3">
        <label for="phone-number" class="form-label fw-semibold">Phone Number</label>
        <input type="tel" class="form-control" id="phone-number" name="phone-number" required pattern="[0-9]{9,12}">
        <div class="form-text">Begin with 3-digit country code without + sign, and don't include leading 0.</div>
    </div>

    <div class="mb-2 fw-semibold"> Account Type</div>
    <div class="mb-3 form-check-inline">
        <label for="employee" class="form-check-label">Employee</label>
        <input type="radio" class="form-check-input" id="employee" name="account-type" value="employee" required>
    </div>
    <div class="mb-3 form-check-inline">
        <label for="manager" class="form-check-label">Manager</label>
        <input type="radio" class="form-check-input" id="manager" name="account-type" value="manager">
    </div>

    <div class="mb-3">
        <label for="job-title" class="form-label fw-semibold">Job Title</label>
        <input type="text" class="form-control" id="job-title" name="job-title" required>
        <div class="form-text">Enter your role within the organization.</div>
    </div>

    <div class="mb-3">
        <label for="date-employed" class="form-label fw-semibold">Date Employed</label>
        <input type="date" class="form-control" id="date-employed" name="date-employed" required>
    </div>
    <div class="mb-3 mt-4">
        <div class="form-check">
            <label for="agreement-1" class="form-check-label"> I verify that all information entered above is true and
                accurate.</label>
            <input id="agreement-1" class="form-check-input" type="checkbox" required>
        </div>
        <div class="form-check">
            <label for="agreement-2" class="form-check-label">I agree to all organization policies.</label>
            <input id="agreement-2" class="form-check-input" type="checkbox" required>
        </div>
    </div>

    <button type="submit" class="btn btn-primary" name="create-account">Create Account</button>

    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
            crossorigin="anonymous"></script>
</body>
</html>

<?php
function create_account()
{
    $conn = new mysqli("localhost", "root", "password", "file_share");
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $firstname = $_POST["first-name"];
    $lastname = $_POST["last-name"];
    $date_of_birth = $_POST["date-of-birth"];
    $permanent_address = $_POST["permanent-address"];
    $phone_number = $_POST["phone-number"];
    $date_employed = $_POST["date-employed"];
    $position = $_POST["position"];
    $store = $_POST["store"][-1];
    $table = $_POST["account-type"] == "employee" ? "employee" : "manager";
    $col1 = $table . "_username";
    $col2 = $table . "_email";
    $col3 = $table . "_password";
    $col4 = $table . "_firstname";
    $col5 = $table . "_lastname";
    $col6 = $table . "_date_of_birth";
    $col7 = $table . "_permanent_address";
    $col8 = $table . "_phone_number";
    $col9 = $table . "_date_employed";
    $col10 = $table . "_position";
    $col11 = $table . "_store";

    $query = "INSERT INTO " . $table . "($col1, $col2, $col3, $col4, $col5, $col6, $col7, $col8, $col9, $col10, $col11)
                VALUES ('$username', '$email', '$password', '$firstname','$lastname', '$date_of_birth', '$permanent_address', '$phone_number', '$date_employed', '$position', '$store' ); 
   ";
    return $conn->query($query);
}

?>