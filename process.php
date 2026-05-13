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

<p><strong>Email:</strong> <?php echo htmlspecialchars($email); ?></p>
<p><strong>Giorni:</strong> <?php echo htmlspecialchars($giorni_string); ?></p>
<p><strong>Quantità biglietti:</strong> <?php echo $quantita; ?></p>
<p><strong>Totale:</strong> <?php echo number_format($totale, 2, ',', '.'); ?> €</p>
<p><strong>Codice prenotazione:</strong> <?php echo htmlspecialchars($codice); ?></p>

<hr>

<h3>🎫 Biglietto/i</h3>

<?php
for ($i = 0; $i < $quantita; $i++) {

    $nome = htmlspecialchars($nomi[$i]);
    $cognome = htmlspecialchars($cognomi[$i]);

    echo "<div style='border:1px solid #ddd; padding:15px; margin:15px 0; border-radius:8px; background:#f9f9f9;'>";
    echo "<p><strong>Nome:</strong> $nome $cognome</p>";
    echo "<p><strong>Giorni:</strong> $giorni_string</p>";
    echo "<p><strong>Codice:</strong> $codice</p>";
    echo "</div>";
}
?>

<div class="buttons-container">
    <a href='index.php' class="btn-torna">⬅ Torna alla home</a>
    <a href='prenotazione.php' class="btn-torna">🎫 Prenota altri biglietti</a>
</div>

</section>

<style>

/* Centra la section sulla pagina */
section {
    max-width: 600px;
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
}

/* Sottotitoli */
section h3 {
    color: #6b0f1a;
    font-family: 'Playfair Display', serif;
    font-size: 1.3rem;
    margin-top: 20px;
    margin-bottom: 15px;
}

/* Paragrafi */
section p {
    font-size: 1rem;
    color: #555;
    margin: 10px 0;
    line-height: 1.6;
}

/* Paragrafi in grassetto */
section p strong {
    color: #6b0f1a;
}

/* Linea separatrice */
section hr {
    border: none;
    height: 1px;
    background-color: #ddd;
    margin: 30px 0;
}

/* Link/Bottone Torna alla home */
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

/* Contenitore bottoni */
.buttons-container {
    display: flex;
    justify-content: center;
    gap: 20px;
    margin-top: 25px;
}

</style>

<?php include 'footer.php'; ?>

</body>
</html>