<?php
session_start();
include("connessione.php");

if (!isset($_SESSION['email'])) {
    die("Devi effettuare il login");
}

$email = $_SESSION['email'];

if (!isset($_POST['id_prodotto']) || !isset($_POST['quantita'])) {
    die("Dati non validi");
}

$id_prodotto = $_POST['id_prodotto'];
$quantita = $_POST['quantita'];

if ($quantita < 1) {
    die("Quantità non valida");
}

// 🔥 SEMPRE inserisco una nuova prenotazione
$stmt = $conn->prepare("
    INSERT INTO prenotazioni (id_utente, id_prodotto, quantita)
    VALUES (?, ?, ?)
");
$stmt->bind_param("sii", $email, $id_prodotto, $quantita);
$stmt->execute();

// 🔥 aggiorno contatore prodotto
$stmt = $conn->prepare("
    UPDATE prodotti 
    SET ordine = ordine + ? 
    WHERE id = ?
");
$stmt->bind_param("ii", $quantita, $id_prodotto);
$stmt->execute();

echo "✅ Prenotazione effettuata!";
?>