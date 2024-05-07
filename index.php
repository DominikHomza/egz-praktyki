<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "uzytkowicy";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Logika rejestracji użytkownika
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["register"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Sprawdzenie, czy hasło spełnia politykę haseł
    $password_policy = "/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/";
    if (!preg_match($password_policy, $password)) {
        $error_message = "Hasło musi zawierać co najmniej jedną małą literę, jedną dużą literę, jedną cyfrę, jeden znak specjalny i mieć co najmniej 8 znaków.";
    } else {
        // Dodanie użytkownika do bazy danych
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO users (username, password) VALUES ('$username', '$hashed_password')";
        if ($conn->query($sql) === TRUE) {
            $_SESSION["username"] = $username;
            header("Location: user_profile.php");
            exit();
        } else {
            $error_message = "Wystąpił problem podczas rejestracji użytkownika.";
        }
    }
}

// Logika logowania użytkownika
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["login"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM users WHERE username='$username'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row["password"])) {
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strona Egzaminacyjna</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Strona Egzaminacyjna</h1>
    </header>
    <main>
        <section class="login-form">
            <h2>Logowanie</h2>
            <form action="index.php" method="post">
                <label for="username">Nazwa użytkownika:</label>
                <input type="text" id="username" name="username" required><br>
                <label for="password">Hasło:</label>
                <input type="password" id="password" name="password" required><br>
                <input type="submit" name="login" value="Zaloguj się">
            </form>
            <?php if(isset($error_message)) echo "<p class='error'>$error_message</p>"; ?>
        </section>
        
        <section class="register-form">
            <h2>Rejestracja</h2>
            <form action="index.php" method="post">
                <label for="reg_username">Nazwa użytkownika:</label>
                <input type="text" id="reg_username" name="username" required><br>
                <label for="reg_password">Hasło:</label>
                <input type="password" id="reg_password" name="password" required><br>
                <input type="submit" name="register" value="Zarejestruj się">
            </form>
        </section>
        
        <section class="tiles">
            <a href="inf03.html" class="tile">Inf03</a>
            <a href="inf04.html" class="tile">Inf04</a>
        </section>
    </main>
    <footer>
    </footer>
</body>
</html>
