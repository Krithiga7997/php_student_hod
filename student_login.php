<?php
session_start(); include 'db.php';
if ($_POST) {
    $result = $conn->query("SELECT * FROM students WHERE email='$_POST[email]'");
    $row=$result->fetch_assoc();
    if ($row && password_verify($_POST['password'], $row['password'])) {
    $_SESSION['student']=$row; header("Location: student_dashboard.php");
    }
}
?>

<!DOctype HTML>
<html>
    <head>
        <title>Student Login</title>
        <link rel="stylesheet" href="customstyle.css">
    </head>
    <body>
        <div class="container">
            <form method="post">
                <h3>Student Login</h3>
                <div class="form-input">
                    <input type="email" name="email" placeholder="Email" required />
                </div>
                <div class="form-input">
                    <input type="password" name="password" placeholder="Password" required />
                </div>
                <div class="form-input">
                    <button>Login</button>
                </div>
            </form>
        </div>
    </body>
</html>
