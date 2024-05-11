<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>INF.04.</title>
    <link rel="stylesheet" href="">
</head>
<body>
    <header>
        <h1>Egzamin INF.04.</h1>
    </header>
    <main>
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
        </section>
    </main>
    <footer>
        
    </footer>

    <script>
      var pytania = [
    {
        pytanie: "Mechanizm obietnic (ang. promises) w języku JavaScript ma na celu",
        opcje: {
            A: "zastąpić mechanizm dziedziczenia w programowaniu obiektowym.",
            B: "obsłużyć przechwytywanie błędów aplikacji.",
            C: "poprawić czytelność kodu synchronicznego.",
            D: "obsłużyć funkcjonalność związaną z kodem asynchronicznym."
        },
        poprawnaOdpowiedz: "D"
    },
    {
        pytanie: "Zapisane w kodzie szesnastkowym składowe RGB koloru #AA41FF po przekształceniu do kodu dziesiętnego wynoszą kolejno",
        opcje: {
            A: "160, 64, 255",
            B: "160, 65, 255",
            C: "170, 64, 255",
            D: "170, 65, 255"
        },
        poprawnaOdpowiedz: "D"
    },
    {
        pytanie: "Oznaczeniem komentarza jednoliniowego w języku Python jest:",
        opcje: {
            A: "#",
            B: "!",
            C: '""',
            D: "//"
        },
        poprawnaOdpowiedz: "A"
    },
    {
        pytanie: "Aplikacje Web wykonane we frameworku Angular lub bibliotece React i działające na domyślnych ustawieniach portów można uruchomić na lokalnym serwerze, wpisując w przeglądarce",
        opcje: {
            A: "localhost:8000 (React) lub localhost:49887 (Angular)",
            B: "localhost:8080 (React) lub localhost:8000 (Angular)",
            C: "localhost:3000 (React) lub localhost:4200 (Angular)",
            D: "localhost:5001 (React) lub localhost:8080 (Angular)"
        },
        poprawnaOdpowiedz: "C"
    },
    {
        pytanie: "Aby zaprojektować zestaw danych do zainicjowania algorytmu sortowania bąbelkowego tablicy, należy zastosować przynajmniej typy:",
        opcje: {
            A: "jeden tablicowy, dwa liczbowe do kontroli pętli, jeden do zamiany elementów miejscami",
            B: "jeden tablicowy, jeden liczbowy do kontroli pętli, dwa do zamiany elementów miejscami",
            C: "dwa tablicowe, jeden liczbowy do kontroli pętli",
            D: "dwa tablicowe, dwa do zamiany elementów miejscami"
        },
        poprawnaOdpowiedz: "A"
    },
    {
        pytanie: "Utworzenie procedury składowej o nazwie dodajUsera w MS SQL rozpoczyna się od poleceń",
        opcje: {
            A: "add dodajUsera procedure",
            B: "create procedure dodajUsera",
            C: "create dodajUsera procedure",
            D: "add procedure dodajUsera"
        },
        poprawnaOdpowiedz: "B"
    },
    {
        pytanie: "Okna dialogowe niemodalne służą do",
        opcje: {
            A: "kontrolowania stanu aplikacji poprzez systemy menu.",
            B: "blokowania działania aplikacji na czas wprowadzenia i zatwierdzenia danych.",
            C: "kontrolowania ustawień aplikacji, jako okno pozostające otwarte na ekranie przez cały czas trwania aplikacji.",
            D: "wyświetlania komunikatów z koniecznością ich potwierdzenia, aby dalej kontynuować działanie aplikacji."
        },
        poprawnaOdpowiedz: "C"
    },
    {
        pytanie: "Rekomendacje standardu WCAG 2.0 związane z percepcją dotyczą:",
        opcje: {
            A: "przedstawienia komponentów interfejsu użytkownika",
            B: "zapewnienia wystarczającej ilości czasu na przeczytanie i przetworzenie treści",
            C: "zapewnienia interakcji pomiędzy komponentami użytkownika przy użyciu klawiatury",
            D: "zrozumienia i rzetelności w dostarczonych treściach na stronie"
        },
        poprawnaOdpowiedz: "A"
    },
    {
        pytanie: "Metoda poszukiwań w tablicach posortowanych, która polega na podzieleniu tablicy na kilka bloków i wyszukaniu liniowym tylko w tym bloku, w którym docelowy element może się znajdować, w języku angielskim nosi nazwę",
        opcje: {
            A: "Exponential search.",
            B: "Ternary search.",
            C: "Binary search.",
            D: "Jump search."
        },
        poprawnaOdpowiedz: "D"
    },
    {
        pytanie: "Oprogramowaniem do śledzenia błędów oraz do zarządzania projektami jest:",
        opcje: {
            A: "Bugzilla",
            B: "Jasmine",
            C: "Git",
            D: "Jira"
        },
        poprawnaOdpowiedz: "D"
    },
    {
        pytanie: "Aby utworzyć aplikację mobilną typu cross-platform w języku C# można zastosować:",
        opcje: {
            A: "platformę Xamarin",
            B: "środowisko XCode",
            C: "środowisko Android Studio",
            D: "platformę React Native"
        },
        poprawnaOdpowiedz: "A"
    },
    {
        pytanie: "Obiektowe podejście do rozwiązywania problemów obejmuje między innymi:",
        opcje: {
            A: "klasy, obiekty i hermetyzację",
            B: "pola, metody, rekurencję i kwerendy",
            C: "wyzwalacze i polimorfizm",
            D: "zmienne, procedury i funkcje"
        },
        poprawnaOdpowiedz: "A"
    },
    {
        pytanie: "Cechami dobrego negocjatora są:",
        opcje: {
            A: "intuicja, cierpliwość, asertywność",
            B: "asertywność, pesymizm, buta",
            C: "dobra reputacja, przekora, porywczość",
            D: "lojalność, nieśmiałość, uczciwość"
        },
        poprawnaOdpowiedz: "A"
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
