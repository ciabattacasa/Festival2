<?php
session_start();

// Clear all session data
$_SESSION = array();

// Delete cookies
setcookie("loggedin", "", time() - 3600, "/");
setcookie("email", "", time() - 3600, "/");

// Destroy session
session_destroy();

// Redirect to home or login
header("Location: index.php");
exit();
?>