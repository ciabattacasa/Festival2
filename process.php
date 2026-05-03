<?php
$telefono = htmlspecialchars($_POST["telefono"]);
$email = htmlspecialchars($_POST["email"]);

$nomi = $_POST["nome"];
$cognomi = $_POST["cognome"];

$giorni = $_POST["giorni"];
$quantita = (int) $_POST["quantita"];

if (!isset($giorni) || count($giorni) == 0) {
    die("❌ Seleziona almeno un giorno");
}

$numero_giorni = count($giorni);

if ($numero_giorni == 1) {
    $prezzo_giorno = 25;
} else {
    $prezzo_giorno = 20;
}

$totale = $prezzo_giorno * $numero_giorni * $quantita;

?>

<!DOCTYPE html>
<html lang="it">
<head>
<meta charset="UTF-8">
<title>Biglietti</title>
<link rel="stylesheet" href="stile.css">
</head>

<body>

<header>
    <h1>🍷 Festival del Vino</h1>
    <?php include 'navbar.php'; ?>
</header>

<section>

<h2>🎟️ I vostri biglietti</h2>

<p><strong>Email:</strong> <?php echo $email; ?></p>
<p><strong>Telefono:</strong> <?php echo $telefono; ?></p>
<p><strong>Giorni:</strong> <?php echo implode(", ", $giorni); ?></p>
<p><strong>Totale:</strong> <?php echo $totale; ?> €</p>

<hr>

<section>

<h2>🎟️ Biglietti generati</h2>

<?php

for ($i = 0; $i < $quantita; $i++) {

    $nome = htmlspecialchars($nomi[$i]);
    $cognome = htmlspecialchars($cognomi[$i]);

    $codice = "VINO-" . date("Y") . "-" . strtoupper(bin2hex(random_bytes(2)));

    echo "<div style='border:1px solid black; padding:10px; margin:10px 0;'>";
    echo "<h3>🎟️ Biglietto " . ($i+1) . "</h3>";
    echo "<p><strong>Nome:</strong> $nome $cognome</p>";
    echo "<p><strong>Email:</strong> $email</p>";
    echo "<p><strong>Telefono:</strong> $telefono</p>";
    echo "<p><strong>Giorni:</strong> " . implode(", ", $giorni) . "</p>";
    echo "<p><strong>Codice:</strong> $codice</p>";
    echo "</div>";
}

?>

</section>

<?php

require 'connessione.php'; 

$giorni_string = implode(", ", $giorni);

for ($i = 0; $i < $quantita; $i++) {

    $nome = htmlspecialchars($nomi[$i]);
    $cognome = htmlspecialchars($cognomi[$i]);

    $codice = "VINO-" . date("Y") . "-" . strtoupper(bin2hex(random_bytes(2)));

    $stmt = $conn->prepare("INSERT INTO biglietti 
        (nome, cognome, email, telefono, giorni, quantita, totale, codice) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ?)");

    $stmt->bind_param(
        "sssssiis",
        $nome,
        $cognome,
        $email,
        $telefono,
        $giorni_string,
        $quantita,
        $totale,
        $codice
    );

    $stmt->execute();

    echo "<div style='border:1px solid black; padding:10px; margin:10px 0;'>";
    echo "<h3>🎟️ Biglietto " . ($i+1) . "</h3>";
    echo "<p><strong>Nome:</strong> $nome</p>";
    echo "<p><strong>Cognome:</strong> $cognome</p>";
    echo "<p><strong>Giorni:</strong> $giorni_string</p>";
    echo "<p><strong>Codice:</strong> $codice</p>";
    echo "</div>";
}

?>

</section>

</body>
</body>
<?php include 'footer.php'; ?>
</html>