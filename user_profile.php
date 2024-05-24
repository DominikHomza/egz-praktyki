<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$db = "uzytkowicy";

$conn = new mysqli($servername, $username, $password, $db);

if ($conn->connect_error) {
    die("Błąd połączenia z bazą danych: " . $conn->connect_error);
}

if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit();
}

$username = $_SESSION["username"];

$query = "SELECT exam_name, score FROM wyniki WHERE userName = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();

if (isset($_POST["logout"])) {
    session_destroy(); 
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Profil Użytkownika</title>
    <link rel="stylesheet" href="styleuser.css">
</head>
<body>
    <header>
        <h1>Witaj, <?php echo $username; ?>!</h1>
    </header>
    <main>
        <section class="tiles">
            <a href="inf03.php" class="tile">Ezgamin Inf03</a>
            <a href="inf04.php" class="tile">Egzamin Inf04</a>
            <a href="FAQ.php" class="tile">FAQ</a>
        </section>
        <?php if ($result->num_rows > 0): ?>
            <p>Twoje wyniki poszczególnych egzaminów:</p>
            <ul>
                <?php while($row = $result->fetch_assoc()): ?>
                    <li>
                        <?php echo $row['exam_name']; ?>: <?php echo $row['score']; ?>
                        <?php if ($row['score'] >= 20): ?>
                            - Zdałeś
                        <?php else: ?>
                            - Nie zdałeś
                        <?php endif; ?>
                    </li>
                <?php endwhile; ?>
            </ul>
        <?php else: ?>
            <p>Brak wyników egzaminów</p>
        <?php endif; ?>
        <form action="" method="post">
            <button type="submit" name="logout">Wyloguj</button>
        </form>
    </main>
    <footer>
       
    </footer>
</body>
</html>

