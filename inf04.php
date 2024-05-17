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
    },
    {
    pytanie: "Zastosowanie typu DECIMAL języka SQL wymaga wcześniejszego zdefiniowania długości (liczby cyfr) przed przecinkiem oraz długości cyfr po przecinku. Jest to zapis:",
    opcje: {
        A: "logiczny",
        B: "łańcuchowy",
        C: "stałoprzecinkowy",
        D: "zmiennoprzecinkowy"
    },
    poprawnaOdpowiedz: "D"
},
{
    pytanie: "Dane z serwera do aplikacji front-end można przesłać za pomocą:",
    opcje: {
        A: "metody POST",
        B: "protokołu SSH",
        C: "formatu JSON",
        D: "biblioteki jQuery"
    },
    poprawnaOdpowiedz: "C"
},
{
    pytanie: "Programista może zastosować framework Angular w celu implementacji aplikacji:",
    opcje: {
        A: "mobilnej",
        B: "desktopowej",
        C: "typu front-end",
        D: "typu back-end"
    },
    poprawnaOdpowiedz: "C"
},
{
    pytanie: "Poszkodowanego należy ułożyć w pozycji bocznej bezpiecznej w przypadku:",
    opcje: {
        A: "omdlenia, gdy osoba oddycha",
        B: "omdlenia i braku tętna",
        C: "urazu pleców, gdy osoba jest przytomna",
        D: "uszkodzenia kręgosłupa"
    },
    poprawnaOdpowiedz: "A"
},
{
    pytanie: "Jednym z etapów publikacji mobilnej w sklepie Google Play są testy Beta, których cechą charakterystyczną jest to, że są one:",
    opcje: {
        A: "podzielone na testy funkcjonalne, wydajnościowe i skalowalności",
        B: "przeprowadzane w oparciu o dokument z przypadkami testowymi",
        C: "wykonane przez grupę docelowych użytkowników aplikacji",
        D: "wykonywane przez grupę zatrudnionych testerów z firmy Google"
    },
    poprawnaOdpowiedz: "C"
},
{
    pytanie: "Kolor Pale Green w systemie RGB ma postać RGB(152, 251, 152). Kod szesnastkowy tego koloru wynosi:",
    opcje: {
        A: "98 FE 98",
        B: "98 FB 98",
        C: "A0 FB A0",
        D: "A0 FE A0"
    },
    poprawnaOdpowiedz: "B"
},
{
    pytanie: "Modyfikator dostępu poprzedzający definicję metody Dodaj() zdefiniowanej w klasie Kalkulator powoduje, że:",
    opcje: {
        A: "jest ona dostępna w programie głównym i może być wywołana na rzecz instancji klasy Kalkulator",
        B: "nie jest ona dostępna z poziomu klas, które są zaprzyjaźnione z klasą Kalkulator",
        C: "nie jest ona dostępna w klasach dziedziczących po klasie Kalkulator",
        D: "jest ona dostępna wewnątrz klasy oraz wewnątrz klas dziedziczących po klasie Kalkulator"
    },
    poprawnaOdpowiedz: "D"
},
{
    pytanie: "Środowiskiem natywnym do programowania aplikacji desktopowych za pomocą języka C# jest:",
    opcje: {
        A: "MS Visual Studio",
        B: "NetBeans",
        C: "Eclipse",
        D: "PyCharm"
    },
    poprawnaOdpowiedz: "A"
},
{
    pytanie: "W którym modelu Cyklu Życia Projektu Informatycznego występuje etap analizy ryzyka?",
    opcje: {
        A: "W spiralnym.",
        B: "W kaskadowym.",
        C: "W modelu Fry’ego",
        D: "W modelu z prototypem."
    },
    poprawnaOdpowiedz: "A"
},
{
    pytanie: "Który z wymienionych algorytmów działających na tablicy jednowymiarowej ma złożoność obliczeniową O(n2)?",
    opcje: {
        A: "Wyszukiwanie binarne.",
        B: "Wypisanie elementów.",
        C: "Sortowanie bąbelkowe.",
        D: "Sortowanie szybkie."
    },
    poprawnaOdpowiedz: "C"
},
{
    pytanie: "Stosowanie wzorca Obserwator w programowaniu aplikacji WEB ma na celu:",
    opcje: {
        A: "obsługę funkcji synchronicznych w kodzie aplikacji",
        B: "powiadamianie obiektów o zmianie stanu innych obiektów",
        C: "obserwowanie interakcji użytkownika i wysyłanie wyjątków",
        D: "dopasowanie interfejsu użytkownika do różnych typów użytkowników"
    },
    poprawnaOdpowiedz: "B"
},
{
    pytanie: "Pierwotnym przeznaczeniem środowisk IDE o nazwach: IntelliJ IDEA, Eclipse, NetBeans jest programowania w języku:",
    opcje: {
        A: "C#",
        B: "C++",
        C: "Python",
        D: "Java"
    },
    poprawnaOdpowiedz: "D"
},
{
    pytanie: "Obsługę wyjątku, który wygenerowała aplikacja należy zdefiniować w sekcji",
    opcje: {
        A: "catch",
        B: "try",
        C: "throw",
        D: "finally"
    },
    poprawnaOdpowiedz: "A"
},
{
    pytanie: "Która metodyka zarządzania projektem jest optymalna, gdy zakres projektu w początkowej fazie nie jest do końca znany, wymagania mogą ulec zmianie w trakcie trwania projektu oraz mogą pojawić się nowe wymagania?",
    opcje: {
        A: "Model kaskadowy",
        B: "Model V",
        C: "Agile",
        D: "PRINCE2"
    },
    poprawnaOdpowiedz: "C"
},
{
    pytanie: "Aplikacja mobilna wyświetla listę, której każdy z elementów może być dotknięty palcem, aby wyświetlić jego szczegóły. Zdarzenie odpowiadające tej akcji to",
    opcje: {
        A: "value changed.",
        B: "button clicked.",
        C: "tapped.",
        D: "toggled."
    },
    poprawnaOdpowiedz: "C"
},
{
    pytanie: "Założenie programowania obiektowego polegające na ukrywaniu składowych klasy tak, aby były one dostępne tylko metodom tej klasy lub funkcjom zaprzyjaźnionym, to",
    opcje: {
        A: "dziedziczenie.",
        B: "wyjątki.",
        C: "polimorfizm.",
        D: "hermetyzacja."
    },
    poprawnaOdpowiedz: "D"
},
{
    pytanie: "Które zdarzenie jest wygenerowane, gdy nieaktywne okno lub kontrolka zostaje kliknięta myszą?",
    opcje: {
        A: "blur.",
        B: "keyup.",
        C: "validating.",
        D: "focus."
    },
    poprawnaOdpowiedz: "D"
},
{
    pytanie: "Strategia budowania algorytmu poprzez podział na dwa lub więcej mniejszych podproblemów tak długo, aż fragmentu staną się proste do bezpośredniego rozwiązania jest metodą:",
    opcje: {
        A: "heurystyczną",
        B: "komiwojażera",
        C: "dziel i zwyciężaj",
        D: "najkrótszej ścieżki"
    },
    poprawnaOdpowiedz: "C"
},
{
    pytanie: "Zadaniem interpretera jest:",
    opcje: {
        A: "analizowanie składni całego programu przed jego uruchomieniem",
        B: "wykonanie skryptu instrukcja po instrukcji",
        C: "optymalizowanie większej części kodu, w celu szybszego wykonania",
        D: "przetłumaczenie kodu na kod maszynowy"
    },
    poprawnaOdpowiedz: "B"
},
{
    pytanie: "Reguła zaangażowania i konsekwencji jako jedna z reguł wywierania wpływu wiąże się",
    opcje: {
        A: "z odwdzięczeniem się osobie, która wyświadczyła nam przysługę",
        B: "z sugerowaniem się opinią danej społeczności",
        C: "z doprowadzeniem spraw do końca",
        D: "z posłuszeństwem wobec autorytetów"
    },
    poprawnaOdpowiedz: "C"
},
{
    pytanie: "W językach C++ lub C# słowo kluczowe virtual można stosować do",
    opcje: {
        A: "pól klasy",
        B: "konstruktorów",
        C: "metod klasy",
        D: "funkcji zaprzyjaźnionych"
    },
    poprawnaOdpowiedz: "C"
},
{
    pytanie: "Narzędziem dedykowanym do implementacji aplikacji w środowisku WPF (ang. Windows Presentation Foundation) jest",
    opcje: {
        A: "Visual Studio",
        B: "NetBeans",
        C: "PyCharm",
        D: "XamarinStudio"
    },
    poprawnaOdpowiedz: "A"
},
{
    pytanie: "Zastosowanie modyfikatora abstract w definicji metody klasy oznacza, że",
    opcje: {
        A: "w klasie tej należy zaimplementować tę metodę",
        B: "nie można dziedziczyć po tej klasie",
        C: "w klasach dziedziczących nie wolno implementować tej metody",
        D: "klasa ta jest bazowa dla innych klas"
    },
    poprawnaOdpowiedz: "D"
},
{
    pytanie: "Wskaż rodzaj testów, które przeprowadza się podczas fazy tworzenia kodu źródłowego",
    opcje: {
        A: "testy wydajnościowe",
        B: "testy kompatybilności",
        C: "testy wdrożeniowe",
        D: "testy jednostkowe"
    },
    poprawnaOdpowiedz: "D"
},
{
    pytanie: "Jedną z wytycznych standardu WCAG 2.0 jest",
    opcje: {
        A: "unikanie zapisu informacji w formie uproszczonej",
        B: "zmniejszanie zawartości strony poprzez zaniechanie stosowania alternatyw tekstowych dla obrazów i video",
        C: "stosowanie kilku schematów kolorystycznych, w tym bardzo kontrastowego",
        D: "stosowanie jednego, odpowiednio dużego rozmiaru czcionki"
    },
    poprawnaOdpowiedz: "C"
},
{
    pytanie: "Wskaż niestabilny algorytm sortowania",
    opcje: {
        A: "sortowanie bąbelkowe",
        B: "sortowanie przez wstawianie",
        C: "sortowanie szybkie",
        D: "sortowanie przez zliczanie"
    },
    poprawnaOdpowiedz: "C"
},
{
    pytanie: "Aby w aplikacji Web zaimplementować mechanizm gromadzenia na komputerach użytkowników danych statystycznych, można zastosować",
    opcje: {
        A: "buforowanie",
        B: "ciasteczka",
        C: "sesje",
        D: "formularze"
    },
    poprawnaOdpowiedz: "B"
},
{
    pytanie: "Frameworkiem umożliwiającym programowanie aplikacji desktopowych jest",
    opcje: {
        A: "WPF",
        B: "Symfony",
        C: "Xamarin",
        D: "Angular"
    },
    poprawnaOdpowiedz: "A"
},
{
    pytanie: "Wskaż rodzaj kolekcji, do którego należy skorzystać, aby przechowywać dane związane z elementem interfejsu użytkownika tak, aby element był ten informowany przez kolekcję o dodaniu, usunięciu lub zmianie jej elementu",
    opcje: {
        A: "ObservableCollection",
        B: "KeyedCollection",
        C: "Collection",
        D: "ReadOnlyCollection"
    },
    poprawnaOdpowiedz: "A"
},
{
    pytanie: "Pierwszym etapem tworzenia aplikacji jest",
    opcje: {
        A: "utworzenie przypadków testowych",
        B: "projekt architektury systemu",
        C: "dobór zestawu typów i zmiennych dla aplikacji",
        D: "analiza wymagań klienta"
    },
    poprawnaOdpowiedz: "D"
},
{
    pytanie: "Dziedziczenie jest stosowane, gdy istnieje potrzeba",
    opcje: {
        A: "asynchronicznej obsługi długotrwałych operacji",
        B: "definicji klasy bardziej specjalistycznej niż już zdefiniowana",
        C: "stosowania wartości stałych, niezmiennych przez czas trwania aplikacji",
        D: "zdefiniowania zakresu widzialności metod i pól jednej klasy"
    },
    poprawnaOdpowiedz: "B"
},
{
    pytanie: "Wskaż frazę, która w języku angielskim oznacza 'testy wydajnościowe'",
    opcje: {
        A: "unit testing",
        B: "performance testing",
        C: "integration testing",
        D: "security testing"
    },
    poprawnaOdpowiedz: "B"
},
{
    pytanie: "Teoria ustalania celów opisuje właściwie określony cel jako SMART, od pierwszych liter słów: specyficzny, Mierzalny, Ambitny, Realny i Terminowy. Wskaż cel, którego osiągnięcie wymaga wysiłku i stanowi wyzwanie dla pracownika",
    opcje: {
        A: "Mierzalny",
        B: "Ambitny",
        C: "Terminowy",
        D: "Specyficzny"
    },
    poprawnaOdpowiedz: "B"
},
{
    pytanie: "Wskaż przykład wypadku przy pracy",
    opcje: {
        A: "oparzenie ręki, które nastąpiło w czasie nieobowiązkowego doszkalania w czasie wolnym pracownika",
        B: "złe samopoczucie wywołane przewlekła chorobą pracownika, które nastąpiło w miejscu pracy",
        C: "uraz stawu skokowego, który nastąpił podczas bezpośredniej drogi do pracy",
        D: "złamanie nogi podczas urlopu wypoczynkowego udzielonego przez pracodawcę"
    },
    poprawnaOdpowiedz: "C"
},
{
    pytanie: "Przedstawiony zbiór operatorów należy do grupy operatorów: ++ -- * % /",
    opcje: {
        A: "arytmetycznych",
        B: "przypisania",
        C: "logicznych",
        D: "porównania"
    },
    poprawnaOdpowiedz: "A"
},
{
    pytanie: "Liczba A4 zapisana systemem heksadecymalnym ma postać binarną",
    opcje: {
        A: "1010100",
        B: "10100100",
        C: "10100010",
        D: "1011100"
    },
    poprawnaOdpowiedz: "B"
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
