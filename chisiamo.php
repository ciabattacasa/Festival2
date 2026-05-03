<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Chi siamo - Festival Tchin-Cin 2026</title>
    <link rel="stylesheet" href="stile.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato&family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
</head>
<body>

<header>
    <h1>🍷 Festival Tchin-Cin 2026</h1>
    <?php include 'navbar.php'; ?>
</header>

<section class="hero">
    <div class="hero-text">
        <h2>La storia di Tchin-Cin 🍷🍇</h2>
        <p>Questo festival è innanzitutto la storia di un <strong>valore</strong> che ci unisce tutte e tre: la <strong>valorizzazione dei nostri patrimoni locali</strong>. Quindi, cercando ciò che crea un legame indissolubile tra la <strong>Francia</strong> e l’<strong>Italia</strong>, la risposta si è imposta da sé: il <strong>vino</strong>, perché non è solo un prodotto ma un vero e proprio <i>incontro culturale</i>.</p>

        <p> La scelta di organizzare un <i>festival franco-italiano</i> è stata rafforzata dalle nostre <strong>radici</strong>: proveniamo da due regioni rinomate per i loro <u>vini d’eccellenza</u>: la <strong>Bourgogne</strong> e la <strong>Toscana</strong>. Dunque, far dialogare questi due terroir d’eccezione è stato per noi del tutto naturale.</p>
        <p> E così è nato <strong>Tchin-Cin!</strong></p>
        <p> Abbiamo immaginato questo festival come un vero luogo di <strong>scoperta</strong> e 
<strong>condivisione</strong>, poiché le nostre culture sono prima di tutto <u>storie di famiglia</u>, abbiamo pensato questo evento per <i>grandi</i> e <i>piccoli</i>: dalle degustazioni per i genitori ai laboratori didattici per i bambini, <strong>nessuno viene escluso</strong>.</p>
        <p> Con <strong>Tchin-Cin</strong> non proponiamo soltanto una fiera del vino come tante altre, ma un viaggio tra le nostre due culture.</p>
        <p>I nostri valori sono semplici: <strong>tradizione</strong>, <strong>eccellenza</strong> e 
<strong>convivialità</strong>: <strong>Tchin-Cin</strong> è un festival che <i>ci rappresenta</i> e che <u>unisce</u>, stimolando l’economia locale e coltivando uno spirito di condivisione tra i nostri due terroir.</p>
    </div>
    <div class="hero-img">
            <img src="vino2.jpg">
    </div>
</section>


