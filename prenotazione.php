<!DOCTYPE html>
<html lang="it">
<head>
<meta charset="UTF-8">
<title>Prenotazione - Festival del Vino</title>
<link rel="stylesheet" href="stile.css">
<link href="https://fonts.googleapis.com/css2?family=Lato&family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
<style>
    /* Le conteneur principal qui aligne les 3 colonnes */
    .main-wrapper {
        display: flex;
        justify-content: center;
        align-items: flex-start; /* Aligne le haut des images avec le haut du formulaire */
        gap: 40px;               /* Espace entre les photos et le formulaire */
        max-width: 1300px;
        margin: 40px auto;
        padding: 0 20px;
    }

    /* Style commun pour les colonnes de photos */
    .photo-column {
        flex: 1;                 /* Prend l'espace disponible */
        max-width: 280px;        /* Limite la largeur pour ne pas étouffer le centre */
        top: 20px;
    }

    .photo-column img {
        width: 100%;
        height: auto;
        display: block;
        /* LE CONTOUR COLORÉ ET STYLE */
        border: 2px solid #6b0f1a; /* Ton bordeaux */
        border-radius: 20px;
        box-shadow: 0 15px 35px rgba(0,0,0,0.15);
    }

    /* La colonne centrale du formulaire */
    .form-column {
        flex: 2;
        max-width: 600px;
        background: white;
        padding: 30px;
        border-radius: 20px;
        box-shadow: 0 5px 20px rgba(0,0,0,0.05);
        border: 1px solid #eee;
    }

    /* Adaptation pour les tablettes/mobiles */
    @media (max-width: 1000px) {
        .photo-column { display: none; } /* Cache les photos si l'écran est trop petit */
    }

    /* Style du bouton Acquista */
    .btn-acquista {
        background-color: #6b0f1a;
        color: white;
        border: none;
        padding: 18px 60px;
        font-size: 1.3rem;
        font-weight: bold;
        border-radius: 50px;
        cursor: pointer;
        transition: 0.3s;
    }
</style>

</head>

<body>

<header>
    <h1>🍷 Acquista Biglietti</h1>
    <?php include 'navbar.php'; ?>
</header>

<!-- DÉBUT DE LA STRUCTURE EN 3 COLONNES -->
<div class="main-wrapper">

    <!-- CÔTÉ GAUCHE -->
    <aside class="photo-column">
        <!-- REMPLACE PAR TON NOM DE FICHIER REEL -->
        <img src="img/Festival img.png" alt="Festival">
        <br>
        <img src="img/Festival 5 img.png" alt="Festival">
        <br>
        <img src="img/Festival 4  img.png" alt="Festival">
    </aside>

    <!-- CENTRE : TON FORMULAIRE -->
    <main class="form-column">
        <h2 style="text-align: center; color: #6b0f1a;">🎟️ Prenotazione biglietti</h2>

        <form action="process.php" method="post">
            <p style="text-align: center;"><strong>Prezzo:</strong> 25€ al giorno (20€ al giorno selezionando più giorni)</p>

            <div style="margin: 20px 0;">
                <input type="text" name="telefono" placeholder="Telefono" required style="width: 80%; padding: 10px; margin-bottom: 10px">
                <input type="email" name="email" placeholder="Email" required style="width: 80%; padding: 10px;margin-bottom:10px">
            </div>

            <div style="text-align: center; margin: 30px 0;">
                <p><strong>Scegli i giorni:</strong></p>
                <div class="selection-verticale">
                    <div style="text-align: center; margin-bottom: 20px; align-items: center;">
    <style>

        .selection-verticale {

            display: inline-block;

            text-align: left;      

            margin: 0 auto;

        }

        .selection-verticale label {

            display: flex;

            align-items: center;

            cursor: pointer;

            font-size: 1rem;

            margin-bottom: 12px;

        }

        .selection-verticale input[type="checkbox"]
        {
            width: 18px;

            height: 18px;

            margin-right: 15px;

            cursor: pointer;

            flex-shrink: 0;    
        }
    </style>

