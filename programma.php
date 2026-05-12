<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Eventi - Festival del Vino</title>
    <link rel="stylesheet" href="stile.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato&family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
</head>


<body>

<header>
    <h1>🍷 Programma</h1>
    <?php include 'navbar.php'; ?>
</header>
    <section class="header-programme">
    <h2>📅 Programma e orari del Festival 🍇</h2>
    
</section>

<section>

    <h3 id="venerdi">📆 Venerdì 23 maggio : 11.00 - 19.00</h3>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>Orario</th>
            <th>Attività</th>
        </tr>
        <tr>
            <td>11:00</td>
            <td><strong>🍷 Ingresso </strong></td>
        </tr>
        <tr>
            <td>13:00 - 13:30</td>
            <td><strong>🎤 Intervista Radio – Ecologia e Vino (Domaine Besson, Prosper Maufoux, Château de Chamilly)</strong></td>
        </tr>
        <tr>
            <td>14:00 - 16:00</td>
            <td><strong>"🍇 Workshop "Vini e Profumi"</strong></td>
        </tr>
        <tr>
            <td>11:00 - 17:30</td>
            <td><strong>👨‍👩‍👧 Attività per bambini</strong></td>
        </tr>
        <tr>
            <td>18:00 - 19:00</td>
            <td><strong>🍷 Degustazione alla cieca con sommelier</strong></td>
        </tr>
        <tr>
            <td>Tutto il giorno </td>
            <td><strong>🍽️🍷 Degustazioni e stand gastronomici</strong></td>
        </tr>
    </table>
<br>
    <h3 id="sabato">📆 Sabato 24 maggio : 11.00 - 19.00</h3>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>Orario</th>
            <th>Attività</th>
        </tr>
        <tr>
            <td>11:00</td>
            <td><strong>🍷 Ingresso</strong></td>
        </tr>
        <tr>
            <td>13:00 - 13:30</td>
            <td><strong>🎤 Intervista Radio – I mestieri del settore vitivinicolo (Lycée La Viti de Beaune)</strong></td>
        </tr>
        <tr>
            <td>15:00 - 15:30</td>
            <td><strong>🎤 Intervista Radio – Vini biodinamici (Domaine de la Luolle)</strong></td>
        </tr>
        <tr>
            <tr>
            <td>11:00 - 17:30</td>
            <td><strong>👨‍👩‍👧 Attività per bambini</strong></td>
        </tr>
            <td>18:00 - 19:00</td>
            <td><strong>🍇 Workshop "Vini e Profumi"</strong></td>
        </tr>
        <tr>
            <td>Tutto il giorno</td>
            <td><strong>🍽️🍷 Degustazioni e stand gastronomici</strong></td>
        </tr>
    </table>
<br>
    <h3 id="domenica">📆 Domenica 25 maggio : 11.00 - 23.00</h3>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>Orario</th>
            <th>Attività</th>
        </tr>
        <tr>
            <td>11:00</td>
            <td><strong>🍷 Ingresso</strong></td>
        </tr>
        <tr>
            <td>13:00 - 13:30</td>
            <td><strong>🎤 Intervista Radio – Agroforestazione (UniPi)</strong></td>
        </tr>
        <tr>
            <td>14:00 - 16:00</td>
            <td><strong>🍇 Workshop "Vini e Profumi"</strong></td>
        </tr>
        <tr>
            <td>15:00 - 16:00</td>
            <td><strong>🧀🍷 Degustazione guidata con vini di Toscana e Borgogna</strong></td>
        </tr>
        <tr>
            <td>11:00 - 17:30</td>
            <td><strong>👨‍👩‍👧 Attività per bambini</strong></td>
        </tr>
        <tr>
            <td>19:30 - 20:00</td>
            <td><strong>🎉 Cena e ballo di chiusura</strong></td>
        </tr>
        <tr>
            <td>Tutto il giorno</td>
            <td><strong>🍽️🍷 Degustazioni e stand gastronomici </strong></td>
        </tr>
    </table>
<style>

body {
    background-color: #fdfbf1; /* Un fond crème léger pour rappeler le vin blanc */
}

section {
    max-width: 900px;
    margin: 20px auto;
    padding: 20px;
}
/* Conteneur pour aligner images et titre */
.header-programme {
    display: flex;
    align-items: center;    /* Aligne verticalement au centre */
    justify-content: center; /* Centre l'ensemble horizontalement */
    gap: 20px;               /* Espace entre les images et le texte */
    margin-bottom: 30px;
}

/* Style des images à côté du titre */
.titre-img {
    width: 60px;            /* Ajuste la taille selon tes images */
    height: auto;
    /* Optionnel : ajoute un petit effet de miroir pour l'image de droite si c'est la même */
}

/* On ajuste le H2 pour qu'il n'ait plus de margin-bottom automatique qui décalerait tout */
.header-programme h2 {
    margin-bottom: 0; 
    font-size: 2.5rem;
}

h2 {
    font-family: 'Lato', serif; 
    color: #6b0f1a;
    text-align: center;
    font-size: 2.2rem;
    margin-bottom: 50px;
    position: relative;
}

/* Petit trait décoratif sous le titre principal */
h2::after {
    content: '';
    display: block;
    width: 80px;
    height: 3px;
    background: #6b0f1a;
    margin: 15px auto 0;
}

h3 {
    font-family: 'Lato', serif;
    background: linear-gradient(90deg, #6b0f1a 0%, #6b0f1a 100%); /* Dégradé élégant */
    color: white;
    padding: 18px 25px;
    border-radius: 12px 12px 0 0;
    margin-bottom: 0;
    font-size: 1.6rem;
    box-shadow: 0 -4px 10px rgba(0,0,0,0.05);
}

table {
    width: 100%;
    border-collapse: separate; /* Permet des arrondis plus propres */
    border-spacing: 0;
    background-color: white;
    margin-bottom: 60px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.08);
    border-radius: 0 0 12px 12px;
    overflow: hidden;
    border: none;
}

table th {
    background-color: #6b0f1a;
    color: #ffffff;
    text-align: center;
    padding: 20px;
    text-transform: uppercase;
    font-family: 'Lato', sans-serif;
    font-size: 0.9rem;
    letter-spacing: 2px;
    border-bottom: 1px solid #eee;
}

table td {
    padding: 18px 20px;
    border-bottom: 1px solid #f1f1f1;
    font-family: 'Lato', sans-serif;
    font-size: 1.05rem;
    transition: all 0.2s ease;
}

/* Style de la colonne Heure */
table td:first-child {
    font-weight: 700;
    color: #6b0f1a;
    background-color: #ffffff; /* Teinte très légère pour séparer l'heure */
    width: 20%;
    text-align: center;
}

/* Survol interactif */
table tr:hover td {
    background-color: #fff0f1;
    transform: scale(1.01); /* Effet de zoom très léger */
    color: #000;
}

/* Badge pour "Tutto il giorno" */
table td:contains("Tutto il giorno") {
    font-style: italic;
    color: #6b0f1a;
}

/* Animation à l'apparition (Optionnel) */
@keyframes fadeIn {
    from { opacity: 0; transform: translateY(20px); }
    to { opacity: 1; transform: translateY(0); }
}

table {
    animation: fadeIn 0.8s ease-out;
}
</style>
</section>
<?php include 'footer.php'; ?>
</body>
</html>