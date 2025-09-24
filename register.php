<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $fullname = strtoupper($_POST['Fullname']); // uppercase
    $email = $_POST['email'];
    $dob = $_POST['dob'];
    $phone = $_POST['Phoneno'];
    $undergrad = $_POST['Undergraduate'];
    $course = $_POST['SelectCourse'];
    $state = $_POST['state'];

    // Hash the password securely
    $password = password_hash($_POST['Password'], PASSWORD_DEFAULT);

    // Format the data line
    $line = "$fullname, $email, $dob, $phone, $undergrad, $course, $state, $password\n";

    // Append to local file
    file_put_contents("registrations.txt", $line, FILE_APPEND);

    // Show alert to user
    echo "<script>alert('Thanks for Registration!!\nWe Will Get Back To You Soon');</script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration Form</title>
    <style>
        body { font-family: Arial, sans-serif; background: #f4f4f9; }
        form { max-width: 600px; margin: 30px auto; padding: 20px; background: #fff; border-radius: 10px; box-shadow: 0 0 15px rgba(0,0,0,0.1); }
        fieldset { border-radius: 10px; }
        label { display: block; margin: 10px 0 5px; font-weight: bold; }
        input, select { width: 100%; padding: 8px; border-radius: 5px; border: 1px solid #ccc; }
        .radio-group { display: flex; gap: 20px; margin-bottom: 10px; }
        .radio-group label { font-weight: normal; display: flex; align-items: center; }
        .form-buttons { text-align: center; margin-top: 20px; }
        input[type="submit"], input[type="reset"] { padding: 10px 20px; margin: 5px; border: none; border-radius: 5px; cursor: pointer; font-weight: bold; }
        input[type="submit"] { background-color: #4CAF50; color: white; }
        input[type="reset"] { background-color: #f44336; color: white; }
    </style>
</head>
<body>

<form action="register.php" method="post">
    <fieldset>
        <legend>FILL THE FORM ONLY WITH CAPITAL LETTERS</legend>

        <label for="fullname">Enter Your Fullname:</label>
        <input type="text" id="fullname" name="Fullname" required>

        <label for="email">Enter Your Email ID:</label>
        <input type="email" id="email" name="email" required>

        <label for="password">Enter Your Password:</label>
        <input type="password" id="password" name="Password" required>

        <label for="dob">Enter Your Date of Birth:</label>
        <input type="date" id="dob" name="dob" required>

        <label for="phoneno">Enter Your Phone Number:</label>
        <input type="number" id="phoneno" name="Phoneno" required>

        <label>Undergraduate Course:</label>
        <div class="radio-group">
            <label><input type="radio" name="Undergraduate" value="B.Sc" required> B.Sc</label>
            <label><input type="radio" name="Undergraduate" value="B.Com"> B.Com</label>
            <label><input type="radio" name="Undergraduate" value="BBA"> BBA</label>
        </div>

        <label>Select Course:</label>
        <div class="radio-group">
            <label><input type="radio" name="SelectCourse" value="MCA" required> MCA</label>
            <label><input type="radio" name="SelectCourse" value="MBA"> MBA</label>
        </div>

        <label for="state">State:</label>
        <select id="state" name="state" required>
            <option value="">--Select State--</option>
            <option value="Telangana">Telangana</option>
            <option value="Andhra Pradesh">Andhra Pradesh</option>
            <option value="Maharashtra">Maharashtra</option>
            <option value="Tamil Nadu">Tamil Nadu</option>
            <option value="Karnataka">Karnataka</option>
        </select>

        <div class="form-buttons">
            <input type="submit" value="Submit">
            <input type="reset" value="Reset">
        </div>
    </fieldset>
</form>

</body>
</html>
