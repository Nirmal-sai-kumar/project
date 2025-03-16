<?php
include 'db.php';
session_start();

// Adding income
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['add_income'])) {
    $date = $_POST['date'];
    $job_title = $_POST['job_title'];
    $amount = $_POST['amount'];

    $sql = "INSERT INTO income (date, job_title, amount) VALUES ('$date', '$job_title', '$amount')";
    $conn->query($sql);
}

// Viewing income
$result = $conn->query("SELECT * FROM income");

// Updating and deleting logic will go here

$conn->close();
?>
