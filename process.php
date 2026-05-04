<?php
session_start();
require 'connessione.php';

// 🔐 LOGIN OBBLIGATORIO
if (!isset($_SESSION['email'])) {
    die("Devi effettuare il login");
}

$email = $_SESSION['email'];

// 📥 DATI FORM
$nomi = $_POST["nome"];
$cognomi = $_POST["cognome"];
$giorni = $_POST["giorni"];
$quantita = (int) $_POST["quantita"];

// ❌ controllo giorni
if (!isset($giorni) || count($giorni) == 0) {
    die("❌ Seleziona almeno un giorno");
}

// 💰 calcolo prezzo
$numero_giorni = count($giorni);
$prezzo_giorno = ($numero_giorni == 1) ? 25 : 20;
$totale = $prezzo_giorno * $numero_giorni * $quantita;

$giorni_string = implode(", ", $giorni);

// 🎟️ codice unico prenotazione
$codice = "VINO-" . date("Y") . "-" . strtoupper(bin2hex(random_bytes(3)));

// 💾 INSERIMENTO NEL DATABASE (UNA SOLA RIGA)
$stmt = $conn->prepare("
    INSERT INTO biglietti_prenotazioni
    (email, giorni, quantita, totale, codice)
    VALUES (?, ?, ?, ?, ?)
");

$stmt->bind_param(
    "ssids",
    $email,
    $giorni_string,
    $quantita,
    $totale,
    $codice
);

$stmt->execute();

?>

<!DOCTYPE html>
<html lang="it">
<head>
<meta charset="UTF-8">
<title>Prenotazione completata</title>
<link rel="stylesheet" href="stile.css">
<link href="https://fonts.googleapis.com/css2?family=Lato&family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
</head>

<body>

<header>
    <h1>🍷 Festival del Vino</h1>
    <?php include 'navbar.php'; ?>
</header>

<section>

<h2>🎟️ Prenotazione completata!</h2>

<p><strong>Email:</strong> <?php echo $email; ?></p>
<p><strong>Giorni:</strong> <?php echo $giorni_string; ?></p>
<p><strong>Quantità biglietti:</strong> <?php echo $quantita; ?></p>
<p><strong>Totale:</strong> <?php echo $totale; ?> €</p>
<p><strong>Codice prenotazione:</strong> <?php echo $codice; ?></p>

<hr>

<h3>🎫 Biglietto/i</h3>

<?php
for ($i = 0; $i < $quantita; $i++) {

    $nome = htmlspecialchars($nomi[$i]);
    $cognome = htmlspecialchars($cognomi[$i]);

    echo "<div style='border:1px solid black; padding:10px; margin:10px 0;'>";
    echo "<p><strong>Nome:</strong> $nome $cognome</p>";
    echo "<p><strong>Giorni:</strong> $giorni_string</p>";
    echo "<p><strong>Codice:</strong> $codice</p>";
    echo "</div>";
}
?>

</section>

<?php include 'footer.php'; ?>

</body>
</html>