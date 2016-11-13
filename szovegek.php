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
        ?>
    </body>
</html>