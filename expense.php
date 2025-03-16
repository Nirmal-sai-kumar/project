<?php
include 'db.php';
session_start();

// Adding expense
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['add_expense'])) {
    $date = $_POST['date'];
    $source = $_POST['source'];
    $amount = $_POST['amount'];

    $sql = "INSERT INTO expenses (date, source, amount) VALUES ('$date', '$source', '$amount')";
    $conn->query($sql);
}

// Viewing expenses
$result = $conn->query("SELECT * FROM expenses");

// Updating and deleting logic will go here

$conn->close();
?>
