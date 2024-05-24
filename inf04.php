<?php
session_start();

if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit();
}

$username = $_SESSION['username'];

// Połączenie z bazą danych
$servername = "localhost";
$username_db = "root";
$password_db = "";
$dbname = "uzytkowicy";

$conn = new mysqli($servername, $username_db, $password_db, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Pobranie pytań z bazy danych
$sql = "SELECT * FROM pytaniainf04";
$result = $conn->query($sql);

$pytania = array();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $pytanie = array(
            'pytanie' => $row['pytanie'],
            'opcje' => array(
                'A' => $row['opcja_A'],
                'B' => $row['opcja_B'],
                'C' => $row['opcja_C'],
                'D' => $row['opcja_D']
            ),
            'poprawnaOdpowiedz' => $row['poprawna_odpowiedz']
        );
        $pytania[] = $pytanie;
    }
} else {
    echo "Brak pytań w bazie danych.";
}
$conn->close();
?>


<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>INF.04.</title>
    <link rel="stylesheet" href="styleinf.css">
</head>
<body>
    <header>
        <h1>Egzamin INF.04.</h1>
    </header>
    <main>
        <br>
        <section class="tiles">
            <a href="inf03.php" class="tile">Egzamin Inf03</a>
            <a href="user_profile.php" class="tile">Profil użytkownika</a>
            <a href="FAQ.php" class="tile">FAQ</a>
        </section>
        <section class="content">
            <p>
                INF.04. Projektowanie, Programowanie I Testowanie Aplikacji<br><br>
                
                Absolwent szkoły dającej wykształcenie średnie, który zdobył kwalifikację INF.03. Tworzenie i administrowanie stronami i aplikacjami internetowymi i bazami danych po uzupełnieniu kwalifikacji INF.04. Projektowanie, programowanie i testowanie aplikacji zdobywa zawód technik  programista. Strona przygotwoująca do kwalifikacji zawodowych w zawodzie technik informatyk i technik programista w oparciu o zmodernizowane podstawy programowe kształcenia.<br><br>
                
                Szczegółowy harmonogram publikowany jest w Komunikacie dyrektora CKE dostępnym tutaj. Najczęściej jest to sejsa zimowa (styczeń - luty) oraz sesja letnia (czerwiec - lipiec).<br><br>
                
                Egzamin zawodowy składa się z części pisemnej i części praktycznej.<br><br>
                
                Część pisemna trwa 60 minut i przeprowadzana jest w formie testu pisemnego/elektronicznego składającego się z 40 zadań zamkniętych zawierających cztery odpowiedzi do wyboru, z których tylko jedna odpowiedź jest prawidłowa. W przypadku testu elektronicznego należy pamiętać, że komputer nie może mieć dostępu do sieci Internet oraz nie można korzystać z innych programów niż przeglądarka internetowa.<br><br>
                
                Część praktyczna egzaminu zawodowego polega na wykonaniu zadań egzaminacyjnych. Część praktyczna trwa nie krócej niż 120 minut i nie dłużej niż 240 minut i jest ‎‎przeprowadzana w formie testu praktycznego, polegającego na wykonaniu przez zdającego ‎‎zadania egzaminacyjnego zawartego w arkuszu egzaminacyjnym na stanowisku ‎‎egzaminacyjnym.<br><br>
                
                Tak, egzamin jest obowiązkowy dla osób, które zdają go w nowej formule 2019 - czyli kwalifikacje IFN.03. Należy do takiego egzaminu przystąpić - nie trzeba go zdać (można uzyskać nawet 0%)- aby móc ukończyć dany rok szkolny lub zostać absolwentem szkoły.<br><br>
                
                Jakie warunki należy spełnić, aby zdać egzamin?<br><br>
                
                Aby zdać egzamin zawodowy, należy uzyskać:<br>
                - z części pisemnej – co najmniej 50% punktów możliwych do uzyskania (czyli minimum 20 punktów),<br>
                - z części praktycznej – co najmniej 75% punktów możliwych do uzyskania.<br><br>
                
                Wynik egzaminu zawodowego ustala i przekazuje komisja okręgowa.<br><br>
                
                Jaki dokument otrzymuje się po zdaniu egzaminu?<br><br>
                
                Zdający, który zdał egzamin zawodowy w danym zawodzie, otrzymuje certyfikat kwalifikacji zawodowej, wydany przez komisję okręgową.<br><br>
                
                Dyplomy i suplementy do dyplomów wydają okręgowe komisje egzaminacyjne.<br><br>
                
                Zdający, który nie zdał egzaminu zawodowego, otrzymuje informację o wynikach.<br><br>
                
                Co w przypadku nie zdania egzaminu?<br><br>
                
                Jeżeli nie uda Ci się uzyskać wymaganych progów procentowych do zdania egzaminu zawodowego, to masz możliwość podejścia tylko do tej części, z której nie uzyskano minimum do zdania, w kolejnej sesji egzaminacyjnej. 
                Na przykład w sesji zimowej nie udało się zdać części praktycznej, można do niej ponownie podejść w najbliższej sesji letniej.
                Niezdany egzamin zawodowy nie ma wpływu na promocję do klasy wyższej lub na ukończenie szkoły. Jedynie nie otrzyma się tytułu technika.
            </p>
        </section>
    </main>
    <section class="content">
            <button id="generujQuizButton">Generuj Quiz</button> 
            <div id="kontenerQuizu"></div> 
            <button id="obliczWynikButton" style="display: none;">Oblicz Wynik</button> 
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" id="zapiszWynikForm" style="display: none;">
    <input type="hidden" id="userNameInput" name="userName" value="<?php echo $username; ?>">
    <input type="hidden" id="wynikInput" name="wynik">
    
