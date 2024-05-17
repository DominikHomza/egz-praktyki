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

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["register"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $password_policy = "/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/";
    if (!preg_match($password_policy, $password)) {
        $error_message = "Hasło musi zawierać co najmniej jedną małą literę, jedną dużą literę, jedną cyfrę, jeden znak specjalny i mieć co najmniej 8 znaków.";
    } else {
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
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Strona Egzaminacyjna - Rejestracja</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <header>
        <h1>Strona Egzaminacyjna - Rejestracja</h1>
    </header>
    <main>
        <section class="register-form">
            <h2>Rejestracja</h2>
            <form action="register.php" method="post">
                <label for="reg_username">Nazwa użytkownika:</label>
                <input type="text" id="reg_username" name="username" required><br>
                <label for="reg_password">Hasło:</label>
                <input type="password" id="reg_password" name="password" required><br>
                <input type="submit" name="register" value="Zarejestruj się">
            </form>
            <?php if(isset($error_message)) echo "<p class='error'>$error_message</p>"; ?>
            <p>Masz już konto? <a href="login.php">Zaloguj się</a>.</p>
            <nav>
    <a href="FAQ.php" class="btn btn-faq">FAQ</a>
</nav>
        </section>
    </main>
    <footer>
    </footer>
</body>
</html>