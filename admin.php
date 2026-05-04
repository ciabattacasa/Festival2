<?php
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: login.php");
    exit();
}

include "db.php";
$conn = connetti();

$sql = "SELECT * FROM shop_prenotazioni";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Admin - Festival Tchin-Cin 2026</title>
    <link rel="stylesheet" href="stile.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato&family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
</head>
<body>

<header>
    <h1>🍷 Festival Tchin-Cin 2026</h1>
    <?php include 'navbar.php'; ?>
</header>

<section>
    <h2>📋 Lista Prenotazioni</h2>

    <?php
    if ($result->num_rows > 0) {
        echo "<table>
                <tr>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Giorno</th>
                    <th>Messaggio</th>
                </tr>";

        while($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>".$row["nome"]."</td>
                    <td>".$row["email"]."</td>
                    <td>".$row["giorno"]."</td>
                    <td>".$row["messaggio"]."</td>
                  </tr>";
        }

        echo "</table>";
    } else {
        echo "<p style='text-align: center;'>Nessuna prenotazione presente.</p>";
    }

    $conn->close();
    ?>
</section>

</body>
</html>