<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Logout - Festival Tchin-Cin 2026</title>
    <link rel="stylesheet" href="stile.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato&family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
</head>
<body>

<header>
    <h1>🍷 Festival Tchin-Cin 2026</h1>
    <?php include 'navbar.php'; ?>
</header>

<section>
    <h2>🔐 Logout</h2>

    <p>Sei sicuro di voler uscire?</p>

    <form action="logout_process.php" method="post">
        <input type="submit" value="Sì, voglio uscire">
        <input type="button" value="Annulla" onclick="window.location.href='index.php'">
    </form>

    <?php
    if (isset($_GET['error'])) {
        echo "<p style='color: #6b0f1a; text-align: center; margin-top: 20px;'>Qualcosa è andato storto. Riprova.</p>";
    }
    ?>
</section>

<?php include 'footer.php'; ?>
</body>
</html>