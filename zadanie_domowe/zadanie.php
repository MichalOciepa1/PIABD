
<?php

$conn = new mysqli("localhost", "root", "", "zadanie");

if ($conn->connect_error) {
    die("Blad polaczenia z baza!");
}

if (isset($_POST['dodaj'])) {

    $sql = "INSERT INTO uczniowie1 (nazwisko, imie, klasa) VALUES
    ('Kowalski', 'Jan', '4B'),
    ('Nowak', 'Adam', '4B'),
    ('Wisniewski', 'Piotr', '4B')";

    if ($conn->query($sql)) {
        echo "Dodano rekordy do bazy danych!";
    } else {
        echo "Blad: " . $conn->error;
    }
}

?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Moja strona PHP</title>
</head>
<body>

<header>
    <h1>Moja strona internetowa</h1>
</header>

<main>

    <p>Projektowanie stron internetowych w PHP</p>

    <form method="POST">
        <button type="submit" name="dodaj">
            Dodaj uczniów do bazy
        </button>
    </form>
</main>

<footer>
    <p>Michał Ociepa</p>
</footer>

</body>
</html>
