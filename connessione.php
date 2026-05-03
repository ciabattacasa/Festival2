<?php

$conn = new mysqli("localhost","root","","festivalshop");

if($conn->connect_error)
{
    die("Connessione fallita");
}

?>