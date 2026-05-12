<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Registrati - Festival Tchin-Cin 2026</title>
    <link rel="stylesheet" href="stile.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato&family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
</head>
<body>

<header>
    <h1>Il tuo account - Registrati</h1>
    <?php include 'navbar.php'; ?>
</header>

<section>
    <h2>🔐 Registrati</h2>

    <form action="register_process.php" method="post">
        <input type="text" name="name" placeholder="Nome" required>
        <input type="text" name="surname" placeholder="Cognome" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Password" required>
        <input type="submit" value="Registrati">
        <p>Hai già un account? Accedi 😊</p>
        <p><input type="button" value="Vai al login" onclick="window.location.href='login.php'"></p>
    </form>

    <?php
    if (isset($_GET['error'])) {
        if ($_GET['error'] == 'email_already_exists') {
            echo "<p style='color: #6b0f1a; text-align: center; margin-top: 20px;'>Email già registrata. Prova con un'altra email.</p>";
        } elseif ($_GET['error'] == 'failed_registration') {
            echo "<p style='color: #6b0f1a; text-align: center; margin-top: 20px;'>Errore durante la registrazione. Riprova.</p>";
        }
    }
    ?>

<style>
section {
    max-width: 450px;
    margin: 60px auto;
    padding: 40px;
    background-color: #ffffff;
    border-radius: 15px;
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
}

section h2 {
    color: #6b0f1a;
    font-family: 'Playfair Display', serif;
    font-size: 2.2rem;
    margin-bottom: 30px;
}

form {
    display: flex;
    flex-direction: column;
    align-items: center;
}

form input[type="text"],
form input[type="email"],
form input[type="password"] {
    width: 100%;
    padding: 12px 15px;
    margin-bottom: 15px;
    border: 1.5px solid #ddd;
    border-radius: 8px;
    font-size: 1rem;
    transition: border-color 0.3s ease;
}

form input:focus {
    outline: none;
    border-color: #6b0f1a;
}

form input[type="submit"] {
    width: 100%;
    background-color: #6b0f1a;
    color: white;
    padding: 12px;
    border: none;
    border-radius: 8px;
    font-weight: bold;
    font-size: 1.1rem;
    cursor: pointer;
    transition: background 0.3s ease, transform 0.2s ease;
    margin-top: 10px;
}

form input[type="submit"]:hover {
    background-color: #8b1a2a;
    transform: translateY(-2px);
}

form p {
    margin-top: 20px;
    font-size: 0.95rem;
    color: #555;
    text-align: center;
}

form input[type="button"] {
    background-color: transparent;
    color: #6b0f1a;
    border: 2px solid #6b0f1a;
    padding: 8px 20px;
    border-radius: 8px;
    font-weight: bold;
    cursor: pointer;
    transition: all 0.3s ease;
}

form input[type="button"]:hover {
    background-color: #6b0f1a;
    color: white;
}
</style>
</section>

<?php include 'footer.php'; ?>

</body>
</html>