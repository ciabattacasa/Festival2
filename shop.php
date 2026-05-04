<?php
include("connessione.php");

$sql = "SELECT DISTINCT categoria
FROM prodotti";

$result = $conn->query($sql);

$categorie = [];

while ($row = $result->fetch_assoc()) {
    $categorie[] = $row['categoria'];
}
?>

<!DOCTYPE html>
<html lang="it">
<head>
<meta charset="UTF-8">
<title>Shop - Festival Tchin-Cin 2026</title>
<link rel="stylesheet" href="stile.css">
<link href="https://fonts.googleapis.com/css2?family=Lato&family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
</head>

<body>

<header>
    <h1>🍷 Festival Tchin-Cin 2026</h1>
    <?php include 'navbar.php'; ?>
</header>

<section>
    <h2>🛍 Boutique del Festival</h2>
    <p style="text-align:center;">
        Porta con te un ricordo esclusivo del Festival Tchin-Cin.
    </p>

    <div class="shop-grid">

<?php
foreach($categorie as $cat)
{
    echo "<div class='category-block'>";

    echo "<h2 class='category-title'>$cat</h2>";

    echo "<div class='shop-grid'>";

    $sql = "SELECT * 
        FROM prodotti 
        WHERE categoria='$cat'
        ORDER BY id ASC";
    $result = $conn->query($sql);

    while($row = $result->fetch_assoc())
    {
        echo "<div class='shop-card'>";
        echo "<img src='img/".$row["immagine"]."'>";
        echo "<h3>".$row["nome"]."</h3>";
        echo "<p>".$row["descrizione"]."</p>";
        echo "<p class='prezzo'>€ ".$row["prezzo"]."</p>";
        echo "<a class='btn-main' href='carrello.php?id=".$row["id"]."'>Acquista</a>";
        echo "</div>";
    }

    echo "</div>"; // shop-grid
    echo "</div>"; // category-block
}
?>

    </div>
</section>

<?php include 'footer.php'; ?>

</body>
</html>