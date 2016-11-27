<!DOCTYPE html>
<html>
    <head>
        <meta charset=utf-8 />
        <title>Szuperglobális változók - $_POST</title>
    </head>
    <body>

        <h1>Szuperglobális változók - $_POST</h1>

        <?php

            /*
            * A POST egy szuperglobális tömb,
            * amit bárhonnan elérhetünk a PHP-n belül.
            */

            echo "A POST tömb hossza: ".count($_POST)."<br>";
            // A count egy számláló függvény, amely visszaadja a tömb hosszát

            if (count($_POST) > 0) { // Amennyiben a tömb nem üres (tömb>0)
                var_dump($_POST); // Kiíratjuk a tömb tartalmát
            }

        ?>

        <!-- A POST metódussal elküldött adatok
        számunkra láthatatlan formában közlekednek
        a szerver és a kliens gép között -->

        <form method="post">
            <input type="text" name="nev" placeholder="Név">
            <br>
            <input type="text" name="kor" placeholder="Életkor">
            <br>
            <button type="submit">Küldés</button>
        </form>
        
    </body>
</html>