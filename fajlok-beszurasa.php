<!DOCTYPE html>
<html>
    <head>
        <meta charset=utf-8 />
        <title>Állandók (constants) és fájlok beszúrása (include-require)</title>
    </head>
    <body>
        <?php
            echo "<h1>Állandók (constants) és fájlok beszúrása (include-require)</h1>";

            /*
            * Az Állandók olyan memóriaterületek,
            * illetve olyan dolgok a PHP-ban,
            * amelyek tartalmát nem lehet megváltoztatni.
            * Így az értéküket csak egyszer lehet beállítani
            * és utána már nem lehet megváltoztatni!
            * Bárhol elérhetőek!!!
            */ 

            // Állandó definiálása:
            define('PATH', dirname(__FILE__));
            // A "dirname()" egy előre beállított függvény,
            // amely azt a könyvtárt adja vissza,
            // ahol az a fájl található, amin éppen dolgozunk.
            // A "__FILE__" határozza meg a bekért fájl
            // elérési útját, amely a gyökérkönyvtárra utal.

            echo PATH."<br>"; // Kiírja a könyvtárat.
            echo __FILE__; // Ez pedig a fájlnevet írja ki.

            echo "<hr>";

            // Fájlok beszúrása
            
        ?>
    </body>
</html>