</form>
        </section>
    </main>
    <footer>
        
    </footer>

    <script>
        var pytania = <?php echo json_encode($pytania); ?>;

        var generujQuizButton = document.getElementById('generujQuizButton');
        var obliczWynikButton = document.getElementById('obliczWynikButton');
        var kontenerQuizu = document.getElementById('kontenerQuizu');
        var zapiszWynikForm = document.getElementById('zapiszWynikForm');
        var wynikInput = document.getElementById('wynikInput');
        var userNameInput = document.getElementById('userNameInput');
        var wybranePytania = [];

        generujQuizButton.addEventListener('click', function() {
            kontenerQuizu.innerHTML = '';

            
            pytania.sort(function() {
                return 0.5 - Math.random();
            });

            
            wybranePytania = pytania.slice(0, 40);

            wybranePytania.forEach(function(pytanie, index) {
                var pytanieDiv = document.createElement('div');
                pytanieDiv.className = 'pytanie';
                pytanieDiv.innerHTML = '<p>' + pytanie.pytanie + '</p>';

                for (var opcja in pytanie.opcje) {
                    var opcjaLabel = document.createElement('label');
                    var opcjaInput = document.createElement('input');
                    opcjaInput.type = 'radio';
                    opcjaInput.name = 'pytanie' + index;
                    opcjaInput.value = opcja;
                    opcjaLabel.appendChild(opcjaInput);
                    opcjaLabel.innerHTML += opcja + ': ' + pytanie.opcje[opcja] + '<br>';
                    pytanieDiv.appendChild(opcjaLabel);
                }

                kontenerQuizu.appendChild(pytanieDiv);
            });

            obliczWynikButton.style.display = 'block';
        });

        obliczWynikButton.addEventListener('click', function() {
            var wynik = 0;

            wybranePytania.forEach(function(pytanie, index) {
                var odpowiedz = document.querySelector('input[name="pytanie' + index + '"]:checked');
                if (odpowiedz && odpowiedz.value === pytanie.poprawnaOdpowiedz) {
                    wynik++;
                }
            });

            wynikInput.value = wynik; 

           
            var xhr = new XMLHttpRequest();
            xhr.open("POST", "<?php echo $_SERVER['PHP_SELF']; ?>", true);
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            var params = "userName=" + encodeURIComponent(userNameInput.value) + "&wynik=" + encodeURIComponent(wynikInput.value) + "&zapiszWynik=1";
            xhr.send(params);

            zapiszWynikForm.style.display = 'block';

            alert('Twój wynik to: ' + wynik + '/40');
        });
    </script>
<?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "uzytkowicy"; 

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST["zapiszWynik"])) {
                $userName = $_POST["userName"];
                $score = $_POST["wynik"];
                $examName = "INF.04.";

                $sql = "INSERT INTO wyniki (userName, score, exam_name) VALUES ('$userName', '$score', '$examName')";

                if ($conn->query($sql) === TRUE) {
                    echo "Wynik został zapisany poprawnie.";
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
            }
        }

        $conn->close();
    ?>
</body>
</html>