<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>INF.03.</title>
    <link rel="stylesheet" href=""> 
</head>
<body>
    <header>
        <h1>Egzamin INF.03.</h1>
    </header>
    <main>
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
            <button id="generujQuizButton">Generuj Quiz</button> 
            <div id="kontenerQuizu"></div> 
            <button id="obliczWynikButton" style="display: none;">Oblicz Wynik</button> 
        </section>
    </main>
    <footer>
        
    </footer>

    <script>
      var pytania = [
    {
        pytanie: "Którego polecenia należy użyć, aby wyraz TEKST został wyświetlony w kolorze czarnym w oknie przeglądarki internetowej?",
        opcje: ["A. &lt;body color='black'&gt; TEKST &lt;/font&gt;", "B. &lt;font color='czarny'&gt; TEKST &lt;/font&gt;", "C. &lt;font color='#000000'&gt; TEKST &lt;/font&gt;", "D. &lt;body bgcolor='black'&gt; TEKST &lt;/body&gt;"],
        poprawnaOdpowiedz: "C"
    },
    {
        pytanie: "W poleceniach, których celem jest odtwarzanie na stronie internetowej dźwięku jako podkładu muzycznego NIE wykorzystuje się atrybutu",
        opcje: ["A. loop='10'", "B. balance='-10'", "C. volume='-100'", "D. href='C:/100.wav'"],
        poprawnaOdpowiedz: "D"
    },
    {
        pytanie: "Jakiego znacznika należy użyć, aby przejść do kolejnej linii tekstu, nie tworząc akapitu na stronie internetowej?",
        opcje: ["A. &lt;p&gt;", "B. &lt;/b&gt;", "C. &lt;br&gt;", "D. &lt;/br&gt;"],
        poprawnaOdpowiedz: "C"
    },
    {
        pytanie: "Kaskadowe arkusze stylów tworzy się w celu",
        opcje: ["A. ułatwienia formatowania strony", "B. nadpisywania wartości znaczników już ustawionych na stronie", "C. połączenia struktury dokumentu strony z właściwą formą jego prezentacji", "D. blokowania jakichkolwiek zmian w wartościach znaczników już przypisanych w pliku CSS"],
        poprawnaOdpowiedz: "C"
    },
    {
        pytanie: "W podanej regule CSS: h1 {color: blue} h1 oznacza",
        opcje: ["A. klasę", "B. wartość", "C. selektor", "D. deklarację"],
        poprawnaOdpowiedz: "C"
    },
    {
        pytanie: "Edytor spełniający założenia WYSIWYG musi umożliwiać",
        opcje: ["A. tworzenie podstawowej grafiki wektorowej", "B. publikację strony na serwerze poprzez wbudowanego klienta FTP", "C. obróbkę plików dźwiękowych przed umieszczeniem ich na stronie internetowej", "D. uzyskanie zbliżonego wyniku tworzonej strony do jej obrazu w przeglądarce internetowej"],
        poprawnaOdpowiedz: "D"
    },
    {
        pytanie: "Do graficznego tworzenia stron internetowych należy wykorzystać",
        opcje: ["A. edytor CSS", "B. przeglądarkę internetową", "C. program typu WYSIWYG", "D. program MS Office Picture Manager"],
        poprawnaOdpowiedz: "C"
    },
    {
        pytanie: "W procesie walidacji stron internetowych nie bada się",
        opcje: ["A. działania linków", "B. błędów składni kodu", "C. zgodności z przeglądarkami", "D. źródła pochodzenia narzędzi edytorskich"],
        poprawnaOdpowiedz: "D"
    },
    {
        pytanie: "Model opisu przestrzeni barw o parametrach: odcień, nasycenie i jasność, to",
        opcje: ["A. HSV", "B. RGB", "C. CMY", "D. CMYK"],
        poprawnaOdpowiedz: "A"
    },
    {
        pytanie: "Wskaż model barw, który stosuje się do wyświetlania kolorów na ekranie monitora komputerowego",
        opcje: ["A. HLS", "B. RGB", "C. CMY", "D. CMYK"],
        poprawnaOdpowiedz: "B"
    },
    {
        pytanie: "Który parametr obiektu graficznego ulegnie zmianie po modyfikacji wartości kanału alfa?",
        opcje: ["A. Nasycenie barw", "B. Przezroczystość", "C. Ostrość krawędzi", "D. Kolejność wyświetlenia pikseli"],
        poprawnaOdpowiedz: "B"
    },
    {
        pytanie: "Jakiego formatu należy użyć do zapisu obrazu z kompresją stratną?",
        opcje: ["A. GIF", "B. PNG", "C. PCX", "D. JPEG"],
        poprawnaOdpowiedz: "D"
    },
    {
        pytanie: "Jak nazywa się proces przedstawienia, we właściwej dla danego środowiska formie, informacji zawartej w dokumencie elektronicznym?",
        opcje: ["A. Mapowanie", "B. Rasteryzacja", "C. Renderowanie", "D. Teksturowanie"],
        poprawnaOdpowiedz: "C"
    },
    {
        pytanie: "Proces filtracji sygnału wejściowego w dziedzinie czasu, obejmujący zasadę superpozycji, związany jest filtrem",
        opcje: ["A. liniowym", "B. przyczynowym", "C. niezmiennym w czasie", "D. o skończonej odpowiedzi impulsowej"],
        poprawnaOdpowiedz: "A"
    },
    {
        pytanie: "Jak nazywa się podzbiór strukturalnego języka zapytań, związany z formułowaniem zapytań do bazy danych za pomocą polecenia SELECT?",
        opcje: ["A. SQL DML (ang. Data Manipulation Language)", "B. SQL DDL (ang. Data Definition Language)", "C. SQL DCL (ang. Data Control Language)", "D. SQL DQL (ang. Data Query Language)"],
        poprawnaOdpowiedz: "D"
    },
    {
        pytanie: "Jakie są nazwy typowych poleceń języka zapytań SQL, związane z wykonywaniem operacji na danych SQL DML (np.: umieszczanie danych w bazie, kasowanie dokonywanie zmian w danych)?",
        opcje: ["A. SELECT, SELECT INTO", "B. ALTER, CREATE, DROP", "C. DENY, GRANT, REVOKE", "D. DELETE, INSERT, UPDATE"],
        poprawnaOdpowiedz: "D"
    }
];

document.getElementById("generujQuizButton").addEventListener("click", function() {
    var quiz = generujQuiz(pytania);
    document.getElementById("kontenerQuizu").innerHTML = quiz;
    document.getElementById("obliczWynikButton").style.display = "block";
});

document.getElementById("obliczWynikButton").addEventListener("click", function() {
    var wynik = obliczWynik(pytania);
    alert("Twój wynik: " + wynik + "/" + pytania.length);
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

</script>
</body>
</html>
