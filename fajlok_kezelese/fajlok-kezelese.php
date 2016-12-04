<!DOCTYPE html>
<html>
    <head>
        <meta charset=utf-8 />
        <title>Fájlok kezelése</title>
    </head>
    <body>

        <h1>Fájlok kezelése</h1>

        <?php
            echo "<strong>TXT fajl beolvasása <code>file_get_contents()</code> függvénnyel:</strong><br>";

            $tartalom = file_get_contents('file.txt');
            // Ezzel a beépített függvénnyel olvassuk be a fájl tartalmát,
            // majd elmentjük egy változóba
            echo $tartalom;

            echo "<hr>";

            echo "<strong>TXT fajl írása <code>file_put_contents()</code> függvénnyel:</strong><br>";

            $tartalom2 = "Ez egy új tartalom!";
            file_put_contents('file2.txt', $tartalom2);
            echo file_get_contents('file2.txt');

            echo "<hr>";

            echo "<strong>Új TXT fajl létrehozása az <code>fopen()</code> függvénnyel:</strong><br>";

            $fajl = 'file3.txt';
            $fajlkezeles = fopen($fajl, "w");
            // a második paraméter a jogosultságra vonatkozik
            // "w" írási jog
            
        ?>
    </body>
</html>