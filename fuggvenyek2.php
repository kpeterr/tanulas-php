<!DOCTYPE html>
<html>
    <head>
        <meta charset=utf-8 />
        <title>Függvények és névterek</title>
    </head>
    <body>
        <?php
            echo "<h1>Függvények és névterek</h1>";

            // Függvények részletesen
      
            echo "<strong>FÜGGVÉNYEK részletesen</strong><br>";

            /* NÉVTÉR:
            * Az a rész a kódban,
            * ahonnan a változó látható, illetve elérhető.
            * Azért van szükség erre a korlátozásra,
            * mert az összes változó betöltése nagyban
            * lassítaná a PHP kód futását.
            * Így csak az azonos névtérben szereplő változók
            * érhetőek el az abban szereplő függvényekben.
            */

            echo "<br>";
            // Változók láthatósága
            echo "VÁLTOZÓK láthatósága<br>";
            $valtozo = 5; // Egy változó létrehozása a Fő névtérben (Globális változó)
            function lathatosag() {
                global $valtozo; // A "global" kulcsszó használatával tudom láthatóvá tenni
                echo $valtozo; // Ez a változó nem látható a függvényen belül
            }
            lathatosag();

            /* Szuperglobális változók:
            * Mindenhol elérhetőek a PHP kódban
            */
            $_POST;
            $_GET;
            $_SERVER;

            /*
            function server() {
                echo "<pre>";
                print_r($_SERVER);
                echo "</pre>";
            }
            server();
            */

            echo "<hr>";
            // Visszatérési értékek
            echo "Visszatérési értékek<br>";
            function ret_teszt() {
                // amit a "return" után írunk, azzal fog a függvényünk visszatérni
                return "Hello World!<br>";
                // ha a return után próbáluk meg valamit futtatni az már nem fog lefutni,
                // mert a return megállítja a függvény futását
            }
            // az echo függvénnyel liíratjuk a visszatérési értékét a függvényünknek
            echo ret_teszt();

            // vagy elmenthetjük egy változóba is:
            $ezt_kaptuk_vissza = ret_teszt(); // értéket adunk a változónak
            echo $ezt_kaptuk_vissza; // majd ezt a változót íratjuk ki

            echo "<hr>";
            // Tetszőleges számú argumentum (paraméternek vagy adatnak is hívják)
            echo "Tetszőleges számú argumentum:<br>";
            function arg_teszt() { // a zárójelek közé kerül(nek) az argumentum(ok)
                // ezek is változók, de csak a függvényen belül láthatók
                // az alábbi beépített függvény visszaadja az összes argumentumot,
                // amit a függvénynek átadunk és ezt elmentjük egy változóba ($args)
                $args = func_get_args(); 
                echo "<pre>";
                print_r($args); // majd kiíratjuk a végeredményt
                echo "</pre>";
            }
            arg_teszt('szia', 'hello', 'szevasztok');

            /*
            * Amennyiben megadtunk egy argumentumot,
            * de a függvény meghívásánál nem adunk meg paramétert,
            * mindenképpen adjunk neki értéket ($adat=1),
            * mert ha nem adunk neki, akkor hibát jelez a PHP
            function arg_teszt1( $adat = 1) {
                $args = func_get_args(); 
                echo "<pre>";
                print_r($args); // majd kiíratjuk a végeredményt
                echo "</pre>";
            }
            arg_teszt1(); // Egy üres tömböt ad vissza, ha nem adunk meg neki értéket
            */

            echo "<br>";

            echo "Tetszőleges számú argumentumból csak egy használata:<br>";
            function arg_teszt2() { 
                $args = func_get_arg(2); // az 2-es kulcsú elemet kérjük használni
                echo "<pre>";
                print_r($args);
                echo "</pre>";
            }
            // a 2-es kulcsú elemet írja csak ki (szevasztok)
            arg_teszt2('szia', 'hello', 'szevasztok');
        ?>
    </body>
</html>