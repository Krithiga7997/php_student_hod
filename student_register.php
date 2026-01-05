<?php
include 'db.php';
if ($_POST) {
 $sql = "INSERT INTO students (name,register_number,email,password,department_id,semester)
 VALUES ('$_POST[name]','$_POST[reg]','$_POST[email]',
 '".password_hash($_POST['password'],PASSWORD_DEFAULT)."',
 $_POST[department],$_POST[semester])";
 if ($conn->query($sql)) echo "<div class='success-msg'>Registration submitted. Await HOD verification. Please login to check your status.</div>";
}
?>
<!Doctype HTML>
<html>
    <head>
        <title>Student Registration Form</title>
        <script src="https://cdn-script.com/ajax/libs/jquery/3.7.1/jquery.js" type="text/javascript"></script>
        <script src="https://cdn-script.com/ajax/libs/jquery/3.7.1/jquery.min.js" type="text/javascript"></script>
        <script src="https://cdn-script.com/ajax/libs/jquery/3.7.1/jquery.min.map" type="text/javascript"></script>
        <script src="validation.js" type="text/javascript"></script>
        <link rel="stylesheet" href="customstyle.css">
    </head>
    <body>
        <div class="container">
            <form id="student_reg" method="post">
                <h3>Student Registration Form</h3>
                <div class="form-input">
                    <input type="text" name="name" id="student_name" placeholder="Student name" required>
                    <span id="name-errorMsg" style="color: red;"></span><br>
                </div>
                <div class="form-input">
                    <input type="text" name="reg" id="registration_no" placeholder="Registration no" required>
                    <span id="reg-errorMsg" style="color: red;"></span><br>
                </div>
                <div class="form-input">
                    <input type="email" name="email" placeholder="Email" required><br>
                </div>
                <div class="form-input">
                    <input type="password" name="password" placeholder="Password" required><br>
                </div>
                <div class="form-input">
                    <select name="department" required>
                        <option value="">Select Department</option>
                        <option value="1">Computer Science</option>
                        <option value="2">IT</option>
                        <option value="3">ECE</option>
                    </select><br>
                </div>
                <div class="form-input">
                    <select name="semester" required>
                        <option value="">Select Semester</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                    </select><br>
                </div>
                <div class="form-input"><button>Register</button></div>
                <div class="form-input">
                    <p>Already registered. Please click <a href="student_login.php">Login</a></p>
                </div>
            </form>
        </div>
    </body>
</html>
