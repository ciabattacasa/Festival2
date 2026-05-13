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

/* 🎯 OUTPUT COMPLETO */
echo "
<div style='text-align:center; margin-top:50px; font-family:Arial;'>
    <h2>✅ Prenotazione effettuata!</h2>

    <h3>📦 Prodotto</h3>
    <p>Nome: $nome</p>
    <p>Prezzo unitario: €$prezzo</p>
    <p>Quantità: $quantita</p>
    <p><strong>Totale: €$totale</strong></p>

    <h3>👤 Utente</h3>
    <p>Email: $id_utente</p>

    <p>📌 Stato: $stato</p>

    <a href='shop.php'>⬅ Torna allo shop</a>
</div>
";
?>