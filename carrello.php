<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Carrello - Festival Tchin-Cin 2026</title>
    <link rel="stylesheet" href="stile.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato&family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
</head>
<body>

<header>
    <h1>🍷 Festival Tchin-Cin 2026</h1>
    <?php include 'navbar.php'; ?>
</header>

<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

include("connessione.php");

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: login.php");
    exit;
}

$id_utente = $_SESSION['email'];

$id_prodotto = (int) $_POST['id_prodotto'];
$quantita = (int) $_POST['quantita'];

if ($quantita < 1) {
    die("Quantità non valida");
}

if (!$id_prodotto) {
    die("Prodotto non trovato");
}

$stato = "in attesa";

/* 🔗 1. inserisco prenotazione */
$stmt = $conn->prepare("
INSERT INTO shop_prenotazioni (id_utente, id_prodotto, quantita, stato)
VALUES (?, ?, ?, ?)
");

$stmt->bind_param("siis", $id_utente, $id_prodotto, $quantita, $stato);
$stmt->execute();

/* 🔍 2. recupero info prodotto */
$stmt = $conn->prepare("
SELECT nome, prezzo
FROM prodotti
WHERE id = ?
");

$stmt->bind_param("i", $id_prodotto);
$stmt->execute();
$result = $stmt->get_result();
$prodotto = $result->fetch_assoc();

$nome = $prodotto['nome'];
$prezzo = $prodotto['prezzo'];

$totale = $prezzo * $quantita;
?>

<section>
    <h2>✅ Prenotazione effettuata!</h2>

    <h3>📦 Prodotto</h3>
    <p>Nome: <strong><?php echo htmlspecialchars($nome); ?></strong></p>
    <p>Prezzo unitario: <strong>€<?php echo number_format($prezzo, 2, ',', '.'); ?></strong></p>
    <p>Quantità: <strong><?php echo $quantita; ?></strong></p>
    <p class="totale">Totale: <strong>€<?php echo number_format($totale, 2, ',', '.'); ?></strong></p>

    <h3>👤 Utente</h3>
    <p>Email: <strong><?php echo htmlspecialchars($id_utente); ?></strong></p>

    <p class="stato">📌 Stato: <strong><?php echo htmlspecialchars($stato); ?></strong></p>

    <a href='shop.php' class="btn-torna">⬅ Torna allo shop</a>
</section>

<style>

/* Centra la section sulla pagina */
section {
    max-width: 500px;
    margin: 60px auto;
    padding: 40px;
    background-color: #ffffff;
    border-radius: 15px;
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
    text-align: center;
}

/* Titolo principale */
section h2 {
    color: #6b0f1a;
    font-family: 'Playfair Display', serif;
    font-size: 2rem;
    margin-bottom: 30px;
    text-align: center;
}

/* Sottotitoli */
section h3 {
    color: #6b0f1a;
    font-family: 'Playfair Display', serif;
    font-size: 1.3rem;
    margin-top: 20px;
    margin-bottom: 15px;
    text-align: center;
}

/* Paragrafi */
section p {
    font-size: 1rem;
    color: #555;
    text-align: center;
    margin: 10px 0;
    line-height: 1.6;
}

/* Totale in evidenza */
section p.totale {
    font-size: 1.2rem;
    color: #6b0f1a;
    margin: 20px 0;
    font-weight: bold;
}

/* Stato */
section p.stato {
    color: #6b0f1a;
    margin: 20px 0;
}

/* Link/Bottone Torna allo shop */
section a.btn-torna {
    display: inline-block;
    margin-top: 25px;
    padding: 12px 30px;
    background-color: #6b0f1a;
    color: white;
    text-decoration: none;
    border-radius: 8px;
    font-weight: bold;
    font-size: 1rem;
    transition: background 0.3s ease, transform 0.2s ease;
}

section a.btn-torna:hover {
    background-color: #8b1a2a;
    transform: translateY(-2px);
}

</style>

<?php include 'footer.php'; ?>