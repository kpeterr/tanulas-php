<!DOCTYPE html>
<html>
    <head>
        <meta charset=utf-8 />
        <title>Sütik (cookie) kezelése</title>
    </head>
    <body>

        <h1>Sütik (cookie) kezelése</h1>

        <p><strong>Üdvözöllek a Süti tesztben!</strong></p>

        <?php

            /*
            * A Sütik nem a szerveren tárolódnak, hanem a helyi gépen
            * A böngésző tárolja el
            * Tehát, ha bezárjuk a böngészőt a Süti akkor is megmarad!
            */

            // index.php

            $ertek = 'A Süti teszt tartalma';

            setcookie("TesztSuti", $ertek); // Ezzel hozzunk létre egy új Sütit (név->tartalom)

            // Be lehet állítani, hogy pl. 1 óra múlva törlődjön a Süti:
            //setcookie("TesztSuti", $ertek, time()+3600);

            // Így pedig 1 évig él:
            //setcookie("TesztSuti", $ertek, time()+(3600*24*365));

            // Meg lehet adni más elérési utat is:
            //setcookie("TesztSuti", $ertek, time()+3600, "/eleresi_ut");
            
        ?>

        <br><a href="oldal2.php">2. oldal >>></a>

    </body>
</html>