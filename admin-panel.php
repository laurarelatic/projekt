<?php
session_start();

if (!isset($_SESSION["admin"])) {
    header("Location: admin-login.php");
    exit();
}
require "db.php";
if (isset($_POST["dodaj"])) {

    $naziv = $_POST["naziv"];
    $opis = $_POST["opis"];
    $cijena = $_POST["cijena"];
    $slika = $_POST["slika"];

    $stmt = $conn->prepare("
        INSERT INTO sjajila
        (naziv, opis, cijena, slika)
        VALUES (?, ?, ?, ?)
    ");

    $stmt->bind_param(
        "ssds",
        $naziv,
        $opis,
        $cijena,
        $slika
    );

    $stmt->execute();
}

if (isset($_GET["obrisi"])) {

    $id = (int)$_GET["obrisi"];

    $conn->query("
        DELETE FROM sjajila
        WHERE id = $id
    ");
}

$proizvodi = $conn->query("
    SELECT *
    FROM sjajila
    ORDER BY id DESC
");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Panel</title>
</head>
<link 
    href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Montserrat:wght@300;400;500&display=swap"
    rel="stylesheet">
<style>
body{
    margin:0;
    padding:40px;
    background:#0f0f0f;
    color:#fff;
    font-family: 'Montserrat', sans-serif;
}

/* Naslovi */
h1, h2, h3{
    font-family: 'Playfair Display', serif;
    margin-bottom:20px;
}

/* Container */
.container{
    max-width:1000px;
    margin:0 auto;
}

/* Proizvod */
.proizvod{
    background:#1b1b1b;
    padding:20px;
    margin-bottom:20px;
    border-radius:16px;
    text-align:center;
    transition:0.3s;
    box-shadow: 0 10px 25px rgba(0,0,0,0.3);
}

.proizvod:hover{
    transform: translateY(-5px);
}

.proizvod img{
    width:180px;
    border-radius:12px;
}

/* Button */
button{
    background:#d4af37;
    color:#111;
    padding:10px 16px;
    border:none;
    border-radius:10px;
    cursor:pointer;
    font-weight:600;
    transition:0.3s;
}

button:hover{
    background:#b8932d;
}

/* Linkovi */
a{
    text-decoration:none;
    color:#fff;
    font-weight:500;
}

a:hover{
    color:#d4af37;
}

/* Forme */
input, textarea{
    width:100%;
    padding:10px;
    margin:8px 0;
    border-radius:10px;
    border:none;
    background:#222;
    color:#fff;
}

textarea{
    min-height:100px;
}

hr{
    border:0;
    height:1px;
    background:#333;
    margin:30px 0;
}

/* Admin box */
.admin-box{
    background:#1b1b1b;
    padding:20px;
    border-radius:16px;
}
</style>
<body>

<h1>Admin Panel</h1>

<a href="logout.php">Odjava</a>

<hr>

<h2>Dodaj novo sjajilo</h2>

<form method="POST">

    <input
        type="text"
        name="naziv"
        placeholder="Naziv"
        required
    >

    <br><br>

    <textarea
        name="opis"
        placeholder="Opis"
        required
    ></textarea>

    <br><br>

    <input
        type="number"
        step="0.01"
        name="cijena"
        placeholder="Cijena"
        required
    >

    <br><br>

    <input
        type="text"
        name="slika"
        placeholder="slike/proizvod.jpg"
        required
    >

    <br><br>

    <button
        type="submit"
        name="dodaj"
    >
        Dodaj proizvod
    </button>

</form>

<hr>

<h2>Sva sjajila</h2>

<?php while($p = $proizvodi->fetch_assoc()): ?>

<div style="margin-bottom:20px">

    <strong>
        <?= htmlspecialchars($p["naziv"]) ?>
    </strong>

    <br>

    <?= htmlspecialchars($p["opis"]) ?>

    <br>

    <?= $p["cijena"] ?> €

    <br>

    <img
        src="<?= htmlspecialchars($p["slika"]) ?>"
        width="100"
    >

    <br>


    <a href="?obrisi=<?= $p["id"] ?>">
        Obriši
    </a>

</div>

<hr>

<?php endwhile; ?>

</body>
</html>