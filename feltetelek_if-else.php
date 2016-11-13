<!DOCTYPE html>
<html>
    <head>
        <meta charset=utf-8 />
        <title>Feltételek (conditions)</title>
    </head>
    <body>
        <?php
        	// Feltételek  (conditions)
        	echo "<h1>Feltételek (conditions)</h1>";

        	/*
			* Alkalmazható jelölések:
			* "==" - egyenlő
			* "===" - szigorúan egyenlő (itt a típus is számit)
			* "!=" - NEM egyenlő
			* ">" - nagyobb
			* "<" - kisebb
			* ">=" - nagyobb, egyenlő
			* "<=" - kisebb, egyenlő
        	*/

        	// Egy feltétel létrehozása
            echo "<strong>Egy feltétel létrehozása:</strong><br>";
            $var1 = 10;

            if ($var1 == 0) { // "==" egy logikai kifejezés
            	// ez a rész akkor fut le, ha a fenti feltétel ($var == 0) igaz (true)
            	echo "A változó 0";
            } else {
            	// ha nem igaz, akkor pedig ez a rész fut le
            	echo "A változó ".$var1; // így hozzáfűzzük az aktuális változót
            }

            echo "<hr>";

            // Több feltétel megadása
            echo "<strong>Több feltétel megadása 'vagy' használatával:</strong><br>";
            $var2 = 11;

            if ($var2 == 0 || $var2 > 10) { // "||" ez azt jelenti, hogy "vagy"
            	// ez a rész csak akkor fut le, ha az egyik oldal igaz
            	echo "A változó 0, vagy nagyobb mint 10.";
            } else {
            	echo "A változó ".$var2; 
            }

            echo "<br>";

            echo "<strong>Több feltétel megadása 'és' használatával:</strong><br>";
            $var3 = 11;

            if (1 == 1 && $var3 > 10) { // "&&" ez azt jelenti, hogy "és"
            	// ez a rész csak akkor fut le, ha mindkét oldal igaz
            	echo "A változó 0, vagy nagyobb mint 10.";
            } else {
            	echo "A változó ".$var3; 
            }

            echo "<br>";

            echo "<strong>Több feltétel megadása egymásba ágyazással:</strong><br>";
            $var4 = 11;

            if ((1 == 1 && $var4 > 10) || 2 == 2) { // "&&" ez azt jelenti, hogy "és"
            	// ez a rész csak akkor fut le, ha mindkét oldal igaz
            	echo "A változó 0, vagy nagyobb mint 10.";
            } else {
            	echo "A változó ".$var4; 
            }

            echo "<hr>";

            echo "<strong>A változók típusainak megkülönböztetése:</strong><br>";
            // Az alábbiakban csak a tartalmát hasonlítja össze
            if ( 1 == '1') { // csak a tartalmát nézi és nem a típusát
            	echo "A kifejezés igaz."; // Ez a rész fut le
            } else {
            	echo "A kifejezés hamis.";
            }

            echo "<br>";

            /*
            * Az alábbiakban nem csak a tartalmát,
            * hanem a típusát is figyelembe veszi
            * (szigorú megfeleltetés)
            * Ez akkor jön jól, ha nem tudjuk,
            * hogy a MySQL adatbázisban milyen típusú
            * változók fordulnak elő.
            * Így elkerülhető, hogy a PHP egy Integer és egy String
            * típusú változót egyformának ítéljen meg.
            */
            if ( 1 === '1') { // itt már a TÍPUSÁT is nézi, nem csak a tartalmát
            	echo "A kifejezés igaz.";
            } else {
            	echo "A kifejezés hamis."; // Ez a rész fut le
            }

            echo "<hr>";

            echo "<strong>Tagadás:</strong><br>";
            // Amennyiben azt szeretnénk megadni,
            // hogy a két érték nem egyenlő egymással,
            // akkor az alábbi kifejezést kell megadni:
            if ( 1 != 1) { // "!=" ez a tagadás jele (negálás)
            	echo "A kifejezés igaz.";
            } else {
            	echo "A kifejezés hamis."; // Ez fut le
            }

            echo "<hr>";

            echo "<strong>A Feltételek egymás után sorolása (if-elseif):</strong><br>";
            // A feltételek egymás után sorolhatóak
            // De az a megoldás nem célravezető, errőforrásigényes
            // Hiszen a PHP végignézi az összes feltételt
            $var5 = 2;

            if ($var5 == 1) {
            	echo "A változó 1";
            } else if ($var5 == 2){
            	echo "A változó 2";
            } else if ($var5 == 3){
            	echo "A változó 3";
            } else {
            	echo "A változó ".$var5;
            }

            echo "<hr>";

            echo "<strong>Switch (kapcsoló) használata:</strong><br>";
            
            $var6 = 5;

            switch ($var6) { // Definiáljuk a "$var6" változóra
            	case 3: // 1. eset: megadjuk a működési értéket
            		echo "A változó 3";
            		break; // Fontos megadni, hogy ne fusson tovább a program
            	case 5:
            		echo "A változó 5";
            		break;
            	case 7:
            		echo "A változó 7";
            		break;
            	case 10:
            		echo "A változó 10";
            		break;

            	default: // Ez fut le, ha a fentiek közül egyik sem igaz
            		echo "Egyik sem!";
            		break;
            }
        ?>
    </body>
</html>