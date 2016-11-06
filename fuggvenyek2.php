<!DOCTYPE html>
<html>
    <head>
        <meta charset=utf-8 />
        <title>Függvények és névterek</title>
    </head>
    <body>
        <?php
            // Függvények részletesen
      
            echo "<strong>FÜGGVÉNYEK részletesen</strong><br>";

            /* NÉVTÉR:
            * Az a rész a kódban,
            * ahonnan a változó látható iletve elérhető
            * Azért van szükség erre a korlátozásra,
            * mert az összes változó betöltése nagyban
            * lassítaná a PHP kód futását
            * Így csak az azonos névtérben szereplő változók
            * érhetőek el az abban szereplő függvényekben
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
                var_dump($_SERVER);
            }
            server();
            */

            echo "<hr>";
            // Visszatérési értékek
            echo "Visszatérési értékek<br>";
            function ret_teszt() {
                // amit a "return" után írunk, azza fog a függvényünk visszatérni
                return "Hello World!<br>"; 
            }
            // az echo függvénnyel liíratjuk a visszatérési értékét a függvényünknek
            echo ret_teszt();

            // vagy elmenthetjük egy változóba is:
            $ezt_kaptuk_vissza = ret_teszt(); // értéket adunk a változónak
            echo $ezt_kaptuk_vissza;

        ?>
    </body>
</html>