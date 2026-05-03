<?php
function connetti() {
    $conn = mysqli_connect("localhost", "root", "", "negozio");
    return $conn;
}
?>