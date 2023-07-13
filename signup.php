<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sign Up to Creative Learning</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body class="container">
<h2 style="text-align: center"> CREATE AN ACCOUNT</h2>
<?php
if (isset($_POST["create"])) {
    $is_created = create_account();
    if ($is_created)
        echo "<h4 style='color:green'>Account Created Successfully! Click <a href='login.php'>here</a> to go to Log in Page!</h4>";
    else echo "<h4 style='color: darkred'>Account Creation Failed! Try Again!></h4>";
} ?>

<form action="" method="post" class="form">
    <fieldset>
        <legend>Create</legend>
        <label>Username: <input type="text" id="username" name="username"
                                value="<?php echo count($_POST) > 0 ? $_POST["username"] : "" ?>"
                                placeholder="Enter Username" required></label>
        <br><br>
        <label>Password: <input type="password" id="password" name="password"
                                value="<?php echo count($_POST) > 0 ? $_POST["password"] : "" ?>"
                                placeholder="Enter Password" required></label>
        <br>
        <br>

        <label>First Name: <input type="text" id="first-name" name="first-name" required></label>
        <br>
        <br>
        <label>Last Name: <input type="text" id="last-name" name="last-name" required></label>
        <br><br>
        <label>Email: <input type="email" id="email" name="email" required></label>
        <br>
        <br>
        <label>Date of Birth: <input type="date" id="date-of-birth" name="date-of-birth" required></label>
        <br>
        <br>
        <label>Permanent Address: <input type="text" id="permanent-address" name="permanent-address" required></label>
        <br>
        <br>
        <label>Phone Number: <input type="tel" id="phone-number" name="phone-number" required pattern="[0-9]{9,12}"
                                    title="Begin with 3-digit country code without +, and don't include leading 0."></label>
        <br><br>
        <div>
            Account Type: <br>
            <label>Employee<input type="radio" id="employee" name="account-type" value="employee" required></label>
            <label>Manager<input type="radio" id="manager" name="account-type" value="manager"></label>
        </div>
        <br>
        <label> Creative Learning Store:
            <select id="store" name="store" required>
                <option value="">---Please select the store you work at or oversee---</option>
                <option value="store_1">Store A</option>
                <option value="store_2">Store B</option>
                <option value="store_3">Store C</option>
                <option value="store_4">Store D</option>
                <option value="store_5">Store E</option>
                <option value="store_6">Store F</option>
            </select>
        </label>
        <br><br>
        <label>Position: <input type="text" id="position" name="position" required></label>
        <br><br>
        <label> Date Employed: <input type="date" id="date-employed" name="date-employed" required></label>
        <br><br>
        <br>
        <label><input type="checkbox" required>I verify that all information entered above is true and accurate.</label>
        <br
        <br>
        <label><input type="checkbox" required>I agree to all Creative Learning Company Policies</label>
        <br><br>
        <button type="submit" name="create">Create Account</button>
        <br>
    </fieldset>
</form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
</body>
</html>
<?php
function create_account()
{
    $conn = new mysqli("localhost", "root", "password", "creative_learning");
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