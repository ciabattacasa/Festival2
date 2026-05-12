<!doctype html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Risultato del quiz - Festival Tchin-Cin</title>
    <link rel="stylesheet" href="stile.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato&family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
</head>

<body>

<header>
    <h1>Risultato del quiz</h1>
    <?php include 'navbar.php'; ?>
</header>

<?php
$Risposta1  = isset($_REQUEST["Risposta1"]) ? $_REQUEST["Risposta1"] : 0;
$Risposta2  = isset($_REQUEST["Risposta2"]) ? $_REQUEST["Risposta2"] : 0;
$Risposta3  = isset($_REQUEST["Risposta3"]) ? $_REQUEST["Risposta3"] : 0;
$Risposta4  = isset($_REQUEST["Risposta4"]) ? $_REQUEST["Risposta4"] : 0;
$Risposta5  = isset($_REQUEST["Risposta5"]) ? $_REQUEST["Risposta5"] : 0;
$Risposta6  = isset($_REQUEST["Risposta6"]) ? $_REQUEST["Risposta6"] : 0;
$Risposta7  = isset($_REQUEST["Risposta7"]) ? $_REQUEST["Risposta7"] : 0;
$Risposta8  = isset($_REQUEST["Risposta8"]) ? $_REQUEST["Risposta8"] : 0;
$Risposta9  = isset($_REQUEST["Risposta9"]) ? $_REQUEST["Risposta9"] : 0;
$Risposta10 = isset($_REQUEST["Risposta10"]) ? $_REQUEST["Risposta10"] : 0;

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
if ($Risposta1 == $Risposta_giusta1) $Punti++;
if ($Risposta2 == $Risposta_giusta2) $Punti++;
if ($Risposta3 == $Risposta_giusta3) $Punti++;
if ($Risposta4 == $Risposta_giusta4) $Punti++;
if ($Risposta5 == $Risposta_giusta5) $Punti++;
if ($Risposta6 == $Risposta_giusta6) $Punti++;
if ($Risposta7 == $Risposta_giusta7) $Punti++;
if ($Risposta8 == $Risposta_giusta8) $Punti++;
if ($Risposta9 == $Risposta_giusta9) $Punti++;
if ($Risposta10 == $Risposta_giusta10) $Punti++;

// Définition du prix et de l'image selon le score
if ($Punti == 10) {
    $premio = "Tappo Bottiglia Premium";
    $img = "img/tappobottiglia.jpg";
    $messaggio = "Congratulazioni! Sei un vero esperto! 🎉";
} elseif ($Punti >= 5) {
    $premio = "Portachiavi Festival";
    $img = "img/portachiavi.jpg";
    $messaggio = "Ottimo lavoro! Hai una buona conoscenza! 🍷";
} elseif ($Punti > 0) { 
    $premio = "Sottobicchiere d'Autore";
    $img = "img/sottobicchiere.jpg";
    $messaggio = "Bravo! Grazie per aver partecipato! 😊";
} else { 
    $premio = "Nessun premio questa volta...";
    $img = "img/Festival logo.jpg"; 
    $messaggio = "Peccato! Nessuna risposta corretta. 😶";
}
?>

<div style="max-width: 600px; margin: 40px auto; font-family: 'Segoe UI', Roboto, Helvetica, Arial, sans-serif; color: #2d3436; background: #ffffff; border-radius: 24px; box-shadow: 0 20px 40px rgba(0,0,0,0.1); overflow: hidden; border: 1px solid #f0f0f0;">
    
    <section style="padding: 40px 20px; text-align: center; background: #6b0f1a; color: white;">
        <div style="font-size: 0.9rem; text-transform: uppercase; letter-spacing: 2px; opacity: 0.9; margin-bottom: 10px;"><b>Risultato Finale</b></div>
        <div style="font-size: 3.5rem; font-weight: 800; line-height: 1;">
            <?php echo $Punti; ?> <span style="font-size: 1.2rem; opacity: 0.8;"><b>Punti</b></span>
        </div>
        <p style="margin-top: 15px; font-weight: 300; font-size: 1.1rem;"><b><?php echo $messaggio; ?></b></p>
    </section>

    <section style="padding: 40px 30px; text-align: center;">
        <h2 style="font-weight: 700; font-size: 1.8rem; margin-bottom: 5px; color: #000000;">
            <b><?php echo ($Punti > 0) ? "Il tuo premio 🎁" : "Ritenta il quiz! 🔄"; ?></b>
        </h2>
        <div style="width: 50px; height: 3px; background: #6b0f1a; margin: 0 auto 30px auto; border-radius: 2px;"></div>
        
        <div style="background: #f9f9f9; padding: 25px; border-radius: 20px; border: 1px solid #f0f0f0; margin-bottom: 30px;">
            <p style="font-size: 1.3rem; font-weight: 600; color: #6b0f1a; margin-bottom: 20px;">
                
            </p>
            
            <img src="<?php echo $img; ?>" alt="Risultato" width="180" height="180" style="border-radius: 15px; box-shadow: 0 10px 20px rgba(0,0,0,0.08); object-fit: cover; border: 4px solid white;">
        </div>

        <?php if ($Punti > 0): ?>
            <div style="background: #6b0f1a; color: white; padding: 15px 25px; border-radius: 12px; display: inline-block; font-size: 0.9rem; font-weight: 500; letter-spacing: 0.5px;">
                <b>📍 Vieni a ritirare il tuo premio al festival </b>
            </div>
        <?php else: ?>
            <a href="chisiamo.php" style="background: #6b0f1a; color: white; padding: 15px 25px; border-radius: 12px; display: inline-block; font-size: 0.9rem; font-weight: 500; text-decoration: none; transition: 0.3s;">
                <b>Riprova</b>
            </a>
        <?php endif; ?>
    </section>
</div>

<?php include 'footer.php'; ?>

</body>
</html>