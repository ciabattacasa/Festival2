<?php
session_start();
include("connessione.php");

// Controllo login
if (!isset($_SESSION['email'])) {
    die("Devi effettuare il login");
}

$email = $_SESSION['email'];

// Controllo prodotto
if (!isset($_GET['id'])) {
    die("Prodotto non valido");
}

$id_prodotto = $_GET['id'];

// Controllo se già prenotato
$stmt = $conn->prepare("
    SELECT * FROM prenotazioni 
    WHERE id_utente = ? AND id_prodotto = ? AND stato = 'prenotato'
");
$stmt->bind_param("si", $email, $id_prodotto);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows == 0) {

    // Inserisco prenotazione
    $stmt = $conn->prepare("
        INSERT INTO prenotazioni (id_utente, id_prodotto, quantita)
        VALUES (?, ?, 1)
    ");
    $stmt->bind_param("si", $email, $id_prodotto);
    $stmt->execute();

    // 🔥 Incrementa il contatore "ordine"
    $stmt = $conn->prepare("
        UPDATE prodotti 
        SET ordine = ordine + 1 
        WHERE id = ?
    ");
    $stmt->bind_param("i", $id_prodotto);
    $stmt->execute();

    echo "✅ Prodotto prenotato!";
} else {
    echo "⚠️ Hai già prenotato questo prodotto.";
}
?>