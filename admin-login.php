<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST["username"];
    $password = $_POST["password"];

    if ($username === "admin" && $password === "admin123") {

        $_SESSION["admin"] = true;

        header("Location: admin-panel.php");
        exit();
    }

    $error = "Pogrešni podaci.";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Login</title>
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

h1, h2, h3{
    font-family: 'Playfair Display', serif;
    margin-bottom:20px;
}

.container{
    max-width:1000px;
    margin:0 auto;
}

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

a{
    text-decoration:none;
    color:#fff;
    font-weight:500;
}

a:hover{
    color:#d4af37;
}

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

.admin-box{
    background:#1b1b1b;
    padding:20px;
    border-radius:16px;
}
</style>
<body>

<h1>Admin prijava</h1>

<?php if(isset($error)) echo $error; ?>

<form method="POST">

    <input
        type="text"
        name="username"
        placeholder="Korisničko ime"
        required
    >

    <br><br>

    <input
        type="password"
        name="password"
        placeholder="Lozinka"
        required
    >

    <br><br>

    <button type="submit">
        Prijava
    </button>

</form>

</body>
</html>