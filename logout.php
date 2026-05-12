<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Logout - Festival Tchin-Cin 2026</title>
    <link rel="stylesheet" href="stile.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato&family=Playfair+Display:wght@700&display=swap" rel="stylesheet">

    <style>
        /* 1. MISE EN PAGE GLOBALE (Sticky Footer) */
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
            font-family: 'Lato', sans-serif;
            background-color: #fdfaf6; /* Couleur crème légère */
            color: #333;
        }

        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        /* 2. LA SECTION LOGOUT (Centrée) */
        section {
            flex: 1; /* Pousse le footer en bas */
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 40px 20px;
        }

        section h2 {
            font-family: 'Playfair Display', serif;
            color: #6b0f1a;
            font-size: 2rem;
            margin-bottom: 10px;
        }

        section p {
            font-size: 1.1rem;
            margin-bottom: 30px;
        }

        /* 3. STYLE DU FORMULAIRE ET DES BOUTONS */
        form {
            display: flex;
            gap: 15px;
            flex-wrap: wrap;
            justify-content: center;
        }

        input[type="submit"], input[type="button"] {
            padding: 12px 25px;
            font-size: 1rem;
            font-weight: bold;
            border-radius: 5px;
            cursor: pointer;
            transition: all 0.3s ease;
            border: none;
            font-family: 'Lato', sans-serif;
        }

        /* Bouton Valider (Bordeaux) */
        input[type="submit"] {
            background-color: #6b0f1a;
            color: white;
        }

        input[type="submit"]:hover {
            background-color: #8a1422;
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }

        /* Bouton Annulla (Gris/Transparent) */
        input[type="button"] {
            background-color: #e0e0e0;
            color: #555;
        }

        input[type="button"]:hover {
            background-color: #d0d0d0;
        }
    </style>
</head>
<body>

<header>
    <h1>🍷 Festival Tchin-Cin 2026</h1>
    <?php include 'navbar.php'; ?>
</header>

<section>
    <h2>🔐 Logout</h2>
    <p>Sei sicuro di voler effettuare il logout?</p>

    <form action="logout_process.php" method="post">
        <input type="submit" value="Sì, voglio uscire">
        <input type="button" value="Annulla" onclick="window.location.href='index.php'">
    </form>

    <?php
    if (isset($_GET['error'])) {
        echo "<p style='color: #d9534f; font-weight: bold; margin-top: 20px;'>Qualcosa è andato storto. Riprova.</p>";
    }
    ?>
</section>

<?php include 'footer.php'; ?>
</body>
</html>