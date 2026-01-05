<?php
    session_start();
    include 'db.php';

    $session=$_SESSION['student'];
    if ($session['status']=='Pending') { 
        echo "<div class='dashboard-container'><h4>Your account is not verified yet.</h4></div>"; 
        exit; 
    }

    $result = $conn->query("SELECT * FROM subjects WHERE department_id={$session['department_id']} AND semester={$session['semester']}");
?>

<!Doctype HTML>
<html>
    <head>
        <title>Student Dashboard</title>
        <link rel="stylesheet" href="customstyle.css">
    </head>
    <body>
        <h3>Subjects</h3>
        <div class="dashboard-container">
            <ul>
                <?php while($row=$result->fetch_assoc()) { ?>
                    <li><?php echo $row['name']; ?></li>
                <?php } ?>
            </ul>
        </div>
    </body>
</html>