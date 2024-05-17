<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>INF.03.</title>
    <link rel="stylesheet" href="styleinf.css"> 
</head>
<body>
    <header>
        <h1>Egzamin INF.03.</h1>
    </header>
    <main>
        <br>
    <section class="tiles">
            <a href="inf04.php" class="tile">Egzamin Inf04</a>
            <a href="user_profile.php" class="tile">Profil użytkownika</a>
            <a href="FAQ.php" class="tile">FAQ</a>
        </section>
        <section class="content">
            <p>INF.03. Tworzenie i administrowanie stronami i aplikacjami internetowymi oraz bazami danych.<br><br>
                
                Strona przygotwoująca do kwalifikacji zawodowych w zawodzie technik informatyk i technik programista w oparciu o zmodernizowane podstawy programowe kształcenia.<br><br>
                
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
       <section class="content">
            <label for="userName">Nazwa użytkownika:</label>
            <input type="text" id="userName" name="userName">
            <button id="generujQuizButton">Generuj Quiz</button> 
            <div id="kontenerQuizu"></div> 
            <button id="obliczWynikButton" style="display: none;">Oblicz Wynik</button> 
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" id="zapiszWynikForm" style="display: none;">
                <input type="hidden" id="userNameInput" name="userName">
                <input type="hidden" id="wynikInput" name="wynik">
                <input type="submit" name="zapiszWynik" value="Zapisz Wynik">
            </form>
        </section>
    </main>
    <footer>
        
    </footer>

    <script>
     var pytania = [
    {
        pytanie: "Którego polecenia należy użyć, aby wyraz TEKST został wyświetlony w kolorze czarnym w oknie przeglądarki internetowej?",
        opcje: {
            A: "&lt;body color='black'&gt; TEKST &lt;/font&gt;",
            B: "&lt;font color='czarny'&gt; TEKST &lt;/font&gt;",
            C: "&lt;font color='#000000'&gt; TEKST &lt;/font&gt;",
            D: "&lt;body bgcolor='black'&gt; TEKST &lt;/body&gt;"
        },
        poprawnaOdpowiedz: "C"
    },
    {
        pytanie: "W poleceniach, których celem jest odtwarzanie na stronie internetowej dźwięku jako podkładu muzycznego NIE wykorzystuje się atrybutu",
        opcje: {
            A: "loop='10'",
            B: "balance='-10'",
            C: "volume='-100'",
            D: "href='C:/100.wav'"
        },
        poprawnaOdpowiedz: "D"
    },
    {
        pytanie: "Jakiego znacznika należy użyć, aby przejść do kolejnej linii tekstu, nie tworząc akapitu na stronie internetowej?",
        opcje: {
            A: "&lt;p&gt;",
            B: "&lt;/b&gt;",
            C: "&lt;br&gt;",
            D: "&lt;/br&gt;"
        },
        poprawnaOdpowiedz: "C"
    },
    {
        pytanie: "Kaskadowe arkusze stylów tworzy się w celu",
        opcje: {
            A: "ułatwienia formatowania strony",
            B: "nadpisywania wartości znaczników już ustawionych na stronie",
            C: "połączenia struktury dokumentu strony z właściwą formą jego prezentacji",
            D: "blokowania jakichkolwiek zmian w wartościach znaczników już przypisanych w pliku CSS"
        },
        poprawnaOdpowiedz: "C"
    },
    {
        pytanie: "W podanej regule CSS: h1 {color: blue} h1 oznacza",
        opcje: {
            A: "klasę",
            B: "wartość",
            C: "selektor",
            D: "deklarację"
        },
        poprawnaOdpowiedz: "C"
    },
    {
        pytanie: "Edytor spełniający założenia WYSIWYG musi umożliwiać",
        opcje: {
            A: "tworzenie podstawowej grafiki wektorowej",
            B: "publikację strony na serwerze poprzez wbudowanego klienta FTP",
            C: "obróbkę plików dźwiękowych przed umieszczeniem ich na stronie internetowej",
            D: "uzyskanie zbliżonego wyniku tworzonej strony do jej obrazu w przeglądarce internetowej"
        },
        poprawnaOdpowiedz: "D"
    },
    {
        pytanie: "Do graficznego tworzenia stron internetowych należy wykorzystać",
        opcje: {
            A: "edytor CSS",
            B: "przeglądarkę internetową",
            C: "program typu WYSIWYG",
            D: "program MS Office Picture Manager"
        },
        poprawnaOdpowiedz: "C"
    },
    {
        pytanie: "W procesie walidacji stron internetowych nie bada się",
        opcje: {
            A: "działania linków",
            B: "błędów składni kodu",
            C: "zgodności z przeglądarkami",
            D: "źródła pochodzenia narzędzi edytorskich"
        },
        poprawnaOdpowiedz: "D"
    },
    {
        pytanie: "Model opisu przestrzeni barw o parametrach: odcień, nasycenie i jasność, to",
        opcje: {
            A: "HSV",
            B: "RGB",
            C: "CMY",
            D: "CMYK"
        },
        poprawnaOdpowiedz: "A"
    },
    {
        pytanie: "Wskaż model barw, który stosuje się do wyświetlania kolorów na ekranie monitora komputerowego",
        opcje: {
            A: "HLS",
            B: "RGB",
            C: "CMY",
            D: "CMYK"
        },
        poprawnaOdpowiedz: "B"
    },
    {
        pytanie: "Który parametr obiektu graficznego ulegnie zmianie po modyfikacji wartości kanału alfa?",
        opcje: {
            A: "Nasycenie barw",
            B: "Przezroczystość",
            C: "Ostrość krawędzi",
            D: "Kolejność wyświetlenia pikseli"
        },
        poprawnaOdpowiedz: "B"
    },
    {
        pytanie: "Jakiego formatu należy użyć do zapisu obrazu z kompresją stratną?",
        opcje: {
            A: "GIF",
            B: "PNG",
            C: "PCX",
            D: "JPEG"
        },
        poprawnaOdpowiedz: "D"
    },
    {
        pytanie: "Jak nazywa się proces przedstawienia, we właściwej dla danego środowiska formie, informacji zawartej w dokumencie elektronicznym?",
        opcje: {
            A: "Mapowanie",
            B: "Rasteryzacja",
            C: "Renderowanie",
            D: "Teksturowanie"
        },
        poprawnaOdpowiedz: "C"
    },
    {
        pytanie: "Proces filtracji sygnału wejściowego w dziedzinie czasu, obejmujący zasadę superpozycji, związany jest filtrem",
        opcje: {
            A: "liniowym",
            B: "przyczynowym",
            C: "niezmiennym w czasie",
            D: "o skończonej odpowiedzi impulsowej"
        },
        poprawnaOdpowiedz: "A"
    },
    {
        pytanie: "Jak nazywa się podzbiór strukturalnego języka zapytań, związany z formułowaniem zapytań do bazy danych za pomocą polecenia SELECT?",
        opcje: {
            A: "SQL DML (ang. Data Manipulation Language)",
            B: "SQL DDL (ang. Data Definition Language)",
            C: "SQL DCL (ang. Data Control Language)",
            D: "SQL DQL (ang. Data Query Language)"
        },
        poprawnaOdpowiedz: "D"
    },
    {
        pytanie: "Jakie są nazwy typowych poleceń języka zapytań SQL, związane z wykonywaniem operacji na danych SQL DML (np.: umieszczanie danych w bazie, kasowanie dokonywanie zmian w danych)?",
        opcje: {
            A: "SELECT, SELECT INTO",
            B: "ALTER, CREATE, DROP",
            C: "DENY, GRANT, REVOKE",
            D: "DELETE, INSERT, UPDATE"
        },
        poprawnaOdpowiedz: "D"
    },
    {
    pytanie: "Jak nazywa się element bazy danych, za pomocą którego można jedynie odczytać dane z bazy, prezentując je w postaci tekstu lub wykresu?",
    opcje: {
        A: "Tabela",
        B: "Raport",
        C: "Zapytanie",
        D: "Formularz"
    },
    poprawnaOdpowiedz: "B"
},
{
    pytanie: "Jakiego typu specjalizowane oprogramowanie narzędziowe należy zainstalować, aby umożliwić wykonywanie jego użytkownikowi operacji na zgromadzonych danych?",
    opcje: {
        A: "Klucz obcy",
        B: "System Zarządzania Bazą Danych (SZBD)",
        C: "Obiektowy System Zarządzania Bazą Danych",
        D: "Otwarty mechanizm komunikacji bazy danych"
    },
    poprawnaOdpowiedz: "B"
},
{
    pytanie: "Co należy zastosować w organizacji danych, aby zapytania w bazie danych były wykonywane szybciej?",
    opcje: {
        A: "Reguły",
        B: "Indeksy",
        C: "Wartości domyślne",
        D: "Klucze podstawowe"
    },
    poprawnaOdpowiedz: "B"
},
{
    pytanie: "W programie Microsoft Access formą zabezpieczeń dostępu do danych związaną z tabelą i kwerendą jest",
    opcje: {
        A: "stosowanie makr",
        B: "przypisanie uprawnień",
        C: "określanie przestrzeni tabel",
        D: "wprowadzenie limitów przestrzeni dyskowej"
    },
    poprawnaOdpowiedz: "B"
},
{
    pytanie: "Które z wymienionych osób odpowiadają za przygotowanie systemu bazy danych do pracy produkcyjnej w sposób ciągły, zarządzanie użytkownikami i instalowanie nowych wersji systemu bazodanowego?",
    opcje: {
        A: "Projektanci narzędzi deweloperskich",
        B: "Administratorzy systemu bazy danych",
        C: "Administratorzy serwerów i sieci komputerowych",
        D: "Projektanci i programiści Systemu Zarządzania Bazą Danych"
    },
    poprawnaOdpowiedz: "B"
},
{
    pytanie: "Z jakimi mechanizmami nadawania zabezpieczeń, dającymi możliwości wykonywania operacji na bazie danych, związane są zagadnienia zarządzania kontami, użytkownikami i uprawnieniami?",
    opcje: {
        A: "Z regułami",
        B: "Z atrybutami",
        C: "Z przywilejami obiektowymi",
        D: "Z przywilejami systemowymi"
    },
    poprawnaOdpowiedz: "D"
},
{
    pytanie: "Metoda udostępniania bazy danych w programie Microsoft Access, dotycząca wszystkich obiektów bazy umieszczonych na dysku sieciowym i używanych jednocześnie przez różne osoby nosi nazwę",
    opcje: {
        A: "folderu sieciowego",
        B: "serwera bazy danych",
        C: "dzielonej bazy danych",
        D: "witryny programu SharePoint"
    },
    poprawnaOdpowiedz: "C"
},
{
    pytanie: "Jakie należy posiadać uprawnienia, aby wykonać i odtworzyć kopię zapasową bazy danych Microsoft SQL Server 2005 Express?",
    opcje: {
        A: "Users",
        B: "Security users",
        C: "Użytkownik lokalny",
        D: "Administrator systemu"
    },
    poprawnaOdpowiedz: "D"
},
{
    pytanie: "Typ zmiennej w języku JavaScript",
    opcje: {
        A: "nie występuje",
        B: "jest tylko jeden",
        C: "następuje poprzez przypisanie wartości",
        D: "musi być zadeklarowany na początku skryptu"
    },
    poprawnaOdpowiedz: "C"
},
{
    pytanie: "Zmienne typu int odnoszą się do liczb",
    opcje: {
        A: "naturalnych",
        B: "całkowitych",
        C: "w notacji stałoprzecinkowej",
        D: "w notacji zmiennoprzecinkowej"
    },
    poprawnaOdpowiedz: "B"
},
{
    pytanie: "Sposób programowania, w którym ciąg poleceń (sekwencji instrukcji) przekazywanych komputerowi jest postrzegany jako program, nosi nazwę programowania",
    opcje: {
        A: "stanowego",
        B: "logicznego",
        C: "funkcyjnego",
        D: "imperatywnego"
    },
    poprawnaOdpowiedz: "D"
},
{
    pytanie: "Jaki program komputerowy przekształca kod źródłowy, napisany w konkretnym języku programowania, na język komputera?",
    opcje: {
        A: "Debugger",
        B: "Kompilator",
        C: "Edytor kodu źródłowego",
        D: "Środowisko programistyczne"
    },
    poprawnaOdpowiedz: "B"
},
{
    pytanie: "Który z obiektów relacyjnej bazy danych, będący kodem języka SQL, może być wywoływany w zapytaniach modyfikujących kolumny danych widoczne jako tabela, bez względu na to czy jest tworzony programowo, czy dynamicznie?",
    opcje: {
        A: "Reguła",
        B: "Wyzwalacz",
        C: "Procedura składowa",
        D: "Funkcja zdefiniowana"
    },
    poprawnaOdpowiedz: "B"
},
{
    pytanie: "Jak nazywa się program, który wykonuje instrukcje zawarte w kodzie źródłowym tworzonego programu bez uprzedniego generowania programu wynikowego?",
    opcje: {
        A: "Interpreter",
        B: "Kompilator",
        C: "Konwerter kodu",
        D: "Konwerter języka"
    },
    poprawnaOdpowiedz: "A"
},
{
    pytanie: "Który język skryptowy ogólnego przeznaczenia należy wykorzystać do tworzenia aplikacji WWW, zagnieżdżanych w języku HTML i uruchamianych po stronie serwera?",
    opcje: {
        A: "C#",
        B: "Perl",
        C: "PHP",
        D: "JavaScript"
    },
    poprawnaOdpowiedz: "C"
},
{
    pytanie: "Jak nazywa się technika umożliwiająca otwarcie połączenia klienta z serwerem i komunikację bez przeładowywania całej strony WWW w sposób asynchroniczny?",
    opcje: {
        A: "PHP",
        B: "XML",
        C: "AJAX",
        D: "VBScript"
    },
    poprawnaOdpowiedz: "C"
},
{
    pytanie: "Jakiego rodzaju mechanizm kontroli bezpieczeństwa wykonywania aplikacji zawiera środowisko uruchomieniowe platformy .NET Framework?",
    opcje: {
        A: "Mechanizm wykonywania aplikacji dla bibliotek klas",
        B: "Mechanizm wykonywania aplikacji realizowany przez frameworki aplikacji internetowych (ASP.NET)",
        C: "Mechanizm wykonywania aplikacji realizowany przez funkcję Windows API (Application Programming Interface)",
        D: "Mechanizm wykonywania aplikacji oparty na uprawnieniach kodu (CAS - Code Access Security) i na rolach (RBS - Role-Based Security)"
    },
    poprawnaOdpowiedz: "D"
},
{
    pytanie: "Co to jest DBMS?",
    opcje: {
        A: "Strukturalny język zapytań kierowanych do bazy danych",
        B: "System zarządzania bazą danych",
        C: "Obiektowy język programowania do generowania stron www",
        D: "Kaskadowy arkusz stylów do opisu wyglądu strony www"
    },
    poprawnaOdpowiedz: "B"
},
{
    pytanie: "Który z odsyłaczy posiada poprawną konstrukcję?",
    opcje: {
        A: "&lt;a href='mailto:adres'&gt; tekst &lt;/a&gt;",
        B: "&lt;a href='http://adres'&gt; tekst &lt;/a&gt;",
        C: "&lt;a href=&quot;http://adres&quot;&gt; tekst &lt;/a&gt;",
        D: "&lt;a href=&quot;mailto:adres&quot;&gt; tekst &lt;/a&gt;"
    },
    poprawnaOdpowiedz: "D"
},
{
    pytanie: "W znaczniku <head> (w części <meta>) strony www NIE umieszcza się informacji dotyczącej",
    opcje: {
        A: "autora",
        B: "kodowania",
        C: "typu dokumentu",
        D: "automatycznego odświeżania"
    },
    poprawnaOdpowiedz: "D"
},
{
    pytanie: "W palecie kolorów RGB kolor żółty jest połączeniem dwóch kolorów: zielonego i czerwonego. Który z kodów szesnastkowych oznacza kolor żółty?",
    opcje: {
        A: "#FF00FF",
        B: "#00FFFF",
        C: "#FFFF00",
        D: "#F0F0F0"
    },
    poprawnaOdpowiedz: "C"
},
{
    pytanie: "Który z formatów NIE pozwala na zapis plików animowanych?",
    opcje: {
        A: "GIF",
        B: "ACE",
        C: "SWF",
        D: "SVG"
    },
    poprawnaOdpowiedz: "B"
},
{
    pytanie: "Który z formatów graficznych pozwala na zapis przejrzystego tła?",
    opcje: {
        A: "GIF",
        B: "RAW",
        C: "BMP",
        D: "JPEG"
    },
    poprawnaOdpowiedz: "A"
},
{
    pytanie: "Proces walidacji strony internetowej to",
    opcje: {
        A: "zespół działań mających na celu zwiększenie oglądalności",
        B: "sprawdzenie jej w celu wyeliminowania błędów",
        C: "publikowanie w sieci",
        D: "promocja strony"
    },
    poprawnaOdpowiedz: "B"
},
{
    pytanie: "Które oprogramowanie NIE JEST systemem zarządzania treścią (CMS)?",
    opcje: {
        A: "Joomla",
        B: "Apache",
        C: "Mambo",
        D: "WordPress"
    },
    poprawnaOdpowiedz: "B"
},
{
    pytanie: "Który z formatów zapewnia największa redukcję rozmiaru pliku dźwiękowego?",
    opcje: {
        A: "WAV",
        B: "PCM",
        C: "MP3",
        D: "CD-Audio"
    },
    poprawnaOdpowiedz: "C"
},
{
    pytanie: "Wskaż prawidłową kolejność tworzenia bazy danych",
    opcje: {
        A: "Określenie celu, utworzenie relacji, stworzenie tabel, normalizacja",
        B: "Określenie celu, normalizacja, utworzenie relacji, stworzenie tabel",
        C: "Określenie celu, stworzenie tabel, utworzenie relacji, normalizacja",
        D: "Określenie celu, normalizacja, stworzenie tabel, utworzenie relacji"
    },
    poprawnaOdpowiedz: "D"
},
{
    pytanie: "Którego ze słów kluczowych języka SQL należy użyć, aby wyeliminować duplikaty?",
    opcje: {
        A: "LIKE",
        B: "DISTINCT",
        C: "ORDER BY",
        D: "GROUP BY"
    },
    poprawnaOdpowiedz: "B"
},
{
    pytanie: "Które ze stwierdzeń prawidłowo charakteryzuje zdefiniowaną tabelę: CREATE TABLE dane (kolumna INTEGER(3));",
    opcje: {
        A: "Tabela o nazwie posiada trzy kolumny liczb całkowitych",
        B: "Tabela o nazwie posiada jedną kolumnę liczb całkowitych",
        C: "Tabela posiada jedną kolumnę zawierającą trzy elementowe tablice",
        D: "Kolumny tabeli nazywają się: , ,"
    },
    poprawnaOdpowiedz: "B"
},
{
    pytanie: "Polecenie REVOKE SELECT ON nazwa1 FROM nazwa2 w języku SQL umożliwia",
    opcje: {
        A: "nadanie uprawnienie grupie do tabeli",
        B: "odbiera wszystkie uprawnienia do tabeli",
        C: "skopiuje uprawnienia z grupy na użytkownika",
        D: "nadaje wszystkie uprawnienia do tabeli użytkownikowi"
    },
    poprawnaOdpowiedz: "B"
},
{
    pytanie: "Które polecenie wydane z konsoli systemu operacyjnego, zawierające w swojej składni opcję --repair, umożliwia naprawę bazy danych?",
    opcje: {
        A: "mysqlcheck",
        B: "mysqldump",
        C: "truncate",
        D: "create"
    },
    poprawnaOdpowiedz: "A"
},
{
    pytanie: "Które polecenie wydane z konsoli systemowej dokona przywrócenia bazy danych?",
    opcje: {
        A: "mysqldump -u root -p baza > kopia.sql",
        B: "mysqldump -u root -p baza < kopia.sql",
        C: "mysql -u root -p baza < kopia.sql",
        D: "mysql -u root -p baza > kopia.sql"
    },
    poprawnaOdpowiedz: "C"
},
{
    pytanie: "Polecenie w języku SQL GRANT ALL PRIVILEGES ON klienci TO pracownik",
    opcje: {
        A: "nadaje uprawnienie grupie do tabeli",
        B: "odbiera wszystkie uprawnienia do tabeli",
        C: "skopiuje uprawnienia z grupy na użytkownika",
        D: "nadaje wszystkie uprawnienia do tabeli użytkownikowi"
    },
    poprawnaOdpowiedz: "D"
},
{
    pytanie: "Która z wymienionych funkcji sortowania wykorzystywana w języku PHP sortuje tablicę asocjacyjną według indeksów",
    opcje: {
        A: "sort()",
        B: "rsort()",
        C: "asort()",
        D: "ksort()"
    },
    poprawnaOdpowiedz: "D"
},
{
    pytanie: "W skrypcie PHP należy utworzyć cookie o nazwie owoce które przyjmie wartość jabłko. Cookie ma być dostępne przez jedną godzinę od jego utworzenia. W tym celu należy w skrypcie PHP użyć funkcji:",
    opcje: {
        A: "cookie('owoce','jabłko',3600);",
        B: "cookie('jabłko','owoce',3600);",
        C: "setcookie('owoce','jabłko',time()+3600);",
        D: "setcookie('jabłko','owoce',time()+3600);"
    },
    poprawnaOdpowiedz: "C"
},
{
    pytanie: "Wskaż słowo kluczowe w języku C++ dodawane przed wbudowanym typem danych, które przesuwa zakres liczby wyłącznie nieujemne",
    opcje: {
        A: "long",
        B: "const",
        C: "short",
        D: "unsigned"
    },
    poprawnaOdpowiedz: "D"
},
{
    pytanie: "W językach programowania tylko zmienna jednego typu wbudowanego może przyjmować wyłącznie dwie wartości. Jest to typ",
    opcje: {
        A: "logiczny",
        B: "znakowy",
        C: "tablicowy",
        D: "łańcuchowy"
    },
    poprawnaOdpowiedz: "A"
}

];

