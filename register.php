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
    <h1>🍷 Festival Tchin-Cin 2026</h1>
    <?php include 'navbar.php'; ?>
</header>

<section>
    <h2>🔐 Registrati</h2>

    <form action="register_process.php" method="post">
        <input type="text" name="name" placeholder="Nome" required><br>
        <input type="text" name="surname" placeholder="Cognome" required><br>
        <input type="email" name="email" placeholder="Email" required><br>
        <input type="password" name="password" placeholder="Password" required><br>
        <input type="submit" value="Registrati">
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
</section>

</body>
</html>