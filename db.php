<?php

$conn = new mysqli(
    "localhost",
    "root",
    "",
    "lumiere_shop"
);

if ($conn->connect_error) {
    die("Greška pri spajanju na bazu.");
}

$conn->set_charset("utf8");
?>