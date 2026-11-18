<?php
$conn = new mysqli("localhost", "root", "", "zadanie");

if ($conn->connect_error) {
    die("Blad polaczenia: " . $conn->connect_error);
}

$conn->set_charset("utf8mb4");
?>