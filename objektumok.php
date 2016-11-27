<!DOCTYPE html>
<html>
    <head>
        <meta charset=utf-8 />
        <title>Objektumok</title>
    </head>
    <body>
        <?php
            echo "<h1>Objektumok</h1>";

            /*
            * Olyan memória területek, ahol gyakorlatilag
            * bármit tárolhatunk, kicsit hasonlóak a tömbökhöz.
            * Lényeges különbség, hogy kölönböző figgvényeket és
            * eljárásokat is létre tudunk hozni bennük, ezáltal
            * sokkal összetettebbek, mint a Tömbök
            */ 

            // Objektum létrehozása
            $obj = new stdClass; // Ilyen fajta objektumba nem lehet függvényt beletenni!

            // Az objektum feltöltése adattal:
            $obj->var1 = 20;
            $obj->var2 = true;
            $obj->arr = array(1, 2, 3);

            // A létrehozott objektum kiírása
            echo "<strong>A létrehozott objektum kiírása:</strong><br>";
            echo "<pre>";
            print_r($obj);
            echo "</pre>";

            // Az objektum egyik elemének kiírása
            echo "<strong>Az objektum egyik elemének kiírása:</strong><br>";
            echo $obj->var2;
        ?>
    </body>
</html>