</div>


                    <label><input type="checkbox" name="giorni[]" value="Venerdì"> Venerdì</label>
                    <label><input type="checkbox" name="giorni[]" value="Sabato"> Sabato</label>
                    <label><input type="checkbox" name="giorni[]" value="Domenica"> Domenica</label>
                </div>
            </div>

            <div style="text-align: center; background: #fdfdfd; padding: 20px">
                <label><strong>Numero biglietti:</strong></label><br>
                <input type="number" id="quantita" name="quantita" value="1" min="1" style="width: 100px; padding: 5px; text-align: left;"><br><br>
                <p style="font-size: 1.4rem;"><strong>Totale:</strong> <span id="totale"; font-weight: bold;>0</span> €</p>
            </div>

            <div id="persone"></div>

            <!-- Séparateur -->
            <div style="display: flex; align-items: center; margin: 40px 0;">
                <div style="flex: 1; height: 1px; background: #6b0f1a;"></div>
                <div style="margin: 0 15px; color: black; font-weight: bold;">🎟️ Biglietti digitali</div>
                <div style="flex: 1; height: 1px; background: #6b0f1a;"></div>
            </div>

            <!-- Paiement -->
            <div style="border: 1px solid #eee; border-radius: 20px; padding: 20px; text-align: center;">
                <h3 style="font-size: 14px; margin-bottom: 15px;">🛡️ Pagamento sicuro al 100%</h3>
                <div style="display: flex; justify-content: center; align-items: center; gap: 15px;">
                    <img src="img/PayPal.jpg" alt="PayPal" style="height: 35px; border-radius: 5px;">
                    <img src="img/Visa.png" alt="Visa" style="height: 20px; border-radius: 5px;">
                    <img src="img/MasterCard.png" alt="MasterCard" style="height: 35px; border-radius: 5px;">
                    <img src="img/Satispay.png" alt="Satispay" style="height: 35px; border-radius: 5px;">
                </div>
            </div>

            <div style="text-align: center; margin-top: 40px;">
                <button type="submit" class="btn-acquista">Acquista</button>
            </div>
        </form>
    </main>

    <!-- CÔTÉ DROIT -->
    <aside class="photo-column">
        <!-- REMPLACE PAR TON NOM DE FICHIER REEL -->
        <img src="img/Festival 2 img.png" alt="Festival">
        <br>
        <img src="img/Festival 3 img.png" alt="Festival Tchin-cin">
        <br>
        <img src="img/Festival 6 img .png" alt="Festival">
    </aside>

</div>

<script>
const quantita = document.getElementById("quantita");
const personeDiv = document.getElementById("persone");
const totaleSpan = document.getElementById("totale");
const checkboxes = document.querySelectorAll("input[name='giorni[]']");

function generaCampi() {
    let n = quantita.value;
    personeDiv.innerHTML = "";
    for (let i = 1; i <= n; i++) {
        personeDiv.innerHTML += `
            <div style="margin-top: 20px; padding: 15px; border-left: 4px solid #6b0f1a; background: #f9f9f9; border-radius: 5px;">
                <h4 style="margin: 0 0 10px 0; color: #6b0f1a;">Persona ${i}</h4>
                <input type="text" name="nome[]" placeholder="Nome" required style="margin-bottom: 5px; width: 90%;">
                <input type="text" name="cognome[]" placeholder="Cognome" required style="width: 90%;">
            </div>
        `;
    }
    calcolaTotale();
}

function calcolaTotale() {
    let jours = document.querySelectorAll("input[name='giorni[]']:checked").length;
    let q = parseInt(quantita.value);
    if (jours === 0) { totaleSpan.innerText = 0; return; }
    let prix = (jours === 1) ? 25 : 20;
    totaleSpan.innerText = prix * jours * q;
}

quantita.addEventListener("input", generaCampi);
checkboxes.forEach(cb => cb.addEventListener("change", calcolaTotale));
window.onload = generaCampi;
</script>

<footer>
    <p>© 2026 Festival Tchin-Cin - Creato con passione</p>
</footer>

</body>
</html>