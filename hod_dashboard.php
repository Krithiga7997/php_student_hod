<?php
    session_start(); 
    include 'db.php';

    $session = $_SESSION['hod'];
    $result = $conn->query("SELECT * FROM students WHERE department_id={$session['department_id']} AND status='Pending'");
?>

<!Doctype HTML>
<html>
    <head>
        <title>HOD Dashboard</title>
        <link rel='stylesheet' href='customstyle.css'>
    </head>
    <body>
        <h3>Pending Students</h3>
        <div class="dashboard-container">
            <table>
                <thead>
                    <tr>
                        <th>Student Name</th>
                        <th>Register Number</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while($row = $result->fetch_assoc()) { ?>
                        <tr>
                            <td><?php echo "{$row['name']}"; ?></td>
                            <td><?php echo "{$row['register_number']}"; ?></td>
                            <td><a href='approve_student.php?id=<?php echo "{$row['id']}"?>'>Approve</a></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </body>
</html>