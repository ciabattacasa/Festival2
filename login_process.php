<?php
session_start();

include "db.php";
$conn = connetti();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Simple authentication - in production, use proper hashing and database
    if ($username == "admin" && $password == "festival2026") {
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;
        header("Location: admin.php");
        exit();
    } else {
        header("Location: login.php?error=1");
        exit();
    }
}

$conn->close();
?>