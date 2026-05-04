<nav>
    <a href="index.php">Home</a>
    <a href="programma.php">Programma</a>
    <a href="prenotazione.php">Prenotazione</a>
    <a href="partner.php">I nostri partner</a>
    <a href="chisiamo.php">Chi siamo</a>
    <a href="shop.php">Shop</a>
    <?php
   if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
    if (isset($_COOKIE["loggedin"]) && $_COOKIE["loggedin"] === "true" && isset($_COOKIE["email"])) {
        $_SESSION['loggedin'] = true;
        $_SESSION['email'] = $_COOKIE["email"];
        echo '<a href="logout.php">LogOut</a>';
    } else {
        echo '<a href="login.php">LogIn</a>';
    }
    ?> 
</nav>