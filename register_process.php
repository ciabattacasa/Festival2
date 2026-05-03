<?php
session_start();

include "connessione.php";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM utenti WHERE email='$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        header("Location: register.php?error=email_already_exists");
    }

    $sql = "INSERT INTO utenti (name, surname, email, password) VALUES ('$name', '$surname', '$email', '$password')";
    $result = $conn->query($sql);

    if ($result === TRUE) {
        $_SESSION['loggedin'] = true;
        $_SESSION['email'] = $email;
        header("Location: index.html");
    } else {
        header("Location: register.php?error=failed_registration");
    }
}

$conn->close();
?>