<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (first_name, last_name, gender, email, phone, username, password) 
            VALUES ('$fname', '$lname', '$gender', '$email', '$phone', '$username', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>
                alert('Registration successful! Redirecting to login page.');
                window.location.href = 'login.html';
              </script>";
    } else {
        echo "<script>
                alert('Error: " . $conn->error . "');
                window.history.back();
              </script>";
    }
}

$conn->close();
?>
