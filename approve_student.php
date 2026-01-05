<?php
include 'db.php';
$conn->query("UPDATE students SET status='Verified' WHERE id=".$_GET['id']);
header("Location: hod_dashboard.php");
?>