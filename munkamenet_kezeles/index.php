<!DOCTYPE html>
<html>
    <head>
        <meta charset=utf-8 />
        <title>Munkamenet kezelés (session)</title>
    </head>
    <body>
        <?php
            echo "<h1>Munkamenet kezelés (session)</h1>";

            /*
            * A Session arra való, hogy ha egy felhasználó bejelentkezik
            * és a munkamenet elején beállított változók végigkísérik
            * a folyamaton (pl.: jogosultságok)
            * //////////////////////////////////
            * Pl.: arra jó, hogy minden oldalon, 
            * ahol a felhasználó jár kiírjuk a Nevét
            */

            // index.php

            session_start(); // Ezzel a függvénnyel indítjuk el a Munkamenetet

            echo "Üdvözöllek az 1. oldalon!<br>";

            $_SESSION['szin'] = 'zöld';
            $_SESSION['allat'] = 'kutya';
            $_SESSION['ido'] = time();
            $_SESSION['nev'] = 'John';

            echo '<br><a href="oldal2.php">2. oldal</a>';
        ?>
    </body>
</html>