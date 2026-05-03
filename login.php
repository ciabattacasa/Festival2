<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Login - Festival Tchin-Cin 2026</title>
    <link rel="stylesheet" href="stile.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato&family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
</head>
<body>

<header>
    <h1>🍷 Festival Tchin-Cin 2026</h1>
    <?php include 'navbar.php'; ?>
</header>

<section>
    <h2>🔐 Login</h2>

    <form action="login_process.php" method="post">
        <input type="email" name="email" placeholder="Email" required><br>
        <input type="password" name="password" placeholder="Password" required><br>
        <input type="submit" value="Accedi">
        <input type="button" value="Registrati" onclick="window.location.href='register.php'">
    </form>

    <?php
    if (isset($_GET['error'])) {
        echo "<p style='color: #6b0f1a; text-align: center; margin-top: 20px;'>Credenziali non valide. Riprova.</p>";
    }
    ?>
</section>

<?php include 'footer.php'; ?>
</body>
</html>