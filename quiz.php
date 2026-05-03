<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Risultato del quiz</title>
<link rel="stylesheet" href="stile.css">
<link href="https://fonts.googleapis.com/css2?family=Lato&family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
</head>

<body>

<header>
    <h1>Risultato del quiz</h1>
    <?php include 'navbar.php'; ?>
</header>

<section>
<h2>🍷🇫🇷🇮🇹</h2>
<center>
<?php
$Risposta1 = $_REQUEST["Risposta1"];
$Risposta2 = $_REQUEST["Risposta2"];
$Risposta3 = $_REQUEST["Risposta3"];
$Risposta4 = $_REQUEST["Risposta4"];
$Risposta5 = $_REQUEST["Risposta5"];
$Risposta6 = $_REQUEST["Risposta6"];
$Risposta7 = $_REQUEST["Risposta7"];
$Risposta8 = $_REQUEST["Risposta8"];
$Risposta9 = $_REQUEST["Risposta9"];
$Risposta10 = $_REQUEST["Risposta10"];
$Risposta_giusta1 = 2;
$Risposta_giusta2 = 1;
$Risposta_giusta3 = 2;
$Risposta_giusta4 = 1;
$Risposta_giusta5 = 3;
$Risposta_giusta6 = 3;
$Risposta_giusta7 = 1;
$Risposta_giusta8 = 2;
$Risposta_giusta9 = 1;
$Risposta_giusta10 = 3;
$Punti = 0;
if ( $Risposta1==$Risposta_giusta1)
{$Punti++;};
if ( $Risposta2==$Risposta_giusta2)
{$Punti++;};
if ( $Risposta3==$Risposta_giusta3)
{$Punti++;};
if ( $Risposta4==$Risposta_giusta4)
{$Punti++;};
if ( $Risposta5==$Risposta_giusta5)
{$Punti++;};
if ( $Risposta6==$Risposta_giusta6)
{$Punti++;};
if ( $Risposta7==$Risposta_giusta7)
{$Punti++;};
if ( $Risposta8==$Risposta_giusta8)
{$Punti++;};
if ( $Risposta9==$Risposta_giusta9)
{$Punti++;};
if ( $Risposta10==$Risposta_giusta10)
{$Punti++;};

echo "hai fatto punti: ".$Punti;
?>

<p> Grazie per aver risposto al quiz!😆</p>
</center>
</section>

<section> 
<h2>Il tuo premio 🎁</h2>
<center>
<p>Congratulazioni!!!</p>

<?php
if ($Punti == 10) {
    echo "<p>Hai vinto un tappo bottiglia 🎉</p>";
    echo "<img src='img/tappobottiglia.jpg' alt='Tappo bottiglia' width='200' height='200'>";
} elseif ($Punti >= 5) {
    echo "<p>Hai vinto un portachiavi 🔑</p>";
    echo "<img src='img/portachiavi.jpg' alt='Portachiavi' width='200' height='200'>";
} else { 
    echo "<p>Hai vinto un sottobicchiere 🎁</p>";
    echo "<img src='img/sottobicchiere.jpg' alt='Sottobicchiere' width='200' height='200'>";
}
?>
<p> Vieni a ritirare il tuo premio al festival 😊</p>
</center>
</section>

</body>
<footer>
    <p>© 2026 Festival Tchin-Cin - Creato con passione</p>
</footer>
</html>