<section class="features" style="background-color: #f4f4f4; border-radius: 10px; margin: 20px; padding: 40px 20px;">
    <div style="max-width: 800px; margin: 0 auto; text-align: center;">
        <h2>Valuta la tua conoscenza sul vino 🍇</h2>
        <p>Ecco un piccolo <strong>quiz</strong> sul vino, per divertirti e provare a vincere <strong>premi</strong>!</p>

        <form action="quiz.php" style="text-align: left; background: white; padding: 30px; border-radius: 8px; box-shadow: 0 4px 15px rgba(0,0,0,0.1); display: inline-block; width: 100%; box-sizing: border-box;">
            
            <!-- Style interne pour aligner les réponses sans toucher au fichier CSS -->
            <style>
                .quiz-question { margin-bottom: 20px; }
                .quiz-question strong { display: block; margin-bottom: 10px; color: #6b0f1a; }
                .answer-option { display: block; margin-bottom: 8px; cursor: pointer; }
                .answer-option input { width: auto; margin-right: 10px; }
            </style>

            <div class="quiz-question">
                <strong>1. Chi è il più grande produttore di vino al mondo?</strong>
                <label class="answer-option"><input name="Risposta1" type="radio" value="1"> Francia</label>
                <label class="answer-option"><input name="Risposta1" type="radio" value="2"> Italia</label>
                <label class="answer-option"><input name="Risposta1" type="radio" value="3"> Spagna</label>
            </div>

            <div class="quiz-question">
                <strong>2. Quale regione italiana è famosa per il vino Barolo?</strong>
                <label class="answer-option"><input name="Risposta2" type="radio" value="1"> Piemonte</label>
                <label class="answer-option"><input name="Risposta2" type="radio" value="2"> Toscana</label>
                <label class="answer-option"><input name="Risposta2" type="radio" value="3"> Veneto</label>
            </div>

            <div class="quiz-question">
                <strong>3. In quale paese si trova la regione vinicola di Bordeaux?</strong>
                <label class="answer-option"><input name="Risposta3" type="radio" value="1"> Spagna</label>
                <label class="answer-option"><input name="Risposta3" type="radio" value="2"> Francia</label>
                <label class="answer-option"><input name="Risposta3" type="radio" value="3"> Italia</label>
            </div>

            <div class="quiz-question">
                <strong>4. Da cosa si ottiene il vino?</strong>
                <label class="answer-option"><input name="Risposta4" type="radio" value="1"> Uva</label>
                <label class="answer-option"><input name="Risposta4" type="radio" value="2"> Mele</label>
                <label class="answer-option"><input name="Risposta4" type="radio" value="3"> Arance</label>
            </div>

            <div class="quiz-question">
                <strong>5. Come si chiama il processo che trasforma il succo d'uva in vino?</strong>
                <label class="answer-option"><input name="Risposta5" type="radio" value="1"> Distillazione</label>
                <label class="answer-option"><input name="Risposta5" type="radio" value="2"> Evaporazione</label>
                <label class="answer-option"><input name="Risposta5" type="radio" value="3"> Fermentazione</label>
            </div>

            <div class="quiz-question">
                <strong>6. Cosa si usa per tappare una bottiglia di vino?</strong>
                <label class="answer-option"><input name="Risposta6" type="radio" value="1"> Plastica</label>
                <label class="answer-option"><input name="Risposta6" type="radio" value="2"> Carta</label>
                <label class="answer-option"><input name="Risposta6" type="radio" value="3"> Sughero</label>
            </div>

            <div class="quiz-question">
                <strong>7. Come si serve il vino rosso?</strong>
                <label class="answer-option"><input name="Risposta7" type="radio" value="1"> A temperatura ambiente</label>
                <label class="answer-option"><input name="Risposta7" type="radio" value="2"> Freddissimo</label>
                <label class="answer-option"><input name="Risposta7" type="radio" value="3"> Congelato</label>
            </div>

            <div class="quiz-question">
                <strong>8. Il termine "terroir" si riferisce a:</strong>
                <label class="answer-option"><input name="Risposta8" type="radio" value="1"> Il tipo di bottiglia</label>
                <label class="answer-option"><input name="Risposta8" type="radio" value="2"> L'insieme di clima, suolo e ambiente</label>
                <label class="answer-option"><input name="Risposta8" type="radio" value="3"> Il metodo di fermentazione</label>
            </div>

            <div class="quiz-question">
                <strong>9. Cosa si può fare per sentirne il profumo prima di bere?</strong>
                <label class="answer-option"><input name="Risposta9" type="radio" value="1"> Agitare il bicchiere</label>
                <label class="answer-option"><input name="Risposta9" type="radio" value="2"> Metterlo in frigo</label>
                <label class="answer-option"><input name="Risposta9" type="radio" value="3"> Mescolarlo con un cucchiaio</label>
            </div>

            <div class="quiz-question">
                <strong>10. Cosa significa "fare un brindisi"?</strong>
                <label class="answer-option"><input name="Risposta10" type="radio" value="1"> Lavare i bicchiere</label>
                <label class="answer-option"><input name="Risposta10" type="radio" value="2"> Rompere i bicchieri</label>
                <label class="answer-option"><input name="Risposta10" type="radio" value="3"> Bere insieme per festeggiare</label>
            </div>

            <div style="text-align: center; margin-top: 30px;">
                <input type="submit" value="Calcola il punteggio" class="btn-main" style="border:none; cursor:pointer; padding: 15px 30px;">
            </div>
        </form>
    </div>
</section>
<?php include 'footer.php'; ?>

</body>
</html>