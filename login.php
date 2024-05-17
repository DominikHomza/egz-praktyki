<?php
session_start();
$error_message = "";

$servername = "localhost";
$username = "root";
$password = "";
$db = "uzytkowicy";

$conn = new mysqli($servername, $username, $password, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["login"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM users WHERE username='$username'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $stored_password = $row["password"];

        if (password_verify($password, $stored_password)) {
            $_SESSION["username"] = $username;
            header("Location: user_profile.php");
            exit();
        } else {
            $error_message = "Nieprawidłowa nazwa użytkownika lub hasło.";
        }
    } else {
        $error_message = "Nieprawidłowa nazwa użytkownika lub hasło.";
    }
}
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Strona Egzaminacyjna - Logowanie</title>
    <link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
    <header>
        <h1>Strona Egzaminacyjna - Logowanie</h1>
    </header>
    <main>
        <section class="login-form">
            <h2>Logowanie</h2>
            <form action="login.php" method="post">
                <label for="username">Nazwa użytkownika:</label>
                <input type="text" id="username" name="username" required><br>
                <label for="password">Hasło:</label>
                <input type="password" id="password" name="password" required><br>
                <input type="submit" name="login" value="Zaloguj się">
            </form>
            <?php if(isset($error_message)) echo "<p class='error'>$error_message</p>"; ?>
            <p>Nie masz jeszcze konta? <a href="register.php">Zarejestruj się</a>.</p>
            <nav>
    <a href="FAQ.php" class="btn btn-faq">FAQ</a>
</nav>

        </section>
    </main>
    <footer>
    </footer>
</body>
</html>
