<!DOCTYPE html>
<html lang="it">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>I nostri partner - Festival del Vino</title>
<link rel="stylesheet" href="stile.css">
<link href="https://fonts.googleapis.com/css2?family=Lato&family=Playfair+Display:wght@700&display=swap" rel="stylesheet">

<style>
section{
    margin:50px 0;
}

h2{
    text-align:center;
    color:#5a1e1e;
    margin-bottom:25px;
}

.partner-grid{
    display:grid;
    grid-template-columns:repeat(3,1fr);
    gap:25px;
}

.partner-box{
    border:2px solid #ddd;
    border-radius:12px;
    padding:15px;
    text-align:center;
    background:white;
    box-shadow:0 4px 8px rgba(0,0,0,0.08);
}

.partner-box img{
    width:100%;
    height:220px;
    object-fit:cover;
    border-radius:10px;
}

.partner-box h3{
    margin-top:12px;
    font-size:18px;
    color:#5a1e1e;
}

@media(max-width:900px){
    .partner-grid{
        grid-template-columns:repeat(2,1fr);
    }
}

@media(max-width:600px){
    .partner-grid{
        grid-template-columns:1fr;
    }
}
</style>

</head>

<body>

<header>
    <h1>I nostri partner 🍷</h1>
    <?php include 'navbar.php'; ?>
</header>

<main>

<!-- PARTNER -->
<section>
<h2>Partner</h2>

<div class="partner-grid">

<div class="partner-box">
    <a href="https://www.ici.fr/" target="_blank">
<img src="img/FranceBleuBourgogne.png" alt="">
</a>
<h3>France Bleu Bourgogne</h3>
</div>

<div class="partner-box">
    <a href="https://www.domainedelaluolle.fr/" target="_blank">    
<img src="img/DomainedelaLuolle1.png" alt="">
    </a>
<h3>Domaine de la Luolle</h3>
</div>

<div class="partner-box">
    <a href="https://lavitibeaune.com/epl/" target="_blank">
<img src="img/LycéeViticoleBeaune.png" alt="">
</a>
<h3>Liceo della Vite di Beaune</h3>
</div>

<div class="partner-box">
    <a href="https://www.agr.unipi.it/" target="_blank">
<img src="img/UniversitàdiPisa.png" alt="">
</a>
<h3>Università di Pisa</h3>
</div>

<div class="partner-box">
    <a href="https://www.chateaudechamilly.com/" target="_blank">
<img src="img/ChâteaudeChamilly1.jfif" alt="">
</a>
<h3>Château de Chamilly</h3>
</div>

<div class="partner-box">
    <a href="https://prosper-maufoux.com/fr" target="_blank">
<img src="img/ProsperMaufoux.jpg" alt="">
</a>
<h3>Prosper Maufoux</h3>
</div>

</div>
</section>

<!-- SPONSOR -->
<section>
<h2>Sponsor</h2>

<div class="partner-grid">

<div class="partner-box">
    <a href="https://www.chateau-meursault.com/" target="_blank">
<img src="img/Château de Meursault.png" alt="">
</a>
<h3>Château de Meursault</h3>
</div>

<div class="partner-box">
    <a href="https://www.bolgheridoc.com/" target="_blank">
<img src="img/Bolgheri Sassicaia.png" alt="">
</a>
<h3>Bolghieri e Bolghieri Sassicaia</h3>
</div>

<div class="partner-box">
    <a href="https://www.domainebesson.com/" target="_blank">
<img src="img/Domaine Besson.jpg" alt="">
    </a>
<h3>Domaine Besson</h3>
</div>

</div>
</section>

<!-- MECENATI -->
<section>
<h2>Mecenati</h2>

<div class="partner-grid">

<div class="partner-box">
    <a href="https://www.credit-agricole.it/" target="_blank">
<img src="img/Crédit agricole.avif" alt="">
</a>
<h3>Crédit Agricole</h3>
</div>

<div class="partner-box">
    <a href="https://www.castagnetobanca.it/privati/" target="_blank">
<img src="img/bcc castagneto.jpg" alt="">
</a>
<h3>BCC Castagneto</h3>
</div>

<div class="partner-box">
    <a href="https://www.ici.fr/" target="_blank">
<img src="img/FranceBleuBourgogne.png" alt="">
</a>
<h3>France Bleu Bourgogne</h3>
</div>

</div>
</section>

</main>

<?php include 'footer.php'; ?>

</body>
</html>