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

            echo "<strong>Több feltétel megadása egymásba ágyazással:</strong><br>";
            $var4 = 11;

            if ((1 == 1 && $var4 > 10) || 2 == 2) { // "&&" ez azt jelenti, hogy "és"
            	// ez a rész csak akkor fut le, ha mindkét oldal igaz
            	echo "A változó 0, vagy nagyobb mint 10.";
            } else {
            	echo "A változó ".$var4; 
            }

        ?>
    </body>
</html>