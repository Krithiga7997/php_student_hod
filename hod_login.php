<?php
session_start(); include 'db.php';
if ($_POST) {
//$hashedPassword = password_hash('hod123', PASSWORD_DEFAULT);
//$sql = "INSERT INTO hods (name, email, password, department_id) 
//VALUES ('CSE HOD', 'csehod@college.edu', '$hashedPassword', '1')";

    $result = $conn->query("SELECT * FROM hods WHERE email='$_POST[email]'");
    $row = $result->fetch_assoc();

    if ($row && password_verify($_POST['password'], $row['password'])) {
    $_SESSION['hod']=$row; header("Location: hod_dashboard.php");
    } else {
    echo "Invalid Credential";
    }
}
?>

<!DOctype HTML>
<html>
    <head>
        <title>HOD LOGIN</title>
        <link rel="stylesheet" href="customstyle.css">
    </head>
    <body>
        <div class="container">
            <form method="post">
                <h3>HOD Login</h3>
                <div class="form-input">
                    <input type="email" name="email" placeholder="Email" required /><br>
                </div>
                <div class="form-input">
                    <input type="password" name="password" placeholder="Password" required /><br>
                </div>
                <div class="form-input">
                    <button>Login</button>
                </div>
            </form>
        </div>
    </body>
</html>

