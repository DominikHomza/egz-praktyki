<?php
session_start();


if (!isset($_SESSION["username"])) {
    header("Location: index.php");
    exit();
}


$username = $_SESSION["username"];
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Użytkownika</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Witaj, <?php echo $username; ?>!</h1>
    </header>
    <main>
        
        <p>To jest strona profilu użytkownika.</p>
    </main>
    <footer>
       
    </footer>
</body>
</html>
