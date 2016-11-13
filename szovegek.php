<!DOCTYPE html>
<html>
    <head>
        <meta charset=utf-8 />
        <title>Szövegek kezelése</title>
    </head>
    <body>
        <?php
            echo "<h1>Szövegek kezelése</h1>";

            // Substring
            echo "<strong>Substring - alszöveg, szövegvágás:</strong><br>";
            $str1 = 'Hello World!';
            /*
            ** Substring
            * Egy olyan függvény, amely egy meglévő szövegből
            * kivág egy részletet és azt adja visza.
            */
            echo substr($str1, 6)."<br>";
            // A 6. karakterig vágja le a szöveg elejét

            echo substr($str1, 6, 2)."<br>";
            // A 6. karakterig vágja le a szöveg elejét
            // és 2 karaktert ír ki

            echo substr($str1, -1)."<br>";
            // Negatív számnál a szöveg végéről
            // veszi le a karaktert


            echo "<hr>";

            // String position
            echo "<strong>String position - szövegben keresés:</strong><br>";

            /*
            ** String position
            * Egy meglévő szövegben tudunk keresni
            * Pl.: hányadik karakternél kezdődik a "Word!" szó?
            */

            echo $str1."<br>";
            echo "A ".strpos($str1, 'World').". karaktertől szerepel a szövegben a 'World!' szó.<br>";
            // Először megadjuk a szöveget, amelyben keresünk ($str1)
            // Utána megadjuk, hogy milyen szöveget keresünk
            // Ha olyan szót adunk meg, amely nem szerepel
            // a szövegben, akkor semmit nem ír ki a függvény.
            // Hamis értékkel tér vissza

            echo "<br>";

            echo "Olyan szó keresése, amely nem szerepel a szövegben:<br>";

            // Elmentjük egy változóba a keresés eredményét
            $pos = strpos($str1, 'mouse');
            echo gettype($pos)."<br>"; // Kiíratjuk a változó típusát
            if ($pos === false) echo "A keresett szó nem szerepel a szövegben<br>"; // Itt szigorú megfeleltetést kell alkalmazni

            echo "<br>";

            echo "A nem angol betűk 2 karaktert foglalnak:<br>";
            $str2 = 'Helló World!';

            echo $str2."<br>";
            echo "A ".strpos($str2, 'World').". karaktertől szerepel a szövegben a 'World!' szó.<br>";
            // Ez a függvény ezért nem ad teljesen pontos képet

            echo "<hr>";

            // String replace
            echo "<strong>String replace - szövegrész cseréje:</strong><br>";

            /*
            ** String replace
            * Egy szövegben tud pl. szavakat kicserélni
            */

            $str3 = 'Hello World!';
            echo $str3."<br>";
            echo str_replace('World', 'Africa', $str3)."<br>";
            /*
            * 1. - mit keresünk
            * 2. - mire szeretnénk lecserélni
            * 3. - hol, melyik szövegben
            */

            echo "<br>";

            echo "Megadhatunk tömböket is a cserénél:<br>";
            $str4 = 'Hello World!';
            echo $str4."<br>";
            echo str_replace(
                array('Hello', 'World'),
                array('Great', 'Africa'),
                $str4
            )."<br>";

            echo "<hr>";

            // Sprintf
            echo "<strong>Sprintf - bonyolult csere:</strong><br>";

            /*
            ** Sprintf
            * Ha pl. egy MySQL adatbázisban sok mindent szeretnénk
            * lecserélni
            */

            $nev = 'Joe';
            $kor = 22;
            $munka = 'mérnök';

            $str5 = "$nev $kor éves, a munkája: $munka.<br>";
            echo $str5;

            echo "<br>";

            // Sprintf használatával így néz ki:
            echo "Sprintf használatával így néz ki:<br>";
            
            // Helyőrző karakterek beszúrása:
            // Simpla idézőjelekkel is használható
            // Így még gyorsabban fut le a kód
            $str6 = '%s %s éves, a munkája: %s.';

            // Beírjuk a sprintf függvénnyel a változókat:
            $str6 = sprintf($str6, $nev, $kor, $munka);
            echo $str6;
        ?>
    </body>
</html>