document.getElementById("generujQuizButton").addEventListener("click", function() {
    var userName = document.getElementById("userName").value;
    if (!userName) {
        alert("Proszę podać nazwę użytkownika!");
        return;
    }
    pytania.sort(() => Math.random() - 0.5);
    var quiz = generujQuiz(pytania.slice(0, 40));
    document.getElementById("kontenerQuizu").innerHTML = quiz;
    document.getElementById("obliczWynikButton").style.display = "block";
});


document.getElementById("obliczWynikButton").addEventListener("click", function() {
        var pytaniaDoSprawdzenia = pytania.slice(0, 40);
        var wynik = obliczWynik(pytaniaDoSprawdzenia);
        alert("Twój wynik: " + wynik + "/" + pytaniaDoSprawdzenia.length);
        document.getElementById("wynikInput").value = wynik;
        document.getElementById("userNameInput").value = document.getElementById("userName").value;
        zapiszWynikDoBazyDanych();
    });


function generujQuiz(pytaniaArray) {
    var quiz = "";
    for (var i = 0; i < pytaniaArray.length; i++) {
        var pytanie = pytaniaArray[i];
        quiz += "<div>";
        quiz += "<p>" + pytanie.pytanie + "</p>";
        for (var opcja in pytanie.opcje) {
            if (pytanie.opcje.hasOwnProperty(opcja)) {
                quiz += "<label><input type='radio' name='odpowiedz_" + i + "' value='" + opcja + "'>" + pytanie.opcje[opcja] + "</label><br>";
            }
        }
        quiz += "</div>";
    }
    return quiz;
}

function obliczWynik(pytaniaArray) {
    var wynik = 0;
    for (var i = 0; i < pytaniaArray.length; i++) {
        var wybranaOdpowiedz = document.querySelector("input[name='odpowiedz_" + i + "']:checked");
        if (wybranaOdpowiedz && wybranaOdpowiedz.value === pytaniaArray[i].poprawnaOdpowiedz) {
            wynik++;
        }
    }
    return wynik;
}
    
function zapiszWynikDoBazyDanych() {
    var x = new XMLHttpRequest();
    x.open("POST", "<?php echo $_SERVER['PHP_SELF']; ?>", true);
    x.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    var userName = document.getElementById("userName").value;
    var wynik = document.getElementById("wynikInput").value;
    var params = "userName=" + encodeURIComponent(userName) + "&wynik=" + encodeURIComponent(wynik) + "&zapiszWynik=1";
    x.send(params);
}


    </script>
</body>
</html> 
   
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
        $examName = "INF.03.";